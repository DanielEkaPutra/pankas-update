<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
    
    public function index()
    {
        $this->load->view('menu_dashboard/index');
    }

    public function inputData()
    {
        $this->load->view('tambah-data/index');
    }
    
    public function lihatdata()
    {
        $this->load->view('lihatdata/index', $data);
    }
} 

?>