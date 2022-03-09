<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Planos extends CI_Model {
    
    public function __construct() {
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
     * all_limit()
     * Returns the espanhol news.
     *
     * @param bool $sort
     * @param bool $order
     * @param bool $limit
     * @param bool $offset
     * @param bool $language
     */
    public function all_limit($table, $sort = 'id', $order = 'asc', $limit = null, $offset = null) {
        $this->db->order_by($sort, $order);
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get($table);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
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
     * _selectbyID()
     * Select by ID
     * @param int $id
     */
    public function find_slug($id, $table) {
        $this->db->select('*')->from("$table")->where('id_plan', $id);
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    /**
     * _selectAll()
     * Selects all records in the table
     * @param: $table = Nome da tabela
     */
    public function find_fidelity($fidelity, $table) {
        $this->db->select('*')->from("$table")->where('type_plan', $fidelity);
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    public function send($data = NULL) { 
        $endpoint = 'https://joker.zamix.com.br/api/site-zamix/v1/pre-vendas';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "$endpoint",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                // Set here requred headers
                //"accept: */*",
                //"accept-language: en-US,en;q=0.8",
                "content-type: application/json",
            ),
        ));        
        $response = curl_exec($curl);
        $err = curl_error($curl);       
        curl_close($curl);        
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return json_decode($response);
        }
    }    

}
