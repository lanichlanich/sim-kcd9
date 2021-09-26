<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
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
        $data["mapel"] = $this->Mapel_model->getAllMapel();
        $data["nilai"] = $this->Nilai_model->getAllNilai();
        $this->load->view('template/header', $data);
        $this->load->view('data_nilai', $data);
        $this->load->view('template/footer');
    }

    public function download_template()
    {
        $tahun_lulus  =   $this->input->post('tahun_lulus');
        $jurusan      =   $this->input->post('jurusan');
        $mapel_01     =   $this->input->post('mapel_01');
        $mapel_02     =   $this->input->post('mapel_02');
        $mapel_03     =   $this->input->post('mapel_03');
        $mapel_04     =   $this->input->post('mapel_04');
        $mapel_05     =   $this->input->post('mapel_05');
        $mapel_06     =   $this->input->post('mapel_06');
        $mapel_07     =   $this->input->post('mapel_07');
        $mapel_08     =   $this->input->post('mapel_08');
        $mapel_09     =   $this->input->post('mapel_09');
        $mapel_10     =   $this->input->post('mapel_10');
        $mapel_11     =   $this->input->post('mapel_11');
        $mapel_12     =   $this->input->post('mapel_12');
        $mapel_13     =   $this->input->post('mapel_13');
        $mapel_14     =   $this->input->post('mapel_14');
        $mapel_15     =   $this->input->post('mapel_15');
        $mapel_16     =   $this->input->post('mapel_16');
        $mapel_17     =   $this->input->post('mapel_17');
        $mapel_18     =   $this->input->post('mapel_18');
        $mapel_19     =   $this->input->post('mapel_19');
        $mapel_20     =   $this->input->post('mapel_20');

        $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        //Mulai baris
        $noA = 5;
        $noB = 5;
        $noC = 5;
        $noD = 5;
        $noE = 5;
        $noF = 5;
        $noG = 5;
        $noH = 5;
        $noI = 5;
        $noJ = 5;
        $noK = 5;
        $noL = 5;
        $noM = 5;
        $noN = 5;
        $noO = 5;
        $noP = 5;
        $noQ = 5;
        $noR = 5;
        $noS = 5;
        $noT = 5;
        $noU = 5;
        $noV = 5;
        $noW = 5;
        $noX = 5;
        $noY = 5;
        $data = array('tahun_lulus' => $tahun_lulus, 'jurusan' => $jurusan);
        foreach ($this->Nilai_model->getAllNilaiSiswa($data) as $all) {
            $judul = 'Data Nilai Ssiswa Tahun Lulus ' . $tahun_lulus . ' Jurusan ' . $jurusan;
            $note = 'Catatan : Jangan merubah format dan identitas tabel yaitu baris ke 1-4';
            $sheet->getCell('A1')->setValue($judul);
            $sheet->getCell('A2')->setValue($note);
            $sheet->getCell('A3')->setValue('NISN');
            $sheet->getCell('B3')->setValue('Nama Siswa');
            $sheet->getCell('C3')->setValue($mapel_01);
            $sheet->getCell('D3')->setValue($mapel_02);
            $sheet->getCell('E3')->setValue($mapel_03);
            $sheet->getCell('F3')->setValue($mapel_04);
            $sheet->getCell('G3')->setValue($mapel_05);
            $sheet->getCell('H3')->setValue($mapel_06);
            $sheet->getCell('I3')->setValue($mapel_07);
            $sheet->getCell('J3')->setValue($mapel_08);
            $sheet->getCell('K3')->setValue($mapel_09);
            $sheet->getCell('L3')->setValue($mapel_10);
            $sheet->getCell('M3')->setValue($mapel_11);
            $sheet->getCell('N3')->setValue($mapel_12);
            $sheet->getCell('O3')->setValue($mapel_13);
            $sheet->getCell('P3')->setValue($mapel_14);
            $sheet->getCell('Q3')->setValue($mapel_15);
            $sheet->getCell('R3')->setValue($mapel_16);
            $sheet->getCell('S3')->setValue($mapel_17);
            $sheet->getCell('T3')->setValue($mapel_18);
            $sheet->getCell('U3')->setValue($mapel_19);
            $sheet->getCell('V3')->setValue($mapel_20);
            $sheet->getCell('W3')->setValue('NPSN');
            $sheet->getCell('X3')->setValue('Jurusan');
            $sheet->getCell('Y3')->setValue('Tahun Lulus');
            $sheet->getCell('A4')->setValue('nisn');
            $sheet->getCell('B4')->setValue('nama_siswa');
            $sheet->getCell('C4')->setValue('mapel_01');
            $sheet->getCell('D4')->setValue('mapel_04');
            $sheet->getCell('E4')->setValue('mapel_04');
            $sheet->getCell('F4')->setValue('mapel_04');
            $sheet->getCell('G4')->setValue('mapel_05');
            $sheet->getCell('H4')->setValue('mapel_06');
            $sheet->getCell('I4')->setValue('mapel_07');
            $sheet->getCell('J4')->setValue('mapel_08');
            $sheet->getCell('K4')->setValue('mapel_09');
            $sheet->getCell('L4')->setValue('mapel_10');
            $sheet->getCell('M4')->setValue('mapel_11');
            $sheet->getCell('N4')->setValue('mapel_14');
            $sheet->getCell('O4')->setValue('mapel_14');
            $sheet->getCell('P4')->setValue('mapel_14');
            $sheet->getCell('Q4')->setValue('mapel_15');
            $sheet->getCell('R4')->setValue('mapel_16');
            $sheet->getCell('S4')->setValue('mapel_17');
            $sheet->getCell('T4')->setValue('mapel_18');
            $sheet->getCell('U4')->setValue('mapel_19');
            $sheet->getCell('V4')->setValue('mapel_20');
            $sheet->getCell('W4')->setValue('npsn');
            $sheet->getCell('X4')->setValue('jurusan');
            $sheet->getCell('Y4')->setValue('tahun_lulus');
            $sheet->getCell('A' . $noA++)->setValue("'" . $all->nisn);
            $sheet->getCell('B' . $noB++)->setValue($all->nama_siswa);
            $sheet->getCell('C' . $noC++)->setValue('');
            $sheet->getCell('D' . $noD++)->setValue('');
            $sheet->getCell('E' . $noE++)->setValue('');
            $sheet->getCell('F' . $noF++)->setValue('');
            $sheet->getCell('G' . $noG++)->setValue('');
            $sheet->getCell('H' . $noH++)->setValue('');
            $sheet->getCell('I' . $noI++)->setValue('');
            $sheet->getCell('J' . $noJ++)->setValue('');
            $sheet->getCell('K' . $noK++)->setValue('');
            $sheet->getCell('L' . $noL++)->setValue('');
            $sheet->getCell('M' . $noM++)->setValue('');
            $sheet->getCell('N' . $noN++)->setValue('');
            $sheet->getCell('O' . $noO++)->setValue('');
            $sheet->getCell('P' . $noP++)->setValue('');
            $sheet->getCell('Q' . $noQ++)->setValue('');
            $sheet->getCell('R' . $noR++)->setValue('');
            $sheet->getCell('S' . $noS++)->setValue('');
            $sheet->getCell('T' . $noT++)->setValue('');
            $sheet->getCell('U' . $noU++)->setValue('');
            $sheet->getCell('V' . $noV++)->setValue('');
            $sheet->getCell('W' . $noW++)->setValue($this->session->nama_pengguna);
            $sheet->getCell('X' . $noX++)->setValue($jurusan);
            $sheet->getCell('Y' . $noY++)->setValue($tahun_lulus);
        };

        $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

        $filename = 'Template Nilai Siswa Jurusan ' . $jurusan . ' Tahun ' . $tahun_lulus;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function update_nilai()
    {
        $id           =   $this->input->post('id');
        $nisn         =   $this->input->post('nisn');
        $nama_siswa   =   $this->input->post('nama_siswa');
        $npsn         =   $this->input->post('npsn');
        $tahun_lulus  =   $this->input->post('tahun_lulus');
        $jurusan      =   $this->input->post('jurusan');
        $mapel_01     =   $this->input->post('mapel_01');
        $mapel_02     =   $this->input->post('mapel_02');
        $mapel_03     =   $this->input->post('mapel_03');
        $mapel_04     =   $this->input->post('mapel_04');
        $mapel_05     =   $this->input->post('mapel_05');
        $mapel_06     =   $this->input->post('mapel_06');
        $mapel_07     =   $this->input->post('mapel_07');
        $mapel_08     =   $this->input->post('mapel_08');
        $mapel_09     =   $this->input->post('mapel_09');
        $mapel_10     =   $this->input->post('mapel_10');
        $mapel_11     =   $this->input->post('mapel_11');
        $mapel_12     =   $this->input->post('mapel_12');
        $mapel_13     =   $this->input->post('mapel_13');
        $mapel_14     =   $this->input->post('mapel_14');
        $mapel_15     =   $this->input->post('mapel_15');
        $mapel_16     =   $this->input->post('mapel_16');
        $mapel_17     =   $this->input->post('mapel_17');
        $mapel_18     =   $this->input->post('mapel_18');
        $mapel_19     =   $this->input->post('mapel_19');
        $mapel_20     =   $this->input->post('mapel_20');

        $data = array(
            'nisn'              => $nisn,
            'nama_siswa'        => $nama_siswa,
            'mapel_01'          => $mapel_01,
            'mapel_02'          => $mapel_02,
            'mapel_03'          => $mapel_03,
            'mapel_04'          => $mapel_04,
            'mapel_05'          => $mapel_05,
            'mapel_06'          => $mapel_06,
            'mapel_07'          => $mapel_07,
            'mapel_08'          => $mapel_08,
            'mapel_09'          => $mapel_09,
            'mapel_10'          => $mapel_10,
            'mapel_11'          => $mapel_11,
            'mapel_12'          => $mapel_12,
            'mapel_13'          => $mapel_13,
            'mapel_14'          => $mapel_14,
            'mapel_15'          => $mapel_15,
            'mapel_16'          => $mapel_16,
            'mapel_17'          => $mapel_17,
            'mapel_18'          => $mapel_18,
            'mapel_19'          => $mapel_19,
            'mapel_20'          => $mapel_20,
            'npsn'              => $npsn,
            'jurusan'           => $jurusan,
            'tahun_lulus'       => $tahun_lulus,

        );

        $where = array('id' => $id);

        $this->Nilai_model->update_nilai($data, $where);
        redirect('admin/nilai');
    }

    public function hapus_nilai()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id,);
        $this->db->where($where);
        $this->db->delete('nilai');
        redirect('admin/nilai');
    }
}
