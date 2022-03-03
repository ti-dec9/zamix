<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public $email;
    public $password;
    public $login_exists;
    public $data;
    public $arr_session;

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Model_Login');
    }

    public function index() {
        $this->load->view('admin/login');
    }

    /**
     * @method authenticate
     * Checks if user exists
     * @return boolean
     */
    public function authenticate() {        
        $this->email = $this->input->get('email');
        $this->password = base64_encode($this->input->get('password'));
        $this->login_exists = $this->Model_Login->auth($this->email, $this->password);
        if ($this->login_exists) :
            $this->data = $this->login_exists;
            $this->arr_session = array(
                'session' => $this->data
            );
        $this->session->set_userdata($this->arr_session);
            echo 'TRUE'; 
        else :
            echo 'FALSE';
        endif;
    }

}
