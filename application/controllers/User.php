<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAuth', 'auth');
    }

    public function index()
    {
        $data['user'] = $this->db->query("SELECT * FROM user")->result();
        $this->load->view('user/index', $data);
    }

    public function tambahUser()
    {
        $this->load->view('user/tambah/index');
    }

    public function tambah_data()
    {
        $nama_depan = $this->input->post('nama_depan');
        $nama_tengah = $this->input->post('nama_tengah');
        $nama_belakang = $this->input->post('nama_belakang');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $role = $this->input->post('role');

        $input = array(
            'nama_depan'     => $nama_depan,
            'nama_tengah'    => $nama_tengah,
            'nama_belakang'  => $nama_belakang,
            'jenis_kelamin'  => $jenis_kelamin,
            'username'       => $username,
            'password'       => $password,
            'role'           => $role
        );

        if($input)
        {
            $this->auth->input_data($input, 'user');
            redirect('user');
        }
    }

    public function detail_data($id)
    {
        $data['user'] = $this->db->query("SELECT * FROM user where id_user='$id'")->result();
        $this->load->view('user/lihat/index', $data);
    }

    public function edit_data($id)
    {
        $data['user'] = $this->db->query("SELECT * FROM user where id_user='$id'")->result();
        $this->load->view('user/edit/index', $data);
    }

    public function update_data()
    {
        $id = $this->input->post('id');
        $nama_depan = $this->input->post('nama_depan');
        $nama_tengah = $this->input->post('nama_tengah');
        $nama_belakang = $this->input->post('nama_belakang');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $role = $this->input->post('role');

        $where = array(
            'id_user' => $id
        );

        $input = array(
            'nama_depan'     => $nama_depan,
            'nama_tengah'    => $nama_tengah,
            'nama_belakang'  => $nama_belakang,
            'jenis_kelamin'  => $jenis_kelamin,
            'username'       => $username,
            'password'       => $password,
            'role'           => $role
        );

        $update = $this->auth->update_data('user', $input, $where);

        if($update)
        {
            echo "
                <script>Swal({
                    title: 'Data User',
                    text: 'Berhasil Diubah',
                    type: 'success'
                });</script>
            ";
            redirect('user');
        }

    }
}

?>