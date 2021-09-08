<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataSiswa extends CI_Controller
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
		$this->load->model("m_daftarsiswa");

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
    $data["daftar_siswa"] = $this->m_daftarsiswa->getAll();
    $this->load->view('template/header', $data);
    $this->load->view('daftar_siswa', $data);
    $this->load->view('template/footer');

  }
}
