<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Model_Blog');
    }
    

    public function index() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;    
            $data['email'] = $session->email;   
            $data['blog'] = $this->Model_Blog->all_limit('id', 'desc', '5', '0');
            $this->load->view('admin/dashboard', $data);
        else :
            redirect(base_url('admin'));
        endif;        
    }
}
