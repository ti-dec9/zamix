<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Duvidas extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('public/Model_Duvidas');
    }
    
    public function index() {
        $data['page'] = $this->Model_Duvidas->all_page();
        $data['faq_section_1'] = $this->Model_Duvidas->limit_content("id", "asc", "1", "0", "Dúvidas para contratar?");
        $data['faq_section_2'] = $this->Model_Duvidas->limit_content("id", "asc", "1", "0", "Dúvidas para configurar?");
        $data['faq_section_3'] = $this->Model_Duvidas->limit_content("id", "asc", "1", "0", "Dúvidas com a conexão?");
        $data['faq_1'] = $this->Model_Duvidas->all_content("Dúvidas para contratar?");
        $data['faq_2'] = $this->Model_Duvidas->all_content("Dúvidas para configurar?");
        $data['faq_3'] = $this->Model_Duvidas->all_content("Dúvidas com a conexão?");
        $this->load->view('duvidas', $data);
    }

}
