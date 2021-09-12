<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportGuru extends CI_Controller
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

        $this->load->model('m_importgtk');
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
        $this->load->view('import_guru', $data);
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
        $sheetGuru = $spreadsheet->getSheetByName('Daftar guru')->toArray();

        $sheetcount = count($sheetGuru);
        if ($sheetcount > 1) {
            $data = array();
            for ($i = 5; $i < $sheetcount; $i++) {
                $periode = '2122';
                $npsn = $this->session->nama_pengguna;
                $nama = $sheetGuru[$i][1];
                $nuptk = $sheetGuru[$i][2];
                $jk = $sheetGuru[$i][3];
                $tempat_lahir = $sheetGuru[$i][4];
                $tanggal_lahir = $sheetGuru[$i][5];
                $nip = $sheetGuru[$i][6];
                $status_kepegawaian = $sheetGuru[$i][7];
                $jenis_ptk = $sheetGuru[$i][8];
                $agama = $sheetGuru[$i][9];
                $alamat_jalan = $sheetGuru[$i][10];
                $rt = $sheetGuru[$i][11];
                $rw = $sheetGuru[$i][12];
                $nama_dusun = $sheetGuru[$i][13];
                $desa_kelurahan = $sheetGuru[$i][14];
                $kecamatan = $sheetGuru[$i][15];
                $kode_pos = $sheetGuru[$i][16];
                $telepon = $sheetGuru[$i][17];
                $hp = $sheetGuru[$i][18];
                $email = $sheetGuru[$i][19];
                $tugas_tambahan = $sheetGuru[$i][20];
                $sk_cpns = $sheetGuru[$i][21];
                $tanggal_cpns = $sheetGuru[$i][22];
                $sk_pengangkatan = $sheetGuru[$i][23];
                $tmt_pengangkatan = $sheetGuru[$i][24];
                $lembaga_pengangkatan = $sheetGuru[$i][25];
                $pangkat_golongan = $sheetGuru[$i][26];
                $sumber_gaji = $sheetGuru[$i][27];
                $nama_ibu_kandung = $sheetGuru[$i][28];
                $status_perkawinan = $sheetGuru[$i][29];
                $nama_suami_istri = $sheetGuru[$i][30];
                $nip_suami_istri = $sheetGuru[$i][31];
                $pekerjaan_suami_istri = $sheetGuru[$i][32];
                $tmt_pns = $sheetGuru[$i][33];
                $sudah_lisensi_kepala_sekolah = $sheetGuru[$i][34];
                $pernah_diklat_kepengawasan = $sheetGuru[$i][35];
                $keahlian_braille = $sheetGuru[$i][36];
                $keahlian_bahasa_isyarat = $sheetGuru[$i][37];
                $npwp = $sheetGuru[$i][38];
                $nama_wajib_pajak = $sheetGuru[$i][39];
                $kewarganegaraan = $sheetGuru[$i][40];
                $bank = $sheetGuru[$i][41];
                $nomor_rekening_bank = $sheetGuru[$i][42];
                $rekening_atas_nama = $sheetGuru[$i][43];
                $nik = $sheetGuru[$i][44];
                $no_kk = $sheetGuru[$i][45];
                $karpeg = $sheetGuru[$i][46];
                $karis_karsu = $sheetGuru[$i][47];
                $lintang = $sheetGuru[$i][48];
                $bujur = $sheetGuru[$i][49];
                $nuks = $sheetGuru[$i][50];

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

            $this->M_importgtk->insert_guru($data);
            redirect('profilesekolah');
        }
    }
}
