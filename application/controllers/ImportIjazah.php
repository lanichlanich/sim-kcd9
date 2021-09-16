<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportIjazah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Ijazah_model');
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
        $this->load->view('template/header', $data);
        $this->load->view('import_ijazah', $data);
        $this->load->view('template/footer');
    }

    public function spreadsheet_import()
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

        if ($validasi == 'Import Ijazah') {
        } else {
            $this->session->set_flashdata('error', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Upload data Ijazah gagal, silahkan coba lagi.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
            redirect('importIjazah');
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
                $nisn = $sheetdata[$i][1];
                $nama_siswa = $sheetdata[$i][2];
                $tahun_lulus = $sheetdata[$i][3];
                $no_ijazah = $sheetdata[$i][4];

                date_default_timezone_set("Asia/Jakarta");

                $data[] = array(
                    //'user_id'=>$user_id,
                    'npsn' => $npsn,
                    'nisn' => $nisn,
                    'nama_siswa' => $nama_siswa,
                    'tahun_lulus' => $tahun_lulus,
                    'no_ijazah' => $no_ijazah,

                );
            }

            $keyArray = array('npsn' => $this->session->nama_pengguna,);
            $this->db->where($keyArray);
            $this->db->delete('ijazah');

            $this->Ijazah_model->save_ijazah($data);
            $this->session->set_flashdata('sukses', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Upload data Ijazah sukses.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
            redirect('profilesekolah');
        }
    }
}
