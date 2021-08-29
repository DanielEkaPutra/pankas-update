<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelJemaat', 'modeljemaat');
    }
    
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
        $data['jemaat'] = $this->modeljemaat->lihatData();
        $this->load->view('list-data/index', $data);
    }
} 

?>