<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAuth', 'auth');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
		$password = md5($this->input->post('password'));
        $ceklogin = $this->auth->login($username, $password);
        if($ceklogin)
        {
            foreach($ceklogin as $row);
            $sessionArr = array(
                'id_user' => $row["id_user"],
				'username' => $row["username"],
				'password' => $row["password"],
				'nama_depan' => $row["nama_depan"],
                'nama_tengah' => $row["nama_tengah"],
                'nama_belakang' => $row["nama_belakang"],
                'role' => $row["role"],
                'jenis_kelamin' => $row["jenis_kelamin"]
            );
            $this->session->set_userdata($sessionArr);
            redirect('home', 'refresh');
        }else
        {
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('password');
			$this->session->unset_userdata('nama_depan');
			$this->session->unset_userdata('nama_tengah');
			$this->session->unset_userdata('nama_belakang');
            $this->session->unset_userdata('role');
            $this->session->unset_userdata('jenis_kelamin');
			$this->session->set_flashdata('login', 'failed');
			redirect('auth', 'refresh');
        }
    }

    public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}

?>