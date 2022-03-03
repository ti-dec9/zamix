<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testevelocidade extends CI_Controller {

    public function index() {
        $this->load->view('teste-de-velocidade');
    }

}
