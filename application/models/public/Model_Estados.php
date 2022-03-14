<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Estados extends CI_Model {

    public $sql;
    public $query;
    public $data;
    public $table = "estados";

    function __construct() {
        parent::__construct();        
    }

    /**
     * Seleciona todos os registros da tabela
     * @param: $table = Nome da tabela
     */
    public function all() {        
        $this->query = $this->db->get($this->table);
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    /*
     * Seleciona e estado pelo ID
     * @param: $id = ID
     */
    public function find_id($id) {
        $this->db->select('*')->from("$this->table")->where('id', $id);
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

}
