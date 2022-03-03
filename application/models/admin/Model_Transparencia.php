<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Transparencia extends CI_Model {    

    public $sql;
    public $query;
    public $data;
    public $table = 'transparencia';

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

    /**
     * Altera os dados na tabela
     * @param: $id = ID do registro a ser atualizado
     * @param: $table = Nome da tabela
     * @param: $data = Dados do formulario
     */
    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->query = $this->db->update("$this->table", $data);
        if ($this->query) :
            return true;
        endif;
    }
 
}
