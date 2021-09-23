<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
    $data['pengguna'] = $this->Profile_model->getPengguna();
    $data['riwayat'] = $this->Riwayat_model->getAll();
    $data['informasi'] = $this->Settings_model->getAllInformasi();
    $data['sekolah_admin'] = $this->Sekolah_model->getAllProfileOrder();
    $data['siswa'] = $this->Profile_model->countAllSiswa();
    $data['rombel'] = $this->Profile_model->countAllRombel();
    $data['guru'] = $this->Profile_model->countAllGuru();
    $data['tendik'] = $this->Profile_model->countAllTendik();
    $this->load->view('template/header', $data);
    $this->load->view('dashboard', $data);
    $this->load->view('template/footer');
  }
}
