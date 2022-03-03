<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Login extends CI_Model {

    public $query;
    public $data;

    function __construct() {
        parent::__construct();
    }

    public function auth($email, $password) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data[0];
        endif;
    }
}
