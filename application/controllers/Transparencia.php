<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transparencia extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('public/Model_Transparencia');
    }
    
    public function index() {
        $data['transparent'] = $this->Model_Transparencia->all();
        $this->load->view('transparencia', $data);
    }

}
