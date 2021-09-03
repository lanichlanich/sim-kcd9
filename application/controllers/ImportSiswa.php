<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
    public function index()
    {
        $data['title'] = "SIM KCD-IX";
        $data['sekolah'] = $this->db->query("SELECT * FROM sekolah ORDER BY id")->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('import_siswa', $data);
        $this->load->view('template/footer');
    }
}
