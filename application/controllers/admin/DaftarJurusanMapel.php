<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarjurusanmapel extends CI_Controller
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
    $data["jurmap"] = $this->Mapel_model->getAll();
    $this->load->view('template/header', $data);
    $this->load->view('data_kurikulum_admin', $data);
    $this->load->view('template/footer');
  }
}
