<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileSekolah extends CI_Controller
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

        if ($this->session->userdata('role_id') != '1') {
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
        $this->load->view('template/header', $data);
        $this->load->view('profile_sekolah', $data);
        $this->load->view('template/footer');
    }

    public function pengguna()
    {
        $data['title'] = "SIM KCD-IX";
        $data["pengguna"] = $this->Profile_model->getAllPengguna();
        $this->load->view('template/header', $data);
        $this->load->view('pengguna', $data);
        $this->load->view('template/footer');
    }

    public function add_pengguna()
    {
        $data['title'] = "SIM KCD-IX";
        $data["pengguna"] = $this->Profile_model->getPengguna();
        $data["user"] = $this->Profile_model->getAllPengguna();
        $this->load->view('template/header', $data);
        $this->load->view('add_pengguna', $data);
        $this->load->view('template/footer');
    }

    public function simpan_pengguna()
    {
        $nama           = $this->input->post('nama');
        $sekolah        = $this->input->post('sekolah');
        $nama_pengguna  = $this->input->post('nama_pengguna');
        $password       = md5($this->input->post('password'));
        $role_id        = $this->input->post('role_id');
        $koreg          = $this->input->post('koreg');
        $sekolah        = $this->input->post('sekolah');
        $bentuk         = $this->input->post('bentuk');
        $status         = $this->input->post('status');
        $alamat         = $this->input->post('alamat');
        $desa           = $this->input->post('desa');
        $kecamatan      = $this->input->post('kecamatan');
        $kabupaten      = $this->input->post('kabupaten');
        $provinsi       = $this->input->post('provinsi');
        $kodepos        = $this->input->post('kodepos');
        $add_by         = $this->input->post('add_by');
        $add_time       = $this->input->post('add_time');
        $update_by      = 'NULL';
        $update_time    = 'NULL';

        $data = array(
            'nama_pengguna' => $nama_pengguna,
            'password' => $password,
            'role_id' => $role_id,
            'koreg' => $koreg,
            'nama' => $nama,
            'sekolah' => $sekolah,
            'bentuk' => $bentuk,
            'status' => $status,
            'alamat' => $alamat,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'provinsi' => $provinsi,
            'kodepos' => $kodepos,
            'add_by' => $add_by,
            'add_time' => $add_time,
            'update_by' => $update_by,
            'update_time' => $update_time
        );

        $this->Profile_model->simpan_pengguna('pengguna', $data);
        redirect('admin/profilesekolah/pengguna');
    }

    //Profile pribadi
    public function edit_profile()
    {
        $data['title'] = "SIM KCD-IX";
        $data["pengguna"] = $this->Profile_model->getPengguna();
        $this->load->view('template/header', $data);
        $this->load->view('edit_profile', $data);
        $this->load->view('template/footer');
    }

    //Profile sekolah
    public function edit_pengguna($id)
    {
        $where = array('id' => $id);
        $data['title'] = "SIM KCD-IX";
        $data["pengguna"] = $this->Profile_model->getPengguna();
        $data['user'] = $this->Profile_model->edit_pengguna('pengguna', $where)->result();
        $this->load->view('template/header', $data);
        $this->load->view('edit_pengguna', $data);
        $this->load->view('template/footer');
    }

    public function update_pengguna()
    {
        $id             = $this->input->post('id');
        $nama_pengguna  = $this->input->post('nama_pengguna');
        $password       = md5($this->input->post('password'));
        $role_id        = $this->input->post('role_id');
        $koreg          = $this->input->post('koreg');
        $nama           = $this->input->post('nama');
        $sekolah        = $this->input->post('sekolah');
        $bentuk         = $this->input->post('bentuk');
        $status         = $this->input->post('status');
        $alamat         = $this->input->post('alamat');
        $desa           = $this->input->post('desa');
        $kecamatan      = $this->input->post('kecamatan');
        $kabupaten      = $this->input->post('kabupaten');
        $provinsi       = $this->input->post('provinsi');
        $kodepos        = $this->input->post('kodepos');
        $add_by         = $this->input->post('add_by');
        $add_time       = $this->input->post('add_time');
        $update_time    = $this->input->post('update_time');

        $data = array(
            'nama_pengguna'      => $nama_pengguna,
            'password'           => $password,
            'role_id'            => $role_id,
            'koreg'              => $koreg,
            'nama'               => $nama,
            'sekolah'            => $sekolah,
            'bentuk'             => $bentuk,
            'status'             => $status,
            'alamat'             => $alamat,
            'desa'               => $desa,
            'kecamatan'          => $kecamatan,
            'kabupaten'          => $kabupaten,
            'provinsi'           => $provinsi,
            'kodepos'            => $kodepos,
            'add_by'             => $add_by,
            'add_time'           => $add_time,
            'update_by'          => $nama,
            'update_time'        => $update_time
        );

        $where = array('id' => $id,);

        $this->Profile_model->update_profile('pengguna', $data, $where);
        redirect('admin/profilesekolah/pengguna');
    }
}
