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
        // Config
        $config['total_rows'] = $this->modeljemaat->hitungJemaat();
        $config['per_page'] = 10;
        $data['total_rows'] = $config['total_rows'];

        // Initialize
        $this->pagination->initialize($config);

        // Search
        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }
        
        //Data
        $data['start'] = $this->uri->segment(3);
        $data['jemaat'] = $this->modeljemaat->getJemaat($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('list-data/index', $data);
    }
}

?>