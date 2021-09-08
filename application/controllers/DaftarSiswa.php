<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Siswa"); //load model mahasiswa
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

    //method pertama yang akan di eksekusi
    public function index()
    {
        $data["title"] = "SIM KCD-IX";
        $data["daftar_siswa"] = $this->M_Siswa->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('daftar_siswa/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah_Siswa()
    {
        $data["title"] = "SIM KCD-IX";
        $this->load->view('template/header', $data);
        $this->load->view('daftar_siswa/tambah');
        $this->load->view('template/footer');
    }
}
