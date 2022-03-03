<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Paravoce extends CI_Controller {

    public $id;
    public $header_title;
    public $header_subtitle;
    public $header_background;
    public $title;
    public $description;
    public $btn_link;
    public $img;
    public $_arrData;
    public $_return;
    
    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Brazil/East");
        $this->load->model('admin/Model_Para_Voce');
    }
    
    public function index() {
        if (isset($_SESSION['session'])) :
            $session = $this->session->userdata('session');
            $data['name'] = $session->name;    
            $data['email'] = $session->email;    
            $data['for_you'] = $this->Model_Para_Voce->all(); 
            $this->load->view('admin/solucoes/para-voce/view', $data);   
        else :
            redirect(base_url('admin'));
        endif;
    }

    /*********************
     * Editar o conteudo
    **********************/
    public function update() {   
        $this->id = $this->input->post("id");
        $this->header_title = $this->input->post("header-title");
        $this->header_subtitle = $this->input->post("header-subtitle");
        $this->title = $this->input->post("title");
        $this->description = $this->input->post("description");
        $this->btn_link = $this->input->post("link-btn-tou-virtual");
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
                "header_title" => $this->header_title,   
                "header_subtitle" => $this->header_subtitle,   
                "header_background" => $this->img,   
                "title" => $this->title,   
                "description" => $this->description,
                "btn_link" => $this->btn_link,
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->_return = $this->Model_Para_Voce->update($this->id, $this->_arrData);
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        } else {
            //echo $this->upload->display_errors();
            $this->_arrData = array(
                "header_title" => $this->header_title,   
                "header_subtitle" => $this->header_subtitle,
                "title" => $this->title,   
                "description" => $this->description,
                "btn_link" => $this->btn_link,
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->_return = $this->Model_Para_Voce->update($this->id, $this->_arrData);
            if ($this->_return) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            } 
        }        
    }

}
