<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Assineagora extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Brazil/East");
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

    /*
    * ASSINATURA PLANOS RESIDENCIAIS E EMPRESARIAIS
    */

    public function send_buy_plan() {
        $internet_id = $this->input->get("plan");
        $token = $this->input->get('_token');
        $voucher =  $this->input->get("voucher");
        $name = $this->input->get("name");
        $birth = $this->input->get("birth-date");
        $email = $this->input->get("email");
        $phone = $this->general->emptyPhone($this->input->get("phone"));
        $cpf_cnpj = $this->general->emptyCPF_CNPJ($this->input->get("cpf-cnpj"));
        $cep = $this->general->emptyCep($this->input->get("cep"));
        $street = $this->input->get("street");
        $address_number = $this->input->get("address-number");
        $neighborhood = $this->input->get("neighborhood");
        $state = $this->Model_Estados->find_id($this->input->get('state'));
        foreach ($state as $value) {
            $state = $value->nome;
        }
        $city = $this->input->get("city");
        $reference = $this->input->get("reference");
        $why = $this->input->get("why");
        $identify = $this->input->get("identify");
        $arrData = array(            
            "nome" => "$name",
            "data_nasc" => "$birth",
            "email" => "$email",
            "telefone" => "$phone",
            "cpfcnpj" => "$cpf_cnpj",
            "internet_id" => $internet_id,
            "cep" => "$cep",
            "logradouro" => "$street",
            "numero" => "$address_number",
            "bairro" => "$neighborhood",
            "estado_sigla" => "$state",
            "cidade_nome" => "$city",
            "ponto_referencia" => "$reference",
            "voucher" => "$voucher",
            "origem_id" => "1",
            "src_table_name" => "canais_atendimento",
            "src_table_id" => "5",                      
        );
        /* echo "<pre>";
        print_r($arrData);
        echo "</pre>"; */
        $return = $this->Model_Planos->send($arrData);
        /*
        * retorna o status
        ? é possível retornar mais mensagens também, através do message 
        ! para retornar mais parâmetros, entre em contato com o time de TI da ZAMIX e pergunte pela documentação
        */
        $data = array(
            'internet_id' => "$internet_id", // esse campo tem é o ID do plano. Ex: PremiumCasaP, PremiumCasaM e PremiumCasaG
            'status' => "$return->status"
        );

        $data = json_encode($data, TRUE);

        echo $data;
    }

    /*
    * ASSINATURA LINK DEDICADO
    */
    public function send_buy_dedicate_link() {
        $name = $this->input->get('name');
        $email = $this->input->get('email');
        $cnpj = $this->input->get('cnpj');
        $phone = $this->input->get('phone');
        $cep = $this->input->get('cep');
        $street = $this->input->get('street');
        $number = $this->input->get('number');
        $neighborhood = $this->input->get('neighborhood');
        $state = $this->Model_Estados->find_id($this->input->get('state'));
        foreach ($state as $value) {
            $state = $value->nome;
        }
        $city = $this->input->get('city');            

        // insira uma conta de e-mail valida em sua hospedagem
        //$from = "xploter13@gmail.com";
        $from = "empresarial@sodobrasil.net.br";

        // O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
        $sender = $from;

        // cabeçalho do email
        $headers = "Content-Type: text/html; charset=UTF-8\n";
        $headers .= "From: " . $sender . "\n";
        $headers .= "Reply-To: " . $email . "\n";

        // Mensagem no corpo do email
        $body = "<style type='text/css'>
                        body {
                            margin: 0px;
                            font-family: Arial;
                            font-size: 16px;
                            color: #666666;
                        }
                    </style>
                    <html>
                        <p>Você tem uma nova solicitação de cotação para Link Dedicado. Segue os dados abaixo!!!</p> <br>
                        <table width='510' border='1' cellpadding='1' cellspacing='1'>
                            <tr>
                                <td>
                                    <tr>
                                        <td width='600'><b>Nome:</b> $name</td>
                                    </tr>
                                    <tr>
                                        <td width='320'><b>Email:</b> $email</b></td>
                                    </tr>
                                    <tr>
                                        <td width='320'><b>Telefone:</b> $cnpj</b></td>
                                    </tr>
                                    <tr>
                                        <td width='320'><b>Telefone:</b> $phone</b></td>
                                    </tr>
                                    <tr>
                                        <td width='320'><b>Cep:</b> $cep</b></td>
                                    </tr>
                                    <tr>
                                        <td width='320'><b>Rua:</b> $street</b></td>
                                    </tr>
                                    <tr>
                                        <td width='320'><b>Número:</b> $number</b></td>
                                    </tr>
                                    <tr>
                                        <td width='320'><b>Bairro:</b> $neighborhood</b></td>
                                    </tr>
                                    <tr>
                                        <td width='320'><b>Estado:</b> $state</b></td>
                                    </tr>
                                    <tr>
                                        <td width='320'><b>Cidade:</b> $city</b></td>
                                    </tr>
                                </td>
                            </tr>
                        </table>
                    </html>";

        $subject = 'Link Dedicado | Solicitação de Cotação';

        if(mail($from, $subject, $body, $headers)) {
            echo "TRUE";
        } else {
            echo "FALSE";
        }
    }

    /* Resultado */
    public function resultado() {
        $status = $this->input->get('status');
        $previous_link = '';
        if ($status === 'ok') {
            $data['message'] = "<b>Recebemos o seu pedido!</b> <br><br> Está quase na hora de você aproveitar o melhor da nossa conexão. <br><br> Em até 24h, um de nossos consultores entrará em contato com você. <br><br> Fique de olho no seu e-mail, SMS ou telefone. <br<br> Viva a experiência laranja!";    
            $data['status_message'] = 'success';    
            $data['btn_link'] = base_url();        
            $data['label_link'] = 'Ir para a página principal';        
        } elseif ($status === 'link-dedicado-ok') {
            $data['message'] = "<b>Recebemos o seu pedido!</b> <br><br> Vamos entrar em contato com você por telefone nas próximas 24 horas para finalizarmos a sua solicitação. Até breve!";
            $data['status_message'] = 'success'; 
            $data['btn_link'] = base_url();        
            $data['label_link'] = 'Ir para a página principal';    
        } else {
            $hours = date('h:i:s');
            if (($hours > '8:30:00') && ($hours < '18:00:00')) {
                $data['message'] = "Não foi possível enviar a sua solicitação. Por favor, tente novamente. <br><br> Se preferir, entre em contato com a gente pelo chat  (o ícone laranja com um balão de fala feliz). <br> Estamos online e prontos para te atender 😊";
            } else {
                $data['message'] = "Não foi possível enviar a sua solicitação. Por favor, tente novamente. <br><br> Se preferir, entre em contato com a gente pelo chat  (o ícone laranja com um balão de fala feliz). <br> Responderemos a sua solicitação assim que começarmos nossas atividades no próximo dia útil. 😊 <br><br> Você também pode nos contatar pelo nosso atendimento 24h pelo telefone: <b>(24)3345-0002 </b>";
            }            
            $data['status_message'] = "error";
            $data['btn_link'] = $previous_link;        
            $data['label_link'] = 'Tentar novamente';
        }
        $this->load->view('resultado-contratacao-plano', $data);
    }

}
