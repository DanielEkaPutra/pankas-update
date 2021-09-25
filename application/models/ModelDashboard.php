<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDashboard extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function getKeluarga()
    {
        return $this->db->query("SELECT DISTINCT id_jemaat FROM jemaat")->num_rows();
    }
}

?>