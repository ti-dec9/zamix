<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paravoce extends CI_Controller {

    public $id;
    public $name;
    public $id_plan;
    public $description;
    public $value_plan;
    public $obs;
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
            $data['plan'] = $this->Model_Planos->all('planos_para_voce');
            $this->load->view('admin/planos/para-voce/view', $data);
        else :
            redirect(base_url('admin'));
        endif;        
    }

    public function novo() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;
            $data['email'] = $session->email;
            $this->load->view('admin/planos/para-voce/new');
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
                redirect('admin/planos/paravoce');
            } else {
                $data['plan'] = $this->Model_Planos->find($id, 'planos_para_voce');
                $this->load->view('admin/planos/para-voce/update', $data);
            }
        else :
            redirect(base_url('admin'));
        endif;        
    }

    /**********************************
     * executa a inserção dos dados
    ***********************************/
    public function insert() {
        $this->name = $this->input->post('name');        
        $this->name_featured = $this->input->post('name-featured');
        $this->id_plan = $this->input->post('id-plan');
        $this->description = $this->input->post('description');
        $this->value_plan = $this->general->parse_float($this->input->post('value'), 'en');
        $this->obs = $this->input->post('obs');
        //Configurações para upload
        $config['upload_path']="./assets/img/plans/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '2000';
        //Inicializa a classe upload com as configurações
        $this->upload->initialize($config);
        if ($this->upload->do_upload('image')) {
            $data = array('upload_data' => $this->upload->data());
            $this->img = $data['upload_data']['file_name'];
            $this->_arrData = array(
                "name" => $this->name,
                "name_featured" => $this->name_featured,
                "id_plan" => $this->id_plan,
                "description" => $this->description,
                "value_plan" => $this->value_plan,
                "obs" => $this->obs,
                "image" => $this->img,      
                "created_at" => date("Y-m-d H:i:s", time())
            );
            $this->_return = $this->Model_Planos->insert($this->_arrData, 'planos_para_voce');
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        } else {
            echo $this->upload->display_errors();
        }

        /* echo "<pre>";
        print_r($this->_arrData);
        echo "<pre>"; */
    }

    /**********************************
     * executa a atualização dos dados
    ***********************************/
    public function update() {
        $this->id = $this->input->post('id');
        $this->name = $this->input->post('name');
        $this->name_featured = $this->input->post('name-featured');
        $this->id_plan = $this->input->post('id-plan');
        $this->description = $this->input->post('description');
        $this->value_plan = $this->general->parse_float($this->input->post('value'), 'en');
        $this->obs = $this->input->post('obs');
        //Configurações para upload
        $config['upload_path']="./assets/img/plans/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '2000';
        //Inicializa a classe upload com as configurações
        $this->upload->initialize($config);
        if ($this->upload->do_upload('image')) {
            $data = array('upload_data' => $this->upload->data());
            $this->img = $data['upload_data']['file_name'];
            $this->_arrData = array(
                "name" => $this->name,
                "name_featured" => $this->name_featured,
                "id_plan" => $this->id_plan,
                "description" => $this->description,
                "value_plan" => $this->value_plan,
                "obs" => $this->obs,
                "image" => $this->img,
                "updated_at" => date("Y-m-d H:i:s", time())
            );
            $this->_return = $this->Model_Planos->update($this->id, $this->_arrData, 'planos_para_voce');
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        } else {
            $this->_arrData = array(
                "name" => $this->name,
                "name_featured" => $this->name_featured,
                "id_plan" => $this->id_plan,
                "description" => $this->description,
                "value_plan" => $this->value_plan,
                "obs" => $this->obs,
                "updated_at" => date("Y-m-d H:i:s", time())
            );
            $this->_return = $this->Model_Planos->update($this->id, $this->_arrData, 'planos_para_voce');
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            }
        }

        /* echo "<pre>";
        print_r($this->_arrData);
        echo "<pre>"; */      
    }


    /**********************************
     * executa a exclusão dos dados
    ***********************************/
    public function delete() {
        $this->id = $this->input->post('id');
        $this->_return = $this->Model_Planos->delete($this->id, 'planos_para_voce');
        if ($this->_return) :
            echo "TRUE";
        else :
            echo "FALSE";
        endif;
    }

}

