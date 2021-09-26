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
    $this->load->view('template/header', $data);
    $this->load->view('data_ijazah_nilai_admin', $data);
    $this->load->view('template/footer');
  }

  public function export()
  {
    $npsn = $this->input->post('npsn');
    $jurusan = $this->input->post('jurusan');
    $data = array('npsn' => $npsn, 'jurusan' => $jurusan);
    //=======================================================
    $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    //Mulai baris
    $A = 3;
    $B = 3;
    $C = 3;
    $D = 3;
    $E = 3;
    $F = 3;
    $G = 3;
    $H = 3;
    $I = 3;
    $J = 3;
    $K = 3;
    $L = 3;
    $M = 3;
    $N = 3;
    $O = 3;
    $P = 3;
    $Q = 3;
    $R = 3;
    $S = 3;
    $T = 3;
    $U = 3;
    $V = 3;
    $W = 3;
    $X = 3;
    $Y = 3;
    foreach ($this->Nilai_model->getAllNilaiAdmin($data) as $n) {
      $data_m = $n->jurusan;
      $data_i = $n->nama_siswa;
      $judul = 'Data Ijazah dan Nilai Siswa ' . $n->sekolah . ' Jurusan ' . $n->jurusan;
      $sheet->getCell('A1')->setValue($judul);
      $sheet->getCell('A2')->setValue('Nama Siswa');
      $sheet->getCell('B2')->setValue('NISN');
      $sheet->getCell('C2')->setValue('Jurusan');
      $sheet->getCell('D2')->setValue('Tahun Lulus');
      $sheet->getCell('E2')->setValue('Nomor Ijazah');
      foreach ($this->Nilai_model->getAllMapel($data_m) as $m) {
        $sheet->getCell('F2')->setValue($m->mapel_01);
        $sheet->getCell('G2')->setValue($m->mapel_02);
        $sheet->getCell('H2')->setValue($m->mapel_03);
        $sheet->getCell('I2')->setValue($m->mapel_04);
        $sheet->getCell('J2')->setValue($m->mapel_05);
        $sheet->getCell('K2')->setValue($m->mapel_06);
        $sheet->getCell('L2')->setValue($m->mapel_07);
        $sheet->getCell('M2')->setValue($m->mapel_08);
        $sheet->getCell('N2')->setValue($m->mapel_09);
        $sheet->getCell('O2')->setValue($m->mapel_10);
        $sheet->getCell('P2')->setValue($m->mapel_11);
        $sheet->getCell('Q2')->setValue($m->mapel_12);
        $sheet->getCell('R2')->setValue($m->mapel_13);
        $sheet->getCell('S2')->setValue($m->mapel_14);
        $sheet->getCell('T2')->setValue($m->mapel_15);
        $sheet->getCell('U2')->setValue($m->mapel_16);
        $sheet->getCell('V2')->setValue($m->mapel_17);
        $sheet->getCell('W2')->setValue($m->mapel_18);
        $sheet->getCell('X2')->setValue($m->mapel_19);
        $sheet->getCell('Y2')->setValue($m->mapel_20);
      }
      $sheet->getCell('A' . $A++)->setValue($n->nama_siswa);
      $sheet->getCell('B' . $B++)->setValue($n->nisn);
      $sheet->getCell('C' . $C++)->setValue($n->jurusan);
      $sheet->getCell('D' . $D++)->setValue($n->tahun_lulus);
      foreach ($this->Nilai_model->getAllIjazah($data_i) as $i) {
        $sheet->getCell('E' . $E++)->setValue($i->no_ijazah);
      }
      $sheet->getCell('F' . $F++)->setValue($n->mapel_01);
      $sheet->getCell('G' . $G++)->setValue($n->mapel_02);
      $sheet->getCell('H' . $H++)->setValue($n->mapel_03);
      $sheet->getCell('I' . $I++)->setValue($n->mapel_04);
      $sheet->getCell('J' . $J++)->setValue($n->mapel_05);
      $sheet->getCell('K' . $K++)->setValue($n->mapel_06);
      $sheet->getCell('L' . $L++)->setValue($n->mapel_07);
      $sheet->getCell('M' . $M++)->setValue($n->mapel_08);
      $sheet->getCell('N' . $N++)->setValue($n->mapel_09);
      $sheet->getCell('O' . $O++)->setValue($n->mapel_10);
      $sheet->getCell('P' . $P++)->setValue($n->mapel_11);
      $sheet->getCell('Q' . $Q++)->setValue($n->mapel_12);
      $sheet->getCell('R' . $R++)->setValue($n->mapel_13);
      $sheet->getCell('S' . $S++)->setValue($n->mapel_14);
      $sheet->getCell('T' . $T++)->setValue($n->mapel_15);
      $sheet->getCell('U' . $U++)->setValue($n->mapel_16);
      $sheet->getCell('V' . $V++)->setValue($n->mapel_17);
      $sheet->getCell('W' . $W++)->setValue($n->mapel_18);
      $sheet->getCell('X' . $X++)->setValue($n->mapel_19);
      $sheet->getCell('Y' . $Y++)->setValue($n->mapel_20);
    };

    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    $filename = $judul;

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
  }
}
