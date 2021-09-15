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

        $this->load->model('Profile_model');
        //$this->load->library('excel');

        if ($this->session->userdata('role_id') != '1') {
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

        //Vlidasi file yang diupload apakah benar?
        $sheetdata = $spreadsheet->getActiveSheet();
        $validasi = $sheetdata->getCell('A1');

        if ($validasi == 'Profil Sekolah') {
        } else {
            $this->session->set_flashdata('error', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Upload data pofile gagal, silahkan coba lagi.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
            redirect('admin/importprofile');
        }

        //Kode dari input untuk update data
        $kode = $this->input->post('kode');
        $update_by = $this->input->post('update_by');
        $update_time = date_default_timezone_set("Asia/Jakarta");
        $update_time = date('d-m-Y H:i:s');

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
            'bujur'         => $bujur,
            'update_by'     => $update_by,
            'update_time'   => $update_time
        );

        $where = array(
            'id_profile'    => $kode
        );

        $this->Profile_model->update_profile('profile_sekolah', $data, $where);

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

        $sheetRombel = $spreadsheet->getSheetByName('Rombongan Belajar')->toArray();

        $sheetcount = count($sheetRombel);
        if ($sheetcount > 1) {
            $data = array();
            for ($i = 7; $i < $sheetcount; $i++) {
                $periode    = '2122';
                $npsn       = $this->session->nama_pengguna;
                $nama       = $sheetRombel[$i][1];
                $tingkat    = $sheetRombel[$i][2];
                $lk         = $sheetRombel[$i][3];
                $pr         = $sheetRombel[$i][4];
                $jml        = $sheetRombel[$i][5];
                $walikelas  = $sheetRombel[$i][6];
                $kurikulum  = $sheetRombel[$i][7];
                $ruangan    = $sheetRombel[$i][8];

                date_default_timezone_set("Asia/Jakarta");

                $data[] = array(
                    'periode'     => $periode,
                    'npsn'        => $npsn,
                    'nama'        => $nama,
                    'tingkat'     => $tingkat,
                    'lk'          => $lk,
                    'pr'          => $pr,
                    'jml'         => $jml,
                    'walikelas'   => $walikelas,
                    'kurikulum'   => $kurikulum,
                    'ruangan'     => $ruangan
                );
            }

            $keyArray = array('npsn' => $this->session->nama_pengguna, 'periode' => $periode);
            $this->db->where($keyArray);
            $this->db->delete('daftar_rombel');

            $this->Profile_model->insert_rombel($data);
            $this->session->set_flashdata('sukses', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          Upload data profile sukses.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      ');
            redirect('admin/profilesekolah');
        }
    }
}
