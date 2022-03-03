<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Duvidas extends CI_Controller {

    public $id;
    public $section;
    public $title;
    public $description;
    public $_arrData;
    public $_return;
    
    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Brazil/East");
        $this->load->model('admin/Model_Duvidas');
    }
    
    public function index() {
        redirect(base_url('admin'));
    }

    public function pagina() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;
            $data['email'] = $session->email;
            $data['faq'] = $this->Model_Duvidas->all("duvidas");
            $this->load->view('admin/duvidas/page', $data);
        else :
            redirect(base_url('admin'));
        endif;
    }

    public function conteudo() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;
            $data['email'] = $session->email;
            $data['faq'] = $this->Model_Duvidas->all("duvidas_conteudo");
            $this->load->view('admin/duvidas/content/view', $data);
        else :
            redirect(base_url('admin'));
        endif;
    }

    public function novo_conteudo() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;
            $data['email'] = $session->email;
            $this->load->view('admin/duvidas/content/insert', $data);
        else :
            redirect(base_url('admin'));
        endif;
    }    

    public function editar_conteudo($id) {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;
            $data['email'] = $session->email;
            $data['faq'] = $this->Model_Duvidas->find("duvidas_conteudo", $id);
            $this->load->view('admin/duvidas/content/update', $data);
        else :
            redirect(base_url('admin'));
        endif;
    }    

    /*******************************
     * Editar os dados da pagina
    *******************************/
    public function update_page() {   
        $this->id = $this->input->post("id");
        $this->title = $this->input->post("title");
        //Configurações para upload
        $config['upload_path']="./assets/img/background/";
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
                "image" => $this->img,   
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->_return = $this->Model_Duvidas->update("duvidas", $this->id, $this->_arrData);
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        } else {
            //echo $this->upload->display_errors();
            $this->_arrData = array(
                "title" => $this->title,   
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->_return = $this->Model_Duvidas->update("duvidas", $this->id, $this->_arrData);
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        }        
    }

    /*******************************
     * Insere o conteudo da pagina
    *******************************/

    public function insert_content() {   
        $this->section = $this->input->get("section");
        $this->title = $this->input->get("title");
        $this->description = $this->input->get("description");
        $this->_arrData = array(
            "section" => $this->section,
            "title" => $this->title,
            "description" => $this->description,
            "created_at" => date("Y-m-d H:i:s")
        );
        $this->_return = $this->Model_Duvidas->insert("duvidas_conteudo", $this->_arrData);
        if ($this->_return) {
            echo 'TRUE';
        } else {
            echo 'FALSE';
        }
    }

    /*******************************
     * Editar o conteudo da pagina
    *******************************/
    public function update_content() {   
        $this->id = $this->input->get("id");
        $this->section = $this->input->get("section");
        $this->title = $this->input->get("title");
        $this->description = $this->input->get("description");
        $this->_arrData = array(
            "section" => $this->section,
            "title" => $this->title,
            "description" => $this->description,
            "updated_at" => date("Y-m-d H:i:s")
        );
        $this->_return = $this->Model_Duvidas->update("duvidas_conteudo", $this->id, $this->_arrData);
        if ($this->_return) {
            echo 'TRUE';
        } else {
            echo 'FALSE';
        }
    }

    /*******************************
     * Excluir o conteudo da pagina
    *******************************/

    public function delete_content() {
        $this->id = $this->input->post('id');
        $this->_return = $this->Model_Duvidas->delete("duvidas_conteudo", $this->id);
        if ($this->_return) :
            echo "TRUE";
        else :
            echo "FALSE";
        endif;
    }
}
