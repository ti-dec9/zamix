<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Model_Usuarios');
    }
    
    public function index() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;    
            $data['email'] = $session->email;    
            $data['users'] = $this->Model_Usuarios->_selectAll();
            $this->load->view('admin/usuarios/view', $data);
        else :
            redirect(base_url('admin'));
        endif; 
    }

}
