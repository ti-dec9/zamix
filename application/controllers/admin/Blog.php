<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public $id;
    public $title;
    public $subtitle;
    public $description;    
    public $category;    
    public $agend_post;
    public $published;
    public $img;
    public $date_actual;
    public $_return;
    public $_arrData;

    function __construct() {
        parent::__construct();
        date_default_timezone_set("Brazil/East");
        $this->load->model('admin/Model_Blog');
    }

    public function index() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;    
            $data['email'] = $session->email;    
            $data['blog'] = $this->Model_Blog->all();
            $this->load->view('admin/blog/view', $data);
        else :
            redirect(base_url('admin'));
        endif;        
    }

    public function novo() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;    
            $data['email'] = $session->email;    
            $this->load->view('admin/blog/new', $data);
        else :
            redirect(base_url('admin'));
        endif;        
    }

    public function editar($id = NULL) {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;    
            $data['email'] = $session->email;
            if(empty($id)) {
                redirect('admin/blog');
            } else {
                $data['blog'] = $this->Model_Blog->find($id);
                $this->load->view('admin/blog/update', $data);
            }
        else :
            redirect(base_url('admin'));
        endif; 
    }


    /**********************************
     * FORM Blog Post - New
    ***********************************/
    public function insert() {  
        $this->title = $this->input->post("title");
        $this->subtitle = $this->input->post("subtitle");        
        $this->agend_post = $this->input->post("agend-post");        
        $this->category = $this->input->post("category");
        $this->description = $this->input->post("description");
        $this->date_actual = date("Y-m-d H:i:s", time());      

        //Trata a dada de agendamento do post
        if(!empty($this->agend_post)) {
            $date_post = $this->general->converte_date($this->agend_post, "en");
        } else {
            $date_post = date("Y-m-d H:i:s", time());
        }

        //Trata a status de publicação do post
        if (($date_post <= $this->date_actual) || (empty($this->agend_post))) {
            $this->published = 'published';
        } else {
            $this->published = 'pending';
        }

        //Trata a dada de criação do post
        $date_post_create = $this->input->post("date-post-create"); 
        if(empty($date_post_create)) {
            $new_date_post_create = date("Y-m-d H:i:s");
        } else {
            $new_date_post_create = $this->general->converte_date($date_post_create, "en");
        }

        //echo "Data de entrada: $this->agend_post | Data de convertida: $date_post | Status: $this->published";

        //Configurações para upload
        $config['upload_path']="./assets/img/blog/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '2000';
        //Inicializa a classe upload com as configurações
        $this->upload->initialize($config);
        //Verifica se o upload foi feito e insere os dados do formulário no banco
        if ($this->upload->do_upload('image')) {
            $data = array('upload_data' => $this->upload->data());
            $this->img = $data['upload_data']['file_name'];
            $this->_arrData = array(
                "title" => $this->title,    
                "subtitle" => $this->subtitle,    
                "category" => $this->category,    
                "agend_date_post" => $date_post,
                "description" => $this->description,
                "published" => $this->published,     
                "image" => $this->img,                
                "created_at" => $new_date_post_create    
            );
            $this->_return = $this->Model_Blog->insert($this->_arrData);
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        } else {
            echo $this->upload->display_errors();
        }

        /* $config['upload_path']="./assets/img/blog/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '2000';
        $this->upload->initialize($config);
        $this->upload->do_upload('image');
        $data = array('upload_data' => $this->upload->data());
        $this->img = $data['upload_data']['file_name'];

        $this->_arrData = array(
            "z_title" => $this->title,    
            "z_subtitle" => $this->subtitle,    
            "z_category" => $this->category,    
            "z_agend_date_post" => $this->agend_post,
            "z_description" => $this->description,
            "z_published" => $this->published,     
            "z_image" => $this->img,                
            "created_at" => date("Y-m-d H:i:s")    
        );
        echo "<pre>";
        print_r($this->_arrData);
        echo "</pre>"; */
    }


    /**
     * Editar o conteudo
     */
    public function update() {   
        $this->id = $this->input->post("id");
        $this->title = $this->input->post("title");
        $this->subtitle = $this->input->post("subtitle");   
        $this->agend_post = $this->input->post("agend-post");
        $this->category = $this->input->post("category");
        $this->description = $this->input->post("description");
        $this->date_actual = date("Y-m-d H:i:s", time());

        //Trata a dada de agendamento do post
        if(!empty($this->agend_post)) {
            $date_post = $this->general->converte_date($this->agend_post, "en");
        } else {
            $date_post = date("Y-m-d H:i:s", time());
        }

        //Trata a status de publicação do post
        if (($date_post <= $this->date_actual) || (empty($this->agend_post))) {
            $this->published = 'published';
        } else {
            $this->published = 'pending';
        }

        //Trata a dada de criação do post
        $date_post_create = $this->input->post("date-post-create"); 
        if(empty($date_post_create)) {
            $new_date_post_create = date("Y-m-d H:i:s");
        } else {
            $new_date_post_create = $this->general->converte_date($date_post_create, "en");
        }

        //Configurações para upload
        $config['upload_path']="./assets/img/blog/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '2000';
        //Inicializa a classe upload com as configurações
        $this->upload->initialize($config);
        //Verifica se o upload foi feito e insere os dados do formulário no banco
        if ($this->upload->do_upload('image')) {            
            $data = array('upload_data' => $this->upload->data());
            $this->img = $data['upload_data']['file_name'];
            $this->_arrData = array(
                "title" => $this->title,    
                "subtitle" => $this->subtitle,    
                "category" => $this->category,    
                "agend_date_post" => $date_post,
                "description" => $this->description,
                "published" => $this->published,     
                "image" => $this->img,   
                "created_at" => $new_date_post_create,
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->_return = $this->Model_Blog->update($this->id, $this->_arrData);
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        } else {
            //echo $this->upload->display_errors();
            $this->_arrData = array(
                "title" => $this->title,    
                "subtitle" => $this->subtitle,    
                "category" => $this->category,    
                "agend_date_post" => $date_post,
                "description" => $this->description,
                "published" => $this->published,         
                "created_at" => $new_date_post_create,       
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->_return = $this->Model_Blog->update($this->id, $this->_arrData);
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        }
        
    }

    /*
     * executa a exclusão dos dados
     */

    public function delete() {
        $this->id = $this->input->post('id');
        $this->_return = $this->Model_Blog->delete($this->id);
        if ($this->_return) :
            echo "TRUE";
        else :
            echo "FALSE";
        endif;
    }
    

}