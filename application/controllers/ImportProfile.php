<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportProfile extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */

  public function __construct()
  {
    parent::__construct();

    $this->load->model('m_importprofile');
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
    $data["pengguna"] = $this->M_profile->getAll();
    $this->load->view('template/header', $data);
    $this->load->view('import_profile', $data);
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
    $spreadsheet->setActiveSheetIndex(0);
    $sheetdata = $spreadsheet->getActiveSheet();
    // echo '<pre>';
    // print_r($sheetdata); test upload file excel nya :)

    $kode = $this->input->post('kode');

    //$user_id=$sheetdata[$i][4];
    $nama_sekolah = $sheetdata->getCell('D4');
    $npsn = $sheetdata->getCell('D5');
    $jenjang = $sheetdata->getCell('D6');
    $status = $sheetdata->getCell('D7');
    $alamat = $sheetdata->getCell('D8');
    $rt = $sheetdata->getCell('D9');
    $rw = $sheetdata->getCell('F9');
    $kode_pos = $sheetdata->getCell('D10');
    $kelurahan = $sheetdata->getCell('D11');
    $kecamatan = $sheetdata->getCell('D12');
    $kabupaten = $sheetdata->getCell('D13');
    $provinsi = $sheetdata->getCell('D14');
    $negara = $sheetdata->getCell('D15');
    $lintang = $sheetdata->getCell('D16');
    $bujur = $sheetdata->getCell('D17');

    date_default_timezone_set("Asia/Jakarta");

    $data = array(
      'nama_sekolah'  => $nama_sekolah,
      'npsn'          => $npsn,
      'jenjang'       => $jenjang,
      'status'        => $status,
      'alamat'        => $alamat,
      'rt'            => $rt,
      'rw'            => $rw,
      'kode_pos'      => $kode_pos,
      'kelurahan'     => $kelurahan,
      'kecamatan'     => $kecamatan,
      'kabupaten'     => $kabupaten,
      'provinsi'      => $provinsi,
      'negara'        => $negara,
      'lintang'       => $lintang,
      'bujur'         => $bujur
    );

    $where = array(
      'id_profile'    => $kode
    );

    $this->m_importprofile->update_profile('profile_sekolah', $data, $where);
    $this->session->set_flashdata('success', '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data profile sekolah sukses terupload.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    ');
    redirect('profilesekolah');
  }
}