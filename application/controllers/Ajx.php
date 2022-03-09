<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajx extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('public/Model_Cidades');
    }
    
    
    public function index() {
        //
    }

    public function loading_city() {
        /**
         * Recupera o ID do estado, enviado via ajax. 
         * Confira no arquivo ajx.js
         */  
        $id = $this->input->get('id');
        $cities = $this->Model_Cidades->find_id($id);
        if (empty($cities)) :
        ?>          
        <option value="" selected disabled>Cidade</option>
        <?php
        else :
        ?>
        <option value="" selected disabled>Cidade</option>
        <?php
            foreach ($cities as $value) :
        ?>
            <option value="<?php echo $value->nome; ?>"><?php echo $value->nome; ?></option>
        <?php                    
            endforeach;
        endif;
    }
}
