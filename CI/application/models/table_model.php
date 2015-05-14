<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Table_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
	}

	function getAll() {
		$this->db->select('tafelid, tafelnr, aantal');
		$query = $this->db->get('tbl_tafels');

		return $query->result_array();
	}
	
	function getTable($id) {
		$this->db->select('tafelid, tafelnr, aantal');
		$this->db->where('tafelid', $id);
		$query = $this->db->get('tbl_tafels');

		return $query->row_array();
	}

	
	public function insertTable($data)
	{
		$this->db->insert('tbl_tafels', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}

	public function updateTable($id, $data)
	{
		$this->db->where('tafelid', $id);
		$this->db->update('tbl_tafels', $data);
	}
	
	public function delTable($id)
	{
		$this->db->where('tafelid', $id);
		$this->db->delete('tbl_tafels');
	}
}