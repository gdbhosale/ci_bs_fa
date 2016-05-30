<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function get_all_records() {
		$query = $this->db->get("records");
		return $query->result_array();
	}
	
	public function get_record($id) {
		$this->db->where("id", $id);
        $query = $this->db->get("records");
		if($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}
}