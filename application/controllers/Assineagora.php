<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Assineagora extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('public/Model_Estados');
        $this->load->model('public/Model_Planos');
    }    

    public function index() {        
        $data['states'] = $this->Model_Estados->all();
        if(empty($this->input->get('plano'))) {
            redirect(base_url());
        } else {
            $data['status_prime'] = 'true';
            $data['plan'] = $this->Model_Planos->find_slug($this->input->get('plano'), 'planos_para_voce');
            if (empty($data['plan'])) {
                $data['status_prime'] = 'false';
                $data['plan'] = $this->Model_Planos->find_slug($this->input->get('plano'), 'planos_para_empresa');
            }
        }
        $this->load->view('assine-agora', $data);
    }

    public function send_buy_plan() {
        $token = $this->input->get('_token');
        $voucher =  $this->input->get("voucher");
        $name = $this->input->get("name");
        $birth = $this->input->get("birth-date");
        $email = $this->input->get("email");
        $phone = $this->input->get("phone");
        $cpf_cnpj = $this->input->get("cpf-cnpj");
        $cep = $this->input->get("cep");
        $street = $this->input->get("street");
        $address_number = $this->input->get("address-number");
        $neighborhood = $this->input->get("neighborhood");
        $state = $this->input->get("state");
        $city = $this->input->get("city");
        $reference = $this->input->get("reference");
        $why = $this->input->get("why");
        $identify = $this->input->get("identify");

        $arrData = array(            
            "nome" => "$name",
            "data_nasc" => "$birth",
            "email" => "$email",
            "telefone" => "24988262563",
            "cpfcnpj" => "00285100700",
            "internet_id" => "UltraMix100",
            "cep" => "27263060",
            "logradouro" => "$street",
            "numero" => "$address_number",
            "bairro" => "$neighborhood",
            "estado_sigla" => "$state",
            "cidade_nome" => "$city",
            "ponto_referencia" => "$reference",
            "voucher" => "",
            "origem_id" => "1",
            "src_table_name" => "canais_atendimento",
            "src_table_id" => "5",                      
        );

        $return = $this->Model_Planos->send($arrData);
        if ($return) {
            echo "TRUE";
        } else {
            echo "FALSE";
        }

        //Google Recaptcha
       /* $SecretKey = "6LfBbfUdAAAAAN6s6tvH6ScH3WcfL_glGW96Ks-A";
        //Pego a validação do Captcha feita pelo usuário
         if (isset($this->input->get('g-recaptcha-response')) {
            $check_captcha = $this->input->get('g-recaptcha-response');
        } 
        // Verifico se foi feita a postagem do Captcha
        if (isset($check_captcha)) {
            // Valido se a ação do usuário foi correta junto ao google
            $retorn_captcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $SecretKey . '&response=' . $POST['g-recaptcha-response']));
        }
        if ($response_captcha->success) {
            
        }*/
    }

}
