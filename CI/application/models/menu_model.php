<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
	}

	function getAll() {
		$this->db->select('gerechtid, gerechtnaam, gerechttype, gerechtprijs');
		$query = $this->db->get('tbl_menu');

		return $query->result_array();
	}
	
	function getMenu($id) {
		$this->db->select('gerechtid, gerechtnaam, gerechttype, gerechtprijs');
		$this->db->where('gerechtid', $id);
		$query = $this->db->get('tbl_menu');

		return $query->row_array();
	}

	
	public function insertDish($data)
	{
		$this->db->insert('tbl_menu', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}

	public function updateDish($id, $data)
	{
		$this->db->where('gerechtid', $id);
		$this->db->update('tbl_menu', $data);
	}
	
	public function delDish($id)
	{
		$this->db->where('gerechtid', $id);
		$this->db->delete('tbl_menu');
	}
}