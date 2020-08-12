<?php

class Authors_model extends CI_Model {

    protected $table = 'authors';

    public function __construct() {
        parent::__construct();
    }

    public function get_count() {
        return $this->db->count_all("visiter");
    }

    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("visiter");

        return $query->result();
    }
}