<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarGtk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1' && $this->session->userdata('role_id') != '3') {
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

    //GURU
    public function guru()
    {
        $data["title"] = "SIM KCD-IX";
        $data['pengguna'] = $this->Profile_model->getPengguna();
        $data["guru"] = $this->Profile_model->getAllGuru();
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('daftar_gtk/guru', $data);
        $this->load->view('template/footer');
    }

    public function export_guru()
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
            foreach ($this->Gtk_model->getAllGuru() as $all) {
                $npsn = $all->npsn;
                $judul = 'Data Guru di Cabang Dinas Pendidikan Wilayah IX';
                $sheet->getCell('A1')->setValue($judul);
                $sheet->getCell('A2')->setValue('Nama');
                $sheet->getCell('B2')->setValue('Status Kepegawaian');
                $sheet->getCell('C2')->setValue('Tempat, Tanggal Lahir');
                $sheet->getCell('D2')->setValue('NIP / NUPTK');
                $sheet->getCell('E2')->setValue('Sekolah');
                $sheet->getCell('A' . $noA++)->setValue($all->nama);
                $sheet->getCell('B' . $noB++)->setValue($all->status_kepegawaian);
                $sheet->getCell('C' . $noC++)->setValue($all->tempat_lahir . ', ' . $all->tanggal_lahir);
                $sheet->getCell('D' . $noD++)->setValue($all->nip . ' / ' . $all->nuptk);
                foreach ($this->Sekolah_model->getWhere($npsn) as $sekolah) {
                    $sheet->getCell('E' . $noE++)->setValue($sekolah->nama_sekolah);
                }
            };

            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

            $filename = 'Data Guru di CADISDIK WIL-IX';

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
                foreach ($this->Gtk_model->getWhereGuru($npsn) as $row) {
                    $judul = 'Data Guru di ' . $s->nama_sekolah;
                    $sheet->getCell('A1')->setValue($judul);
                    $sheet->getCell('A2')->setValue('Nama');
                    $sheet->getCell('B2')->setValue('Status Kepegawaian');
                    $sheet->getCell('C2')->setValue('Tempat, Tanggal Lahir');
                    $sheet->getCell('D2')->setValue('NIP / NUPTK');
                    $sheet->getCell('A' . $noA++)->setValue($row->nama);
                    $sheet->getCell('B' . $noB++)->setValue($row->status_kepegawaian);
                    $sheet->getCell('C' . $noC++)->setValue($row->tempat_lahir . ', ' . $row->tanggal_lahir);
                    $sheet->getCell('D' . $noD++)->setValue($row->nip . ' / ' . $row->nuptk);
                };
                $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

                $filename = 'Data Guru di ' . $s->nama_sekolah;

                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
                header('Cache-Control: max-age=0');

                $writer->save('php://output');
            }
        }
    }

    //TENDIK
    public function tendik()
    {
        $data["title"] = "SIM KCD-IX";
        $data['pengguna'] = $this->Profile_model->getPengguna();
        $data["tendik"] = $this->Profile_model->getAllTendik();
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('daftar_gtk/tendik', $data);
        $this->load->view('template/footer');
    }

    public function export_tendik()
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
            foreach ($this->Gtk_model->getAllTendik() as $all) {
                $npsn = $all->npsn;
                $judul = 'Data Tenaga Kependidikan di Cabang Dinas Pendidikan Wilayah IX';
                $sheet->getCell('A1')->setValue($judul);
                $sheet->getCell('A2')->setValue('Nama');
                $sheet->getCell('B2')->setValue('Status Kepegawaian');
                $sheet->getCell('C2')->setValue('Tempat, Tanggal Lahir');
                $sheet->getCell('D2')->setValue('NIP / NUPTK');
                $sheet->getCell('E2')->setValue('Sekolah');
                $sheet->getCell('A' . $noA++)->setValue($all->nama);
                $sheet->getCell('B' . $noB++)->setValue($all->status_kepegawaian);
                $sheet->getCell('C' . $noC++)->setValue($all->tempat_lahir . ', ' . $all->tanggal_lahir);
                $sheet->getCell('D' . $noD++)->setValue($all->nip . ' / ' . $all->nuptk);
                foreach ($this->Sekolah_model->getWhere($npsn) as $sekolah) {
                    $sheet->getCell('E' . $noE++)->setValue($sekolah->nama_sekolah);
                }
            };

            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

            $filename = 'Data Tenaga Kependidikan di CADISDIK WIL-IX';

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
                foreach ($this->Gtk_model->getWhereTendik($npsn) as $row) {
                    $judul = 'Data Tenaga Kependidikan di ' . $s->nama_sekolah;
                    $sheet->getCell('A1')->setValue($judul);
                    $sheet->getCell('A2')->setValue('Nama');
                    $sheet->getCell('B2')->setValue('Status Kepegawaian');
                    $sheet->getCell('C2')->setValue('Tempat, Tanggal Lahir');
                    $sheet->getCell('D2')->setValue('NIP / NUPTK');
                    $sheet->getCell('A' . $noA++)->setValue($row->nama);
                    $sheet->getCell('B' . $noB++)->setValue($row->status_kepegawaian);
                    $sheet->getCell('C' . $noC++)->setValue($row->tempat_lahir . ', ' . $row->tanggal_lahir);
                    $sheet->getCell('D' . $noD++)->setValue($row->nip . ' / ' . $row->nuptk);
                };
                $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

                $filename = 'Data Tenaga Kependidikan di ' . $s->nama_sekolah;

                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
                header('Cache-Control: max-age=0');

                $writer->save('php://output');
            }
        }
    }
}
