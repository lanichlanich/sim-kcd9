<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarSekolah extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('role_id') != '1' && $this->session->userdata('role_id') != '3') {
      $this->session->set_flashdata('pesan', '
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
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
    $data["daftar_sekolah"] = $this->Sekolah_model->getAll();
    $this->load->view('template/header', $data);
    $this->load->view('daftar_sekolah/index', $data);
    $this->load->view('template/footer');
  }
  public function tambah_sekolah()
  {
    $data["title"] = "SIM KCD-IX";
    $this->load->view('template/header', $data);
    $this->load->view('daftar_sekolah/tambah');
    $this->load->view('template/footer');
  }

  //method add digunakan untuk menampilkan form tambah data mahasiswa
  // public function add()
  // {
  //     $Mahasiswa = $this->Mahasiswa_model; //objek model
  //     $validation = $this->form_validation; //objek form validation
  //     $validation->set_rules($Mahasiswa->rules()); //menerapkan rules validasi pada mahasiswa_model
  //     //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
  //     if ($validation->run()) {
  //         $Mahasiswa->save();
  //         $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //         Data Mahasiswa berhasil disimpan. 
  //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //         <span aria-hidden="true">&times;</span>
  //       </button></div>');
  //         redirect("mahasiswa");
  //     }
  //     $data["title"] = "Tambah Data Mahasiswa";
  //     $this->load->view('templates/header', $data);
  //     $this->load->view('templates/menu');
  //     $this->load->view('mahasiswa/add', $data);
  //     $this->load->view('templates/footer');
  // }

  // public function edit($id = null)
  // {
  //     if (!isset($id)) redirect('mahasiswa');

  //     $Mahasiswa = $this->Mahasiswa_model;
  //     $validation = $this->form_validation;
  //     $validation->set_rules($Mahasiswa->rules());

  //     if ($validation->run()) {
  //         $Mahasiswa->update();
  //         $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //         Data Mahasiswa berhasil disimpan.
  //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //         <span aria-hidden="true">&times;</span>
  //       </button></div>');
  //         redirect("mahasiswa");
  //     }
  //     $data["title"] = "Edit Data Mahasiswa";
  //     $data["data_mahasiswa"] = $Mahasiswa->getById($id);
  //     if (!$data["data_mahasiswa"]) show_404();
  //     $this->load->view('templates/header', $data);
  //     $this->load->view('templates/menu');
  //     $this->load->view('mahasiswa/edit', $data);
  //     $this->load->view('templates/footer');
  // }

  // public function delete()
  // {
  //     $id = $this->input->get('id');
  //     if (!isset($id)) show_404();
  //     $this->Mahasiswa_model->delete($id);
  //     $msg['success'] = true;
  //     $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //     Data Mahasiswa berhasil dihapus.
  //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //         <span aria-hidden="true">&times;</span>
  //       </button></div>');
  //     $this->output->set_output(json_encode($msg));
  // }
}
