<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {

    public $id;
    public $title;
    public $description;
    public $_arrData;
    public $_return;
    
    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Brazil/East");
        $this->load->model('admin/Model_Sobre');
    }
    
    public function index() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;    
            $data['email'] = $session->email;    
            $data['about'] = $this->Model_Sobre->all();        
            $this->load->view('admin/sobre/view', $data);  
        else :
            redirect(base_url('admin'));
        endif;
    }

    /*********************
     * Editar o conteudo
    **********************/
    public function update() {   
        $this->id = $this->input->post("id");
        $this->title = $this->input->post("title");
        $this->description = $this->input->post("description");
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
                "description" => $this->description,   
                "background" => $this->img,   
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->_return = $this->Model_Sobre->update($this->id, $this->_arrData);
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        } else {
            //echo $this->upload->display_errors();
            $this->_arrData = array(
                "title" => $this->title,   
                "description" => $this->description, 
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->_return = $this->Model_Sobre->update($this->id, $this->_arrData);
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        }        
    }

}
