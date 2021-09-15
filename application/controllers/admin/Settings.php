<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
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

    //Informasi

    public function informasi()
    {
        $data['title'] = "SIM KCD-IX";
        $data['pengguna'] = $this->Profile_model->getPengguna();
        $data['informasi'] = $this->Settings_model->getAllInformasi();
        $this->load->view('template/header', $data);
        $this->load->view('informasi', $data);
        $this->load->view('template/footer');
    }

    public function add_informasi()
    {
        $kategori       =   $this->input->post('kategori');
        $informasi      =   $this->input->post('informasi');
        $status         =   $this->input->post('status');
        $add_by         =   $this->input->post('add_by');
        $tanggal        =   date_default_timezone_set('Asia/Jakarta');
        $tanggal        =   date('d-m-Y');
        $tema           =   $this->input->post('tema');

        $data = array(
            'kategori'      =>  $kategori,
            'informasi'     =>  $informasi,
            'status'        =>  $status,
            'add_by'        =>  $add_by,
            'add_time'      =>  $tanggal,
            'update_by'     =>  $add_by,
            'update_time'   =>  $tanggal,
            'tema'          =>  $tema
        );

        $this->Settings_model->add_informasi('informasi', $data);
        redirect('admin/settings/informasi');
    }

    public function edit_informasi($id)
    {
        $where = array('id' => $id);
        $data['title'] = "SIM KCD-IX";
        $data['pengguna'] = $this->Profile_model->getPengguna();
        $data['informasi'] = $this->Settings_model->edit_informasi('informasi', $where)->result();
        $this->load->view('template/header', $data);
        $this->load->view('edit_informasi', $data);
        $this->load->view('template/footer');
    }

    public function update_informasi()
    {
        $id             =   $this->input->post('id');
        $kategori       =   $this->input->post('kategori');
        $informasi      =   $this->input->post('informasi');
        $status         =   $this->input->post('status');
        $add_by         =   $this->input->post('add_by');
        $add_time       =   $this->input->post('add_time');
        $update_by      =   $this->input->post('update_by');
        $tanggal        =   date_default_timezone_set('Asia/Jakarta');
        $tanggal        =   date('d-m-Y');
        $tema           =   $this->input->post('tema');

        $data = array(
            'kategori'      =>  $kategori,
            'informasi'     =>  $informasi,
            'status'        =>  $status,
            'add_by'        =>  $add_by,
            'add_time'      =>  $add_time,
            'update_by'     =>  $update_by,
            'update_time'   =>  $tanggal,
            'tema'          =>  $tema
        );

        $where = array('id' => $id);

        $this->Settings_model->update_informasi('informasi', $data, $where);
        redirect('admin/settings/informasi');
    }

    public function delete_informasi($id)
    {
        $this->Settings_model->delete_informasi($id);
        redirect('admin/settings/informasi');
    }

    //Reset Password

    public function reset_password()
    {
        $data['title'] = "SIM KCD-IX";
        $data['pengguna'] = $this->Profile_model->getPengguna();
        $data["user"] = $this->Profile_model->getAllPengguna();
        $data['reset'] = $this->Settings_model->getAllResetPassword();
        $this->load->view('template/header', $data);
        $this->load->view('reset_password', $data);
        $this->load->view('template/footer');
    }

    public function aprove()
    {
        $id_reset       =   $this->input->post('id_reset');
        $id             =   $this->input->post('id_pengguna');
        $nama_pengguna  =   $this->input->post('nama_pengguna');
        $password       =   $this->input->post('password');
        $update_by      =   $this->input->post('update_by');
        $time           =   date_default_timezone_set('Asia/Jakarta');
        $time           =   date('d-m-Y H:i:s');
        $status         =   '1';
        //Update data pengguna
        $data = array('nama_pengguna' => $nama_pengguna, 'password' => md5($password), 'update_by' => $update_by, 'update_time' => $time);
        $where = array('id' => $id);
        $this->Profile_model->update_profile('pengguna', $data, $where);
        //Update data recovery password
        $data_reset = array('status' => $status, 'aprove_by' => $update_by, 'aprove_time' => $time);
        $where_reset = array('id' => $id_reset);
        $this->Settings_model->update_reset('recovery_password', $data_reset, $where_reset);

        redirect('admin/settings/reset_password');
    }
}
