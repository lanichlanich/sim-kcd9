<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model"); //load model mahasiswa
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
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
        $data["title"] = "SIM KCD-IX";
        $data["siswa"] = $this->Siswa_model->getAll();
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('daftar_siswa/index', $data);
        $this->load->view('template/footer');
    }

    public function export()
    {
        $npsn = $this->input->post('sekolah');
        if ($npsn == 'all') {
            //All Data
            $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            //Mulai baris
            $noA = 3;
            $noB = 3;
            $noC = 3;
            $noD = 3;
            $noE = 3;
            $noF = 3;
            foreach ($this->Siswa_model->generateAllSiswa() as $all) {
                $npsn = $all->npsn;
                $judul = 'Data Siswa di Cabang Dinas Pendidikan Wilayah IX';
                $sheet->getCell('A1')->setValue($judul);
                $sheet->getCell('A2')->setValue('Nama Siswa');
                $sheet->getCell('B2')->setValue('NISN');
                $sheet->getCell('C2')->setValue('JK');
                $sheet->getCell('D2')->setValue('Tempat Tanggal Lahir');
                $sheet->getCell('E2')->setValue('Kelas');
                $sheet->getCell('F2')->setValue('Sekolah');
                $sheet->getCell('A' . $noA++)->setValue($all->nama);
                $sheet->getCell('B' . $noB++)->setValue("'" . $all->nisn);
                $sheet->getCell('C' . $noC++)->setValue($all->jk);
                $sheet->getCell('D' . $noD++)->setValue($all->tempat_lahir . ', ' . $all->tanggal_lahir);
                $sheet->getCell('E' . $noE++)->setValue($all->rombel);
                foreach ($this->Sekolah_model->getWhere($npsn) as $sekolah) {
                    $sheet->getCell('F' . $noF++)->setValue($sekolah->nama_sekolah);
                }
            };

            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

            $filename = 'Data Siswa di CADISDIK WIL-IX';

            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
            header('Cache-Control: max-age=0');

            $writer->save('php://output');
        } else {
            //Data by Sekolah
            foreach ($this->Sekolah_model->getWHere($npsn) as $s) {
                $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();
                //Mulai baris
                $noA = 3;
                $noB = 3;
                $noC = 3;
                $noD = 3;
                $noE = 3;
                foreach ($this->Siswa_model->getWhere($npsn) as $row) {
                    $judul = 'Data Siswa di ' . $s->nama_sekolah;
                    $sheet->getCell('A1')->setValue($judul);
                    $sheet->getCell('A2')->setValue('Nama Siswa');
                    $sheet->getCell('B2')->setValue('NISN');
                    $sheet->getCell('C2')->setValue('JK');
                    $sheet->getCell('D2')->setValue('Tempat Tanggal Lahir');
                    $sheet->getCell('E2')->setValue('Kelas');
                    $sheet->getCell('A' . $noA++)->setValue($row->nama);
                    $sheet->getCell('B' . $noB++)->setValue("'" . $row->nisn);
                    $sheet->getCell('C' . $noC++)->setValue($row->jk);
                    $sheet->getCell('D' . $noD++)->setValue($row->tempat_lahir . ', ' . $row->tanggal_lahir);
                    $sheet->getCell('E' . $noE++)->setValue($row->rombel);
                };
                $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

                $filename = 'Data Siswa di ' . $s->nama_sekolah;

                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
                header('Cache-Control: max-age=0');

                $writer->save('php://output');
            }
        }
    }
}
