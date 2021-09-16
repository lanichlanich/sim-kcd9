<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ijazah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = "SIM KCD-IX";
        $data["pengguna"] = $this->Profile_model->getPengguna();
        $data["ijazah"] = $this->Ijazah_model->getIjazah();
        $this->load->view('template/header', $data);
        $this->load->view('data_ijazah', $data);
        $this->load->view('template/footer');
    }

    public function save_data()
    {
        $this->Ijazah_model->save_data();
        redirect('ijazah');
    }

    public function upload_ijazah($id)
    {
        $data['title'] = "SIM KCD-IX";
        $data["pengguna"] = $this->Profile_model->getPengguna();
        $data["ijazah"] = $this->Ijazah_model->getIjazahById($id);
        $this->load->view('template/header', $data);
        $this->load->view('data_ijazah/edit_ijazah', $data);
        $this->load->view('template/footer');
    }
}
