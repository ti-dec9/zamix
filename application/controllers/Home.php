<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        date_default_timezone_set("Brazil/East");
        $this->load->model('public/Model_Blog');
        $data = $this->Model_Blog->all_pending();
        if (!empty($data)):
            $n = new ArrayIterator($data);
            $dateActual = date("Y-m-d H:i:s", time());
            while ($n->valid()) :
                if ($dateActual >= $n->current()->z_agend_date_post) :
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

	public function index()	{
		$data['blog'] = $this->Model_Blog->all_limit('id', 'desc', '3', '0');
		$this->load->view('home', $data);
	}
}
