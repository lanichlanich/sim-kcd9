<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportTendik extends CI_Controller
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

        $this->load->model('Gtk_model');
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
        $data["pengguna"] = $this->Profile_model->getPengguna();
        $this->load->view('template/header', $data);
        $this->load->view('import_tendik', $data);
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
        $sheetTendik = $spreadsheet->getSheetByName('Daftar tendik')->toArray();

        $sheetcount = count($sheetTendik);
        if ($sheetcount > 1) {
            $data = array();
            for ($i = 5; $i < $sheetcount; $i++) {
                $periode = '2122';
                $npsn = $this->session->nama_pengguna;
                $nama = $sheetTendik[$i][1];
                $nuptk = $sheetTendik[$i][2];
                $jk = $sheetTendik[$i][3];
                $tempat_lahir = $sheetTendik[$i][4];
                $tanggal_lahir = $sheetTendik[$i][5];
                $nip = $sheetTendik[$i][6];
                $status_kepegawaian = $sheetTendik[$i][7];
                $jenis_ptk = $sheetTendik[$i][8];
                $agama = $sheetTendik[$i][9];
                $alamat_jalan = $sheetTendik[$i][10];
                $rt = $sheetTendik[$i][11];
                $rw = $sheetTendik[$i][12];
                $nama_dusun = $sheetTendik[$i][13];
                $desa_kelurahan = $sheetTendik[$i][14];
                $kecamatan = $sheetTendik[$i][15];
                $kode_pos = $sheetTendik[$i][16];
                $telepon = $sheetTendik[$i][17];
                $hp = $sheetTendik[$i][18];
                $email = $sheetTendik[$i][19];
                $tugas_tambahan = $sheetTendik[$i][20];
                $sk_cpns = $sheetTendik[$i][21];
                $tanggal_cpns = $sheetTendik[$i][22];
                $sk_pengangkatan = $sheetTendik[$i][23];
                $tmt_pengangkatan = $sheetTendik[$i][24];
                $lembaga_pengangkatan = $sheetTendik[$i][25];
                $pangkat_golongan = $sheetTendik[$i][26];
                $sumber_gaji = $sheetTendik[$i][27];
                $nama_ibu_kandung = $sheetTendik[$i][28];
                $status_perkawinan = $sheetTendik[$i][29];
                $nama_suami_istri = $sheetTendik[$i][30];
                $nip_suami_istri = $sheetTendik[$i][31];
                $pekerjaan_suami_istri = $sheetTendik[$i][32];
                $tmt_pns = $sheetTendik[$i][33];
                $sudah_lisensi_kepala_sekolah = $sheetTendik[$i][34];
                $pernah_diklat_kepengawasan = $sheetTendik[$i][35];
                $keahlian_braille = $sheetTendik[$i][36];
                $keahlian_bahasa_isyarat = $sheetTendik[$i][37];
                $npwp = $sheetTendik[$i][38];
                $nama_wajib_pajak = $sheetTendik[$i][39];
                $kewarganegaraan = $sheetTendik[$i][40];
                $bank = $sheetTendik[$i][41];
                $nomor_rekening_bank = $sheetTendik[$i][42];
                $rekening_atas_nama = $sheetTendik[$i][43];
                $nik = $sheetTendik[$i][44];
                $no_kk = $sheetTendik[$i][45];
                $karpeg = $sheetTendik[$i][46];
                $karis_karsu = $sheetTendik[$i][47];
                $lintang = $sheetTendik[$i][48];
                $bujur = $sheetTendik[$i][49];
                $nuks = $sheetTendik[$i][50];

                date_default_timezone_set("Asia/Jakarta");

                $data[] = array(
                    'periode' => $periode,
                    'npsn' => $npsn,
                    'nama' => $nama,
                    'nuptk' => $nuptk,
                    'jk' => $jk,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'nip' => $nip,
                    'status_kepegawaian' => $status_kepegawaian,
                    'jenis_ptk' => $jenis_ptk,
                    'agama' => $agama,
                    'alamat_jalan' => $alamat_jalan,
                    'rt' => $rt,
                    'rw' => $rw,
                    'nama_dusun' => $nama_dusun,
                    'desa_kelurahan' => $desa_kelurahan,
                    'kecamatan' => $kecamatan,
                    'kode_pos' => $kode_pos,
                    'telepon' => $telepon,
                    'hp' => $hp,
                    'email' => $email,
                    'tugas_tambahan' => $tugas_tambahan,
                    'sk_cpns' => $sk_cpns,
                    'tanggal_cpns' => $tanggal_cpns,
                    'sk_pengangkatan' => $sk_pengangkatan,
                    'tmt_pengangkatan' => $tmt_pengangkatan,
                    'lembaga_pengangkatan' => $lembaga_pengangkatan,
                    'pangkat_golongan' => $pangkat_golongan,
                    'sumber_gaji' => $sumber_gaji,
                    'nama_ibu_kandung' => $nama_ibu_kandung,
                    'status_perkawinan' => $status_perkawinan,
                    'nama_suami_istri' => $nama_suami_istri,
                    'nip_suami_istri' => $nip_suami_istri,
                    'pekerjaan_suami_istri' => $pekerjaan_suami_istri,
                    'tmt_pns' => $tmt_pns,
                    'sudah_lisensi_kepala_sekolah' => $sudah_lisensi_kepala_sekolah,
                    'pernah_diklat_kepengawasan' => $pernah_diklat_kepengawasan,
                    'keahlian_braille' => $keahlian_braille,
                    'keahlian_bahasa_isyarat' => $keahlian_bahasa_isyarat,
                    'npwp' => $npwp,
                    'nama_wajib_pajak' => $nama_wajib_pajak,
                    'kewarganegaraan' => $kewarganegaraan,
                    'bank' => $bank,
                    'nomor_rekening_bank' => $nomor_rekening_bank,
                    'rekening_atas_nama' => $rekening_atas_nama,
                    'nik' => $nik,
                    'no_kk' => $no_kk,
                    'karpeg' => $karpeg,
                    'karis_karsu' => $karis_karsu,
                    'lintang' => $lintang,
                    'bujur' => $bujur,
                    'nuks' => $nuks
                );
            }

            $this->Gtk_model->insert_tendik($data);
            redirect('profilesekolah');
        }
    }
}
