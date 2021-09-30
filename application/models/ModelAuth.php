<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAuth extends CI_Model
{
    public function login($username, $password)
    {
        $this->db->select('id_user, username, password, nama_depan, nama_tengah, nama_belakang, role, jenis_kelamin');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
       
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function input_data($data,$table)
    {
        return $this->db->insert($table,$data);
    }

    public function update_data($table,$data,$where)
    {
        return $this->db->update($table,$data,$where);
    }
}

?>