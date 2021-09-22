<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportNilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Nilai_model');
        //$this->load->library('excel');

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                      Maaf, Anda belum Login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
            redirect('authentication/login');
        }
    }

    public function index()
    {
        $data['title'] = "SIM KCD-IX";
        $data["mapel"] = $this->Nilai_model->getAllMapel();
        $data["nilai"] = $this->Nilai_model->getAllNilai();
        $this->load->view('template/header', $data);
        $this->load->view('import_nilai', $data);
        $this->load->view('template/footer');
    }

    public function import_nilai()
    {

        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);
        if ($extension == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else if ($extension == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);

        //Vlidasi file yang diupload apakah benar?
        $validasi_data = $spreadsheet->getActiveSheet();
        $validasi = $validasi_data->getCell('A1');

        if ($validasi == 'Import Nilai') {
        } else {
            $this->session->set_flashdata('error', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Upload data gagal, silahkan coba lagi.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
            redirect('importnilai');
        }

        $sheetdata = $spreadsheet->getActiveSheet()->toArray();
        // echo '<pre>';
        // print_r($sheetdata); test upload file excel nya :)

        $sheetcount = count($sheetdata);
        if ($sheetcount > 1) {
            $data = array();
            for ($i = 2; $i < $sheetcount; $i++) {
                //$user_id=$sheetdata[$i][4];
                $npsn = $this->session->nama_pengguna;
                $nisn = $sheetdata[$i][2];
                $p_agama = $sheetdata[$i][3];
                $ppkn = $sheetdata[$i][4];
                $b_indo = $sheetdata[$i][5];
                $mtk_umum = $sheetdata[$i][6];
                $sej_indo = $sheetdata[$i][7];
                $b_inggris = $sheetdata[$i][8];
                $seni_budaya = $sheetdata[$i][9];
                $penjas = $sheetdata[$i][10];
                $pkwu = $sheetdata[$i][11];
                $mulok = $sheetdata[$i][12];
                $mtk_minat = $sheetdata[$i][13];
                $biologi = $sheetdata[$i][14];
                $fisika = $sheetdata[$i][15];
                $kimia = $sheetdata[$i][16];
                $lm_1 = $sheetdata[$i][17];
                $lm_2 = $sheetdata[$i][18];

                date_default_timezone_set("Asia/Jakarta");

                $data[] = array(
                    //'user_id'=>$user_id,
                    'nisn' => $nisn,
                    'p_agama' => $p_agama,
                    'ppkn' => $ppkn,
                    'b_indo' => $b_indo,
                    'mtk_umum' => $mtk_umum,
                    'sej_indo' => $sej_indo,
                    'b_inggris' => $b_inggris,
                    'seni_budaya' => $seni_budaya,
                    'penjas' => $penjas,
                    'pkwu' => $pkwu,
                    'mulok' => $mulok,
                    'mtk_minat' => $mtk_minat,
                    'biologi' => $biologi,
                    'fisika' => $fisika,
                    'kimia' => $kimia,
                    'lm_1' => $lm_1,
                    'lm_2' => $lm_2,
                    'npsn' => $npsn,
                );
            }

            $keyArray = array('npsn' => $npsn);
            $this->db->where($keyArray);
            $this->db->delete('us_sma_ipa');

            $this->Nilai_model->import_sma_ipa($data);
            $this->session->set_flashdata('sukses', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Upload data sukses.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
            redirect('importnilai');
        }
    }
}
