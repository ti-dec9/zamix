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
        $this->db->select('*')->from("$this->table")->where('published', 'pending');
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    /**
     * CountAll()
     * Retorna o total de linhas da tabela language
     * de acordo com o idioma.
     * @param bool $language = idioma
     */
    public function count_all() {
        $this->query = $this->db->get($this->table);
        return $this->query->num_rows();
    }   

    /**
     * publish_post()
     * Selects all records in the table
     * @param: $table = Nome da tabela
     */
    public function publish_post($id, $data) {
        $this->db->where('id', $id);
        $this->query = $this->db->update("$this->table", $data);
        if ($this->query) :
            return true;
        endif;
    }

    /**
     * search()
     * Returns the all news.
     *
     * @param bool $sort
     * @param bool $order
     * @param bool $limit
     * @param bool $offset
     */
    public function search($like = null, $sort = 'id', $order = 'desc') {
        $this->db->order_by($sort, $order);
        $this->db->or_like('title', $like);
        $this->db->or_like('description', $like);
        //$this->db->or_like('bTag', $like);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    /**
     * getNewRand()
     * Returns the random news.
     *
     * @param bool $limit
     * @param bool $start
     *                    Use: $this->MODEL_EXEMPLO->getNewRand('6', '0');
     */
    public function rand($limit = null, $start = null) {
        $this->db->from($this->table);
        if ($limit != '' && $start != '') {
            $this->db->limit($limit, $start);
        }
        $this->db->order_by('rand()');
        $this->db->where('published', 'published');        
        $query = $this->db->get();
        if ($query->num_rows() > 0) :
            return $query->result(); else :
            return null;
        endif;
    }

}
