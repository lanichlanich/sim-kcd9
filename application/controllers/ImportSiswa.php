<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportSiswa extends CI_Controller
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

		$this->load->model('M_ImportSiswa');
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
		$this->load->view('template/header', $data);
		$this->load->view('import_siswa', $data);
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
		$sheetdata = $spreadsheet->getActiveSheet()->toArray();
		// echo '<pre>';
		// print_r($sheetdata); test upload file excel nya :)
		$sheetcount = count($sheetdata);
		if ($sheetcount > 1) {
			$data = array();
			for ($i = 6; $i < $sheetcount; $i++) {
				//$user_id=$sheetdata[$i][4];
				$periode = '2122';
				$npsn = $this->session->nama_pengguna;
				$nama = $sheetdata[$i][1];
				$nipd = $sheetdata[$i][2];
				$jk = $sheetdata[$i][3];
				$nisn = $sheetdata[$i][4];
				$tempat_lahir = $sheetdata[$i][5];
				$tanggal_lahir = $sheetdata[$i][6];
				$nik = $sheetdata[$i][7];
				$agama = $sheetdata[$i][8];
				$alamat = $sheetdata[$i][9];
				$rt = $sheetdata[$i][10];
				$rw = $sheetdata[$i][11];
				$dusun = $sheetdata[$i][12];
				$kelurahan = $sheetdata[$i][13];
				$kecamatan = $sheetdata[$i][14];
				$kode_pos = $sheetdata[$i][15];
				$jenis_tinggal = $sheetdata[$i][16];
				$alat_transportasi = $sheetdata[$i][17];
				$telepon = $sheetdata[$i][18];
				$hp = $sheetdata[$i][19];
				$email = $sheetdata[$i][20];
				$skhun = $sheetdata[$i][21];
				$penerima_kps = $sheetdata[$i][22];
				$no_kps = $sheetdata[$i][23];
				$ayah_nama = $sheetdata[$i][24];
				$ayah_tahun_lahir = $sheetdata[$i][25];
				$ayah_jenjang_pendidikan = $sheetdata[$i][26];
				$ayah_pekerjaan = $sheetdata[$i][27];
				$ayah_penghasilan = $sheetdata[$i][28];
				$ayah_nik = $sheetdata[$i][29];
				$ibu_nama = $sheetdata[$i][30];
				$ibu_tahun_lahir = $sheetdata[$i][31];
				$ibu_jenjang_pendidikan = $sheetdata[$i][32];
				$ibu_pekerjaan = $sheetdata[$i][33];
				$ibu_penghasilan = $sheetdata[$i][34];
				$ibu_nik = $sheetdata[$i][35];
				$wali_nama = $sheetdata[$i][36];
				$wali_tahun_lahir = $sheetdata[$i][37];
				$wali_jenjang_pendidikan = $sheetdata[$i][38];
				$wali_pekerjaan = $sheetdata[$i][39];
				$wali_penghasilan = $sheetdata[$i][40];
				$wali_nik = $sheetdata[$i][41];
				$rombel = $sheetdata[$i][42];
				$no_peserta_ujian_nasional = $sheetdata[$i][43];
				$no_seri_ijazah = $sheetdata[$i][44];
				$penerima_kip = $sheetdata[$i][45];
				$nomor_kip = $sheetdata[$i][46];
				$nama_kip = $sheetdata[$i][47];
				$nomor_kks = $sheetdata[$i][48];
				$noreg_akta_lahir = $sheetdata[$i][49];
				$bank = $sheetdata[$i][50];
				$nomor_rekening_bank = $sheetdata[$i][51];
				$rekening_atas_nama = $sheetdata[$i][52];
				$layak_pip = $sheetdata[$i][53];
				$alasan_layak_pip = $sheetdata[$i][54];
				$kebutuhan_khusus = $sheetdata[$i][55];
				$sekolah_asal = $sheetdata[$i][56];
				$anak_ke_berapa = $sheetdata[$i][57];
				$lintang = $sheetdata[$i][58];
				$bujur = $sheetdata[$i][59];
				$no_kk = $sheetdata[$i][60];
				$berat_badan = $sheetdata[$i][61];
				$tinggi_badan = $sheetdata[$i][62];
				$lingkar_kepala = $sheetdata[$i][63];
				$jumlah_saudara_kandung = $sheetdata[$i][64];
				$jarak_rumah_ke_sekolah = $sheetdata[$i][65];

				date_default_timezone_set("Asia/Jakarta");

				$data[] = array(
					//'user_id'=>$user_id,
					'nisn' => $nisn,
					'periode' => $periode,
					'npsn' => $npsn,
					'nama' => $nama,
					'nipd' => $nipd,
					'jk' => $jk,
					'tempat_lahir' => $tempat_lahir,
					'tanggal_lahir' => $tanggal_lahir,
					'nik' => $nik,
					'agama' => $agama,
					'alamat' => $alamat,
					'rt' => $rt,
					'rw' => $rw,
					'dusun' => $dusun,
					'kelurahan' => $kelurahan,
					'kecamatan' => $kecamatan,
					'kode_pos' => $kode_pos,
					'jenis_tinggal' => $jenis_tinggal,
					'alat_transportasi' => $alat_transportasi,
					'telepon' => $telepon,
					'hp' => $hp,
					'email' => $email,
					'skhun' => $skhun,
					'penerima_kps' => $penerima_kps,
					'no_kps' => $no_kps,
					'ayah_nama' => $ayah_nama,
					'ayah_tahun_lahir' => $ayah_tahun_lahir,
					'ayah_jenjang_pendidikan' => $ayah_jenjang_pendidikan,
					'ayah_pekerjaan' => $ayah_pekerjaan,
					'ayah_penghasilan' => $ayah_penghasilan,
					'ayah_nik' => $ayah_nik,
					'ibu_nama' => $ibu_nama,
					'ibu_tahun_lahir' => $ibu_tahun_lahir,
					'ibu_jenjang_pendidikan' => $ibu_jenjang_pendidikan,
					'ibu_pekerjaan' => $ibu_pekerjaan,
					'ibu_penghasilan' => $ibu_penghasilan,
					'ibu_nik' => $ibu_nik,
					'wali_nama' => $wali_nama,
					'wali_tahun_lahir' => $wali_tahun_lahir,
					'wali_jenjang_pendidikan' => $wali_jenjang_pendidikan,
					'wali_pekerjaan' => $wali_pekerjaan,
					'wali_penghasilan' => $wali_penghasilan,
					'wali_nik' => $wali_nik,
					'rombel' => $rombel,
					'no_peserta_ujian_nasional' => $no_peserta_ujian_nasional,
					'no_seri_ijazah' => $no_seri_ijazah,
					'penerima_kip' => $penerima_kip,
					'nomor_kip' => $nomor_kip,
					'nama_kip' => $nama_kip,
					'nomor_kks' => $nomor_kks,
					'noreg_akta_lahir' => $noreg_akta_lahir,
					'bank' => $bank,
					'nomor_rekening_bank' => $nomor_rekening_bank,
					'rekening_atas_nama' => $rekening_atas_nama,
					'layak_pip' => $layak_pip,
					'alasan_layak_pip' => $alasan_layak_pip,
					'kebutuhan_khusus' => $kebutuhan_khusus,
					'sekolah_asal' => $sekolah_asal,
					'anak_ke_berapa' => $anak_ke_berapa,
					'lintang' => $lintang,
					'bujur' => $bujur,
					'no_kk' => $no_kk,
					'berat_badan' => $berat_badan,
					'tinggi_badan' => $tinggi_badan,
					'lingkar_kepala' => $lingkar_kepala,
					'jumlah_saudara_kandung' => $jumlah_saudara_kandung,
					'jarak_rumah_ke_sekolah' => $jarak_rumah_ke_sekolah,
					'tanggal_daftar' => date("Y-m-d h:i:sa")
				);
			}
			$keyArray = array('npsn' => $this->session->nama_pengguna, 'periode' => $periode);
			//$this->M_ImportSiswa->delete_pd($keyArray);
			$this->db->where($keyArray);
			$this->db->delete('daftar_pd');

			$inserdata = $this->M_ImportSiswa->insert_pd($data);
			redirect('profilesekolah');
		}
	}
}
