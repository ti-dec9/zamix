<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Link_Dedicado extends CI_Model {

    public $sql;
    public $query;
    public $data;
    protected $table = 'link_dedicados';

    function __construct() {
        parent::__construct();        
    }

    /**
     * Seleciona todos os registros da tabela
     * @param: $table
     */
    public function all() {        
        $this->query = $this->db->get($this->table);
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    /*
     *
     * @param: $id
     */
    public function find($id) {
        $this->db->select('*')->from("$this->table")->where('id', $id);
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }
}
