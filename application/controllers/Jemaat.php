<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jemaat extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelJemaat', 'modeljemaat');
    }

    public function index(){
        // Pagination
        // $this->load->library('pagination');

        // Config
        $config['base_url'] = 'http://localhost/pankas-update/jemaat/index';
        $config['total_rows'] = $this->modeljemaat->hitungJemaat();
        $config['per_page'] = 10;
        $data['total_rows'] = $config['total_rows'];

        $config['full_tag_open'] = '<nav> <ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        
        
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';   
        $config['first_tag_close'] = '</li>';   
        
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';   
        $config['last_tag_close'] = '</li>';   
        
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';   
        $config['next_tag_close'] = '</li>'; 
        

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';   
        $config['prev_tag_close'] = '</li>'; 
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';   
        $config['cur_tag_close'] = '</a></li>'; 
        
        $config['num_tag_open'] = '<li class="page-item">';   
        $config['num_tag_close'] = '</li>'; 

        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);
        
        //Data
        $data['start'] = $this->uri->segment(3);
        $data['jemaat'] = $this->modeljemaat->getJemaat($config['per_page'], $data['start']);
        $this->load->view('list-data/index', $data);
    }
}

?>