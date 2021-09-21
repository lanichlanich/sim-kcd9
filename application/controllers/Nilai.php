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
        $data["nilai_ipa"] = $this->Nilai_model->list_sma_ipa();
        $data["nilai_ips"] = $this->Nilai_model->list_sma_ips();
        $this->load->view('template/header', $data);
        $this->load->view('data_nilai', $data);
        $this->load->view('template/footer');
    }
}
