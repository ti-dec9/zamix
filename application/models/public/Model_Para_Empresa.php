<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Para_Empresa extends CI_Model {    

    public $sql;
    public $query;
    public $data;
    public $table = 'para_empresa';

    function __construct() {
        parent::__construct();
    }

    /**
     * _selectAll()
     * Selects all records in the table
     * @param: $table = Nome da tabela
     */
    public function all() {
        $this->query = $this->db->get("$this->table");
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }
 
}
