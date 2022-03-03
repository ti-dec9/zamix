<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Duvidas extends CI_Model {    

    public $sql;
    public $query;
    public $data;

    function __construct() {
        parent::__construct();
    }

    /**
     * all_page()
     * Selects all records in the table
     */
    public function all_page() {
        $this->query = $this->db->get("duvidas");
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    /**
     * all_content()
     * Selects all records in the table
     */
    public function limit_content($sort = 'id', $order = 'asc', $limit = null, $offset = null, $section = NULL) { 
        $this->db->order_by($sort, $order);
        $this->db->where('section', "$section"); 
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $this->query = $this->db->get("duvidas_conteudo");
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    /**
     * all_content()
     * Selects all records in the table
     */
    public function all_content($section = NULL) { 
        $this->db->from("duvidas_conteudo");       
        $this->db->where('section', "$section"); 
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }
 
}
