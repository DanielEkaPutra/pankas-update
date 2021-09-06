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

    
    public function lihatdata()
    {
        $this->load->view('list-data/index', $data);
    }
} 

?>