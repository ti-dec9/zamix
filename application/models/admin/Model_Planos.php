<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Planos extends CI_Model {    

    public $sql;
    public $query;
    public $data;    

    function __construct() {
        parent::__construct();
    }

    /**
     * _selectAll()
     * Selects all records in the table
     * @param: $table = Nome da tabela
     */
    public function all($table) {
        $this->query = $this->db->get("$table");
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    /**
     * _selectbyID()
     * Select by ID
     * @param int $id
     */
    public function find($id, $table) {
        $this->db->select('*')->from("$table")->where('id', $id);
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    /**
     * Insere os dados na tabela
     * @param: $data = Dados do formulario
     * @param: $table = Nome da tabela
     */
    public function insert($data, $table) {
        $this->db->set($data);
        $this->query = $this->db->insert($this->db->dbprefix . "$table");
        if ($this->query) :
            return true;
        endif;
    }

    /**
     * Altera os dados na tabela
     * @param: $id = ID do registro a ser atualizado
     * @param: $table = Nome da tabela
     * @param: $data = Dados do formulario
     */
    public function update($id, $data, $table) {
        $this->db->where('id', $id);
        $this->query = $this->db->update("$table", $data);
        if ($this->query) :
            return true;
        endif;
    }

    /**
     * Deleta os dados na tabela
     * @param: $id = ID do registro a ser deletado
     * @param: $table = Nome da tabela
     */
    public function delete($id, $table) {
        $this->query = $this->db->delete("$table", array('id' => $id));
        if ($this->query) :
            return true;
        endif;
    }  

 
}
