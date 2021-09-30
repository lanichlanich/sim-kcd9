<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

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
        $data["pengguna"] = $this->Profile_model->getPengguna();
        $data["mapel"] = $this->Mapel_model->getAllMapel();
        $data["nilai"] = $this->Nilai_model->getAllNilai();
        $this->load->view('template/header', $data);
        $this->load->view('data_kurikulum', $data);
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

        $sheetJurusanMapel = $spreadsheet->getSheetByName('DATA JURUSAN DAN MAPEL')->toArray();

        $sheetcount = count($sheetJurusanMapel);
        if ($sheetcount > 1) {
            $data = array();
            for ($i = 3; $i < $sheetcount; $i++) {
                $periode = "2122";
                $npsn = $this->session->nama_pengguna;
                $jurusan = $sheetJurusanMapel[$i][1];
                $tahun_lulus = $sheetJurusanMapel[$i][2];
                $mapel_01 = $sheetJurusanMapel[$i][3];
                $mapel_02 = $sheetJurusanMapel[$i][4];
                $mapel_03 = $sheetJurusanMapel[$i][5];
                $mapel_04 = $sheetJurusanMapel[$i][6];
                $mapel_05 = $sheetJurusanMapel[$i][7];
                $mapel_06 = $sheetJurusanMapel[$i][8];
                $mapel_07 = $sheetJurusanMapel[$i][9];
                $mapel_08 = $sheetJurusanMapel[$i][10];
                $mapel_09 = $sheetJurusanMapel[$i][11];
                $mapel_10 = $sheetJurusanMapel[$i][12];
                $mapel_11 = $sheetJurusanMapel[$i][13];
                $mapel_12 = $sheetJurusanMapel[$i][14];
                $mapel_13 = $sheetJurusanMapel[$i][15];
                $mapel_14 = $sheetJurusanMapel[$i][16];
                $mapel_15 = $sheetJurusanMapel[$i][17];
                $mapel_16 = $sheetJurusanMapel[$i][18];
                $mapel_17 = $sheetJurusanMapel[$i][19];
                $mapel_18 = $sheetJurusanMapel[$i][20];
                $mapel_19 = $sheetJurusanMapel[$i][21];
                $mapel_20 = $sheetJurusanMapel[$i][22];

                $data[] = array(
                    'periode' => $periode,
                    'npsn' => $npsn,
                    'jurusan' => $jurusan,
                    'tahun_lulus' => $tahun_lulus,
                    'mapel_01' => $mapel_01,
                    'mapel_02' => $mapel_02,
                    'mapel_03' => $mapel_03,
                    'mapel_04' => $mapel_04,
                    'mapel_05' => $mapel_05,
                    'mapel_06' => $mapel_06,
                    'mapel_07' => $mapel_07,
                    'mapel_08' => $mapel_08,
                    'mapel_09' => $mapel_09,
                    'mapel_10' => $mapel_10,
                    'mapel_11' => $mapel_11,
                    'mapel_12' => $mapel_12,
                    'mapel_13' => $mapel_13,
                    'mapel_14' => $mapel_14,
                    'mapel_15' => $mapel_15,
                    'mapel_16' => $mapel_16,
                    'mapel_17' => $mapel_17,
                    'mapel_18' => $mapel_18,
                    'mapel_19' => $mapel_19,
                    'mapel_20' => $mapel_20,
                );
            }

            // $keyArray = array('npsn' => $this->session->nama_pengguna);
            $keyArray = array('periode' => $periode);
            $this->db->where($keyArray);
            $this->db->delete('mapel');

            $this->Mapel_model->insert_jurusan_mapel($data);
            redirect('mapel');
        }
    }

    public function update_mapel()
    {
        $id           =   $this->input->post('id');
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
            'npsn'          => $npsn,
            'tahun_lulus'   => $tahun_lulus,
            'jurusan'       => $jurusan,
            'mapel_01'       => $mapel_01,
            'mapel_02'       => $mapel_02,
            'mapel_03'       => $mapel_03,
            'mapel_04'       => $mapel_04,
            'mapel_05'       => $mapel_05,
            'mapel_06'       => $mapel_06,
            'mapel_07'       => $mapel_07,
            'mapel_08'       => $mapel_08,
            'mapel_09'       => $mapel_09,
            'mapel_10'       => $mapel_10,
            'mapel_11'       => $mapel_11,
            'mapel_12'       => $mapel_12,
            'mapel_13'       => $mapel_13,
            'mapel_14'       => $mapel_14,
            'mapel_15'       => $mapel_15,
            'mapel_16'       => $mapel_16,
            'mapel_17'       => $mapel_17,
            'mapel_18'       => $mapel_18,
            'mapel_19'       => $mapel_19,
            'mapel_20'       => $mapel_20,
        );

        $where = array('id' => $id,);

        $this->Mapel_model->update_mapel($data, $where);
        redirect('mapel');
    }

    public function hapus_mapel()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id,);
        $this->db->where($where);
        $this->db->delete('mapel');
        redirect('mapel');
    }
}
