<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paraempresa extends CI_Controller {

    public $id;
    public $name;
    public $name_featured;
    public $id_plan;
    public $type_plan;
    public $description;
    public $value_plan;
    public $obs;
    public $obs_after_expiration;
    public $_return;
    public $_arrData;

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Brazil/East");
        $this->load->model('admin/Model_Planos');
    }
    
    public function index() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;    
            $data['email'] = $session->email;    
            $data['plan'] = $this->Model_Planos->all('planos_para_empresa');
            $this->load->view('admin/planos/para-empresa/view', $data);
        else :
            redirect(base_url('admin'));
        endif;
    }

    public function novo() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;
            $data['email'] = $session->email;
            $this->load->view('admin/planos/para-empresa/new', $data);
        else :
            redirect(base_url('admin'));
        endif;        
    }

    public function editar($id) {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;    
            $data['email'] = $session->email;    
            if(empty($id)) {
                redirect('admin/planos/paraempresa');
            } else {
                $data['plan'] = $this->Model_Planos->find($id, 'planos_para_empresa');
                $this->load->view('admin/planos/para-empresa/update', $data);
            }
        else :
            redirect(base_url('admin'));
        endif;        
    }

    /**********************************
     * executa a inserção dos dados
    ***********************************/
    public function insert() {
        $this->name = $this->input->get('name');
        $this->name_featured = $this->input->get('name-featured');
        $this->id_plan = $this->input->get('id-plan');
        $this->type_plan = $this->input->get('type-plan');
        $this->value_plan = $this->general->parse_float($this->input->get('value'), 'en');
        $this->description = $this->input->get('description');        
        $this->obs = $this->input->get('obs');
        $this->obs_after_expiration = $this->input->get('obs-after-expiration');
        $this->_arrData = array(
            "name" => $this->name,
            "name_featured" => $this->name_featured,
            "id_plan" => $this->id_plan,
            "type_plan" => $this->type_plan,
            "description" => $this->description,
            "value_plan" => $this->value_plan,
            "obs" => $this->obs,
            "obs_after_expiration" => $this->obs_after_expiration,
            "created_at" => date("Y-m-d H:i:s")
        );

        /* echo "<pre>";
        print_r($this->_arrData);
        echo "<pre>"; */

        $this->_return = $this->Model_Planos->insert($this->_arrData, 'planos_para_empresa');
        if ($this->_return) {
            echo "TRUE";
        } else {
            echo "FALSE";
        }        
    }

    /**********************************
     * executa a atualização dos dados
    ***********************************/
    public function update() {
        $this->id = $this->input->get('id');
        $this->name = $this->input->get('name');
        $this->name_featured = $this->input->get('name-featured');
        $this->id_plan = $this->input->get('id-plan');
        $this->type_plan = $this->input->get('type-plan');
        $this->value_plan = $this->general->parse_float($this->input->get('value'), 'en');
        $this->description = $this->input->get('description');
        $this->obs = $this->input->get('obs');
        $this->obs_after_expiration = $this->input->get('obs-after-expiration');
        $this->_arrData = array(
            "name" => $this->name,
            "name_featured" => $this->name_featured,
            "id_plan" => $this->id_plan,
            "type_plan" => $this->type_plan,
            "description" => $this->description,
            "value_plan" => $this->value_plan,
            "obs" => $this->obs,
            "obs_after_expiration" => $this->obs_after_expiration,
            "updated_at" => date("Y-m-d H:i:s")
        );

        /* echo "<pre>";
        print_r($this->_arrData);
        echo "<pre>"; */

        $this->_return = $this->Model_Planos->update($this->id, $this->_arrData, 'planos_para_empresa');
        if ($this->_return) {
            echo "TRUE";
        } else {
            echo "FALSE";
        }        
    }


    /**********************************
     * executa a exclusão dos dados
    ***********************************/
    public function delete() {
        $this->id = $this->input->post('id');
        $this->_return = $this->Model_Planos->delete($this->id, 'planos_para_empresa');
        if ($this->_return) :
            echo "TRUE";
        else :
            echo "FALSE";
        endif;
    }

}

