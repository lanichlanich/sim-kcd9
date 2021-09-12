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

    // Record Addr

    public function get_client_ip_env()
    {
        $ipaddress  = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN IP Address';

        return $ipaddress;
    }

    public function get_os()
    {
        $os_platform = $_SERVER['HTTP_USER_AGENT'];
        return $os_platform;
    }

    public function getting_browser()
    {
        $browser = '';
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
            $browser = 'Netscape';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
            $browser = 'Firefox';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
            $browser = 'Chrome';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
            $browser = 'Opera';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
            $browser = 'Internet Explorer';
        else
            $browser = 'Other';
        return $browser;
    }

    // Record Addr

    public function login()
    {
        $this->form_validation->set_rules('nama_pengguna', 'Username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi!']);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Login";
            $this->load->view('login', $data);
        } else {
            $auth = $this->M_authentication->cek_login();
            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan_login', '
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        Maaf, Username dan Password salah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ');
                redirect('authentication/login');
            } else {
                $this->session->set_userdata('nama_pengguna', $auth->nama_pengguna);
                $this->session->set_userdata('role_id', $auth->role_id);

                //Add riwayat login
                $npsn               =   $auth->nama_pengguna;
                $nama               =   $auth->nama;
                $sekolah            =   $auth->sekolah;
                $role_id            =   $auth->role_id;
                $status             =   "Login";
                $waktu              =   date_default_timezone_set('Asia/Jakarta');
                $waktu              =   date('Y-m-d H:i:s');
                $user_os            =   $this->get_os();
                $user_browser       =   $this->getting_browser();
                $ip_user            =   $this->get_client_ip_env();

                $data               =   array(
                    'npsn'          =>  $npsn,
                    'nama'          =>  $nama,
                    'sekolah'       =>  $sekolah,
                    'role_id'       =>  $role_id,
                    'status'        =>  $status,
                    'waktu'         =>  $waktu,
                    'ipaddress'     =>  $ip_user,
                    'browser'       =>  $user_browser,
                    'os'            =>  $user_os
                );

                //Login session
                $this->M_riwayat->add_riwayat('pengguna_riwayat', $data);

                switch ($auth->role_id) {
                    case 1:
                        redirect('admin/dashboard');
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
        //Add riwayat logout
        $pengguna           =   $this->session->nama_pengguna;
        $auth               =   $this->db->query("SELECT * FROM pengguna WHERE nama_pengguna = '$pengguna'")->row_array();
        $npsn               =   $auth['nama_pengguna'];
        $nama               =   $auth['nama'];
        $sekolah            =   $auth['sekolah'];
        $role_id            =   $auth['role_id'];
        $status             =   "Logout";
        $waktu              =   date_default_timezone_set('Asia/Jakarta');
        $waktu              =   date('Y-m-d H:i:s');
        $user_os            =   $this->get_os();
        $user_browser       =   $this->getting_browser();
        $ip_user            =   $this->get_client_ip_env();

        $data               =   array(
            'npsn'          =>  $npsn,
            'nama'          =>  $nama,
            'sekolah'       =>  $sekolah,
            'role_id'       =>  $role_id,
            'status'        =>  $status,
            'waktu'         =>  $waktu,
            'ipaddress'     =>  $ip_user,
            'browser'       =>  $user_browser,
            'os'            =>  $user_os
        );

        $this->M_riwayat->add_riwayat('pengguna_riwayat', $data);

        // Logout session
        $this->session->sess_destroy();
        redirect('authentication/login');
    }

    public function forgot_password()
    {
        $data['title'] = "Forgot Password";
        $this->load->view('forgot_password', $data);
    }

    public function recovery_password()
    {
        $this->form_validation->set_rules('npsn', 'npsn', 'required', ['required' => 'NPSN wajib diisi!']);
        $this->form_validation->set_rules('nohp', 'nohp', 'required', ['required' => 'Nomor handphone wajib diisi!']);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Forgot Password";
            $this->load->view('forgot_password', $data);
        } else {
            $npsn = $this->M_authentication->cek_npsn();
            if ($npsn == FALSE) {
                $this->session->set_flashdata('pesan_reset', '
                    <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                        Maaf, NPSN tidak ditemukan.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ');
                redirect('authentication/forgot_password');
            } else {
                $npsn           =   $this->input->post('npsn');
                $nohp           =   $this->input->post('nohp');
                $time           =   date_default_timezone_set('Asia/Jakarta');
                $time           =   date('d-m-Y H:i:s');
                $status         =   '0';
                $aprv_by        =   'NULL';
                $aprv_time      =   'NULL';

                $data = array(
                    'npsn'          => $npsn,
                    'nohp'          => $nohp,
                    'add_time'      => $time,
                    'status'        => $status,
                    'aprove_by'     => $aprv_by,
                    'aprove_time'   => $aprv_time
                );

                $this->M_authentication->recovery_password('recovery_password', $data);
                $this->session->set_flashdata('pesan_reset', '
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        Permintaan reset password berhasil.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>            
                ');
                redirect('authentication/forgot_password');
            }
        }
    }
}
