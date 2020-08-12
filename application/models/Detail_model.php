<?php
class Detail_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function insert($data)
    {
        $insert = $this->db->insert('visiter', $data);
        return $insert;
    }

    function get_salesinfo() {
		$query = $this->db->get('visiter');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
		
		return NULL;
	}
    
}