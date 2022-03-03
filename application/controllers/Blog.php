<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Brazil/East");
        $this->load->model('public/Model_Blog');
        $data = $this->Model_Blog->all_pending();
        if (!empty($data)):
            $n = new ArrayIterator($data);
            $dateActual = date("Y-m-d H:i:s", time());
            while ($n->valid()) :
                if ($dateActual >= $n->current()->agend_date_post) :
                    $arrData = array(
                        "id" => $n->current()->id,
                        "published" => 'published'
                    );
                    $this->Model_Blog->publish_post($n->current()->id, $arrData);
                endif;
                $n->next();
            endwhile;
        endif;
    }
    

    public function index() {
        /***************************
        * Configuração de paginação
        ****************************/
        $config['base_url'] = base_url('blog/p');
        $config['total_rows'] = $this->Model_Blog->count_all();
        $config['per_page'] = 3; // Define a exibição de registros por pagina
        $config['num_links'] = 3; // Define o numero de links
        $config['uri_segment'] = 3; // seta a qtd de parametros na url
        // Bootstrap 4, work very fine.
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Voltar';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Avançar';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $offset = $this->uri->segment(3, 0);
        /*
         * Inicializa a paginação
         */
        $this->pagination->initialize($config);
        $data['blog'] = $this->Model_Blog->all_limit('id', 'desc', $config['per_page'], $offset);
        /*
         * Retorna os links de paginação
         */
        $data['pagination'] = $this->pagination->create_links();

        $data['rand'] = $this->Model_Blog->rand('3', '5');

        $this->load->view('blog/view', $data);
    }

    public function materia($id = NULL) {
        if(empty($id)) {            
            redirect('blog');            
        } else {
            $data['blog'] = $this->Model_Blog->find($id);
            $data['rand'] = $this->Model_Blog->rand('3', '5');
            $this->load->view('blog/materia', $data);
        }        
    }

    public function pesquisar() {
        $str = $this->input->get('s');
        $data['blog'] = $this->Model_Blog->search($str, 'id', 'desc');
        $data['rand'] = $this->Model_Blog->rand('3', '5');
        $this->load->view('blog/view', $data);

    }

}
