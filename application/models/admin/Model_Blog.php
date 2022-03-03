<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Blog extends CI_Model {    

    public $sql;
    public $query;
    public $data;
    public $table = 'blog';

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
     * all_limit()
     * Returns the espanhol news.
     *
     * @param bool $sort
     * @param bool $order
     * @param bool $limit
     * @param bool $offset
     * @param bool $language
     */
    public function all_limit($sort = 'id', $order = 'desc', $limit = null, $offset = null) {
        $this->db->order_by($sort, $order);
        $this->db->where('published', 'published');
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    /**
     * _selectAllPeding()
     * Selects all records in the table
     * @param: $table = Nome da tabela
     */
    public function all_pending() {
        $this->db->select('*')->from("$this->table")->where('status', 'pending');
        $this->query = $this->db->get();
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
    public function find($id) {
        $this->db->select('*')->from("$this->table")->where('id', $id);
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
    public function insert($data) {
        $this->db->set($data);
        $this->query = $this->db->insert($this->db->dbprefix . "$this->table");
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
    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->query = $this->db->update("$this->table", $data);
        if ($this->query) :
            return true;
        endif;
    }

    /**
     * Deleta os dados na tabela
     * @param: $id = ID do registro a ser deletado
     * @param: $table = Nome da tabela
     */
    public function delete($id) {
        $this->query = $this->db->delete("$this->table", array('id' => $id));
        if ($this->query) :
            return true;
        endif;
    }  

 
}
