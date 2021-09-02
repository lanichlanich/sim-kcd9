<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
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
    public function login()
    {
        $this->form_validation->set_rules('id', 'Username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi!']);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Login";
            $this->load->view('login', $data);
        } else {
            $auth = $this->M_authentication->cek_login();
            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Maaf, Username atau Password Anda Salah!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                redirect('authentication/login');
            } else {
                $this->session->set_userdata('id', $auth->id);
                $this->session->set_userdata('role', $auth->role);

                switch ($auth->role) {
                    case 1:
                        redirect('dashboard');
                        break;
                    case 2:
                        redirect('dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('authentication/login');
    }
}
