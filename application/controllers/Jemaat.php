<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jemaat extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelJemaat', 'modeljemaat');
    }

    public function index(){
        $data['jemaat'] = $this->modeljemaat->lihatData();
        $this->load->view('list-data/index', $data);
    }
}

?>