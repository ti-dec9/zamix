<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Cidades extends CI_Model {

    public $sql;
    public $query;
    public $data;
    public $table = "cidades";

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
     * Seleciona a noticia pelo ID
     * @param: $id = ID do Médico
     */
    public function find_id($id) {
        $this->db->select('*')->from("$this->table")->where('estado', $id);
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    } 
}
