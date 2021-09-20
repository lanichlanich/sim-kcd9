<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ijazah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

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

    public function data()
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
        $config['upload_path']          = './ijazah/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            var_dump($_FILES['userfile']);
        } else {
            $ijazah_file = $this->upload->data();
            $ijazah_file = $ijazah_file['file_name'];
            $npsn = $this->input->post('npsn', TRUE);
            $nisn = $this->input->post('nisn', TRUE);
            $nama_siswa = $this->input->post('nama_siswa', TRUE);
            $tahun_lulus = $this->input->post('tahun_lulus', TRUE);
            $no_ijazah = $this->input->post('no_ijazah', TRUE);

            $data = array(
                'npsn' => $npsn,
                'nisn' => $nisn,
                'nama_siswa' => $nama_siswa,
                'tahun_lulus' => $tahun_lulus,
                'no_ijazah' => $no_ijazah,
                'ijazah_file' => $ijazah_file,
            );
            $this->db->insert('ijazah', $data);
            redirect('ijazah/data');
        }
    }

    public function update_data($id)
    {
        $config['upload_path']          = './ijazah/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            var_dump($_FILES['userfile']);
        } else {
            $ijazah_file = $this->upload->data();
            $ijazah_file = $ijazah_file['file_name'];

            $data = array(
                'ijazah_file' => $ijazah_file,
            );
            $this->db->where('id', $id)->update('ijazah', $data);
            redirect('ijazah/data');
        }
    }
}
