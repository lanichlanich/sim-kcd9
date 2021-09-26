<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarIjazahNilai extends CI_Controller
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
    $data["pengguna"] = $this->Profile_model->getPengguna();
    $data["ijanil"] = $this->Nilai_model->getAll();
    $data["sekolah"] = $this->Sekolah_model->getAll();
    $this->load->view('template/header', $data);
    $this->load->view('data_ijazah_nilai_admin', $data);
    $this->load->view('template/footer');
  }

  // public function export()
  // {
  //   $npsn = $this->input->post('sekolah');
  //   //=======================================================
  //   $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
  //   $sheet = $spreadsheet->getActiveSheet();
  //   //Mulai baris
  //   $noA = 3;
  //   $noB = 3;
  //   $noC = 3;
  //   $noD = 3;
  //   $noE = 3;
  //   $noF = 3;
  //   foreach ($this->Siswa_model->getAllMapel($npsn) as $m) {
  //     $judul = 'Data Ijazah dan Nilai di CADISDIK WIL-IX';
  //     $sheet->getCell('A1')->setValue($judul);
  //     $sheet->getCell('A2')->setValue('Nama Siswa');
  //     $sheet->getCell('B2')->setValue('NISN');
  //     $sheet->getCell('C2')->setValue('Jurusan');
  //     $sheet->getCell('D2')->setValue('Tahun Lulus');
  //     $sheet->getCell('E2')->setValue('Nomor Ijazah');
  //     $sheet->getCell('F2')->setValue($m->mapel_01);
  //   };

  //   $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

  //   $filename = 'Data Ijazah dan Nilai di CADISDIK WIL-IX';

  //   header('Content-Type: application/vnd.ms-excel');
  //   header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
  //   header('Cache-Control: max-age=0');

  //   $writer->save('php://output');
  // }
}
