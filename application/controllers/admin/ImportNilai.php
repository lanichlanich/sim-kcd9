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

        if ($this->session->userdata('role_id') != '1' && $this->session->userdata('role_id') != '3') {
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
        $data["mapel"] = $this->Mapel_model->getAllMapel();
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

        $sheetdata = $spreadsheet->getSheetByName('Worksheet')->toArray();

        $sheetcount = count($sheetdata);
        if ($sheetcount > 1) {
            $data = array();
            for ($i = 4; $i < $sheetcount; $i++) {
                $nisn           = $sheetdata[$i][0];
                $nama_siswa     = $sheetdata[$i][1];
                $mapel_01       = $sheetdata[$i][2];
                $mapel_02       = $sheetdata[$i][3];
                $mapel_03       = $sheetdata[$i][4];
                $mapel_04       = $sheetdata[$i][5];
                $mapel_05       = $sheetdata[$i][6];
                $mapel_06       = $sheetdata[$i][7];
                $mapel_07       = $sheetdata[$i][8];
                $mapel_08       = $sheetdata[$i][9];
                $mapel_09       = $sheetdata[$i][10];
                $mapel_10       = $sheetdata[$i][11];
                $mapel_11       = $sheetdata[$i][12];
                $mapel_12       = $sheetdata[$i][13];
                $mapel_13       = $sheetdata[$i][14];
                $mapel_14       = $sheetdata[$i][15];
                $mapel_15       = $sheetdata[$i][16];
                $mapel_16       = $sheetdata[$i][17];
                $mapel_17       = $sheetdata[$i][18];
                $mapel_18       = $sheetdata[$i][19];
                $mapel_19       = $sheetdata[$i][20];
                $mapel_20       = $sheetdata[$i][21];
                $npsn           = $sheetdata[$i][22];
                $jurusan        = $sheetdata[$i][23];
                $tahun_lulus    = $sheetdata[$i][24];

                date_default_timezone_set("Asia/Jakarta");

                $data[] = array(
                    'nisn'          => $nisn,
                    'nama_siswa'    => $nama_siswa,
                    'mapel_01'      => $mapel_01,
                    'mapel_02'      => $mapel_02,
                    'mapel_03'      => $mapel_03,
                    'mapel_04'      => $mapel_04,
                    'mapel_05'      => $mapel_05,
                    'mapel_06'      => $mapel_06,
                    'mapel_07'      => $mapel_07,
                    'mapel_08'      => $mapel_08,
                    'mapel_09'      => $mapel_09,
                    'mapel_10'      => $mapel_10,
                    'mapel_11'      => $mapel_11,
                    'mapel_12'      => $mapel_12,
                    'mapel_13'      => $mapel_13,
                    'mapel_14'      => $mapel_14,
                    'mapel_15'      => $mapel_15,
                    'mapel_16'      => $mapel_16,
                    'mapel_17'      => $mapel_17,
                    'mapel_18'      => $mapel_18,
                    'mapel_19'      => $mapel_19,
                    'mapel_20'      => $mapel_20,
                    'npsn'          => $npsn,
                    'jurusan'       => $jurusan,
                    'tahun_lulus'   => $tahun_lulus,
                );
            }

            //Detect
            if ($this->Nilai_model->countAllNilai() == 0) {
            } else {
                $keyArray = array('npsn' => $this->session->nama_pengguna, 'tahun_lulus' => $tahun_lulus, 'jurusan' => $jurusan);
                $this->db->where($keyArray);
                $this->db->delete('nilai');
            }

            $this->Nilai_model->import_nilai($data);
            redirect('admin/nilai');
        }
    }
}
