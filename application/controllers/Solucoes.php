<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Solucoes extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('public/Model_Estados');
        $this->load->model('public/Model_Planos');
        $this->load->model('public/Model_Link_Dedicado');
        $this->load->model('public/Model_Para_Voce');
        $this->load->model('public/Model_Para_Empresa');
    }    

    public function index() {        
        redirect(base_url());        
    }

    public function para_voce() {
        $data['states'] = $this->Model_Estados->all();
        $data['plan'] = $this->Model_Planos->all_limit('planos_para_voce', 'id', 'asc', '3', '0'); //dados dos planos
        $data['for_you'] = $this->Model_Para_Voce->all(); //dados institucional
        $this->load->view('solucoes/para-voce', $data);
    }

    public function para_empresa() {
        $data['states'] = $this->Model_Estados->all();
        $data['for_business'] = $this->Model_Para_Empresa->all(); //dados institucional
        $data['plan_12'] = $this->Model_Planos->find_fidelity('Plano Comercial 12x', 'planos_para_empresa'); //dados dos planos
        $data['plan_24'] = $this->Model_Planos->find_fidelity('Plano Comercial 24x', 'planos_para_empresa'); //dados dos planos
        $this->load->view('solucoes/para-empresa', $data);
    }

    public function link_dedicado() {
        $data['states'] = $this->Model_Estados->all();
        $data['dedicated_link'] = $this->Model_Link_Dedicado->all();
        $this->load->view('solucoes/link-dedicado', $data);
    }

    public function beneficios() {
        $this->load->view('solucoes/beneficios');
    }
}
