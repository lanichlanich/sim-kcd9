<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "SIM KCD-IX";
        $data["pengguna"] = $this->Profile_model->getPengguna();
        // $data["ijazah"] = $this->Nilai_model->getINilai();
        $this->load->view('template/header', $data);
        $this->load->view('data_nilai', $data);
        $this->load->view('template/footer');
    }
}
