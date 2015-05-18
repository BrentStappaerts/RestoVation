<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Resto_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
	}

	function getAll() {
		$condition = "id =" . "'" . $this->session->userdata('logged_in')['id']. "'";

		$this->db->from('tbl_restaurant');
        $this->db->where($condition);
        $query = $this->db->get();

        return $query->result_array();
	}
	
	function getResto($id) {
		$this->db->select('resto_id, restaurantnaam, adres, gemeente, postcode, telefoonnummer, id');
		$this->db->where('resto_id', $id);
		$query = $this->db->get('tbl_restaurant');

		return $query->row_array();
	}

	
	public function insertResto($data)
	{
		$this->db->insert('tbl_restaurant', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}

	public function updateResto($id, $data)
	{
		$this->db->where('resto_id', $id);
		$this->db->update('tbl_restaurant', $data);
	}
	
	public function delResto($id)
	{
		$this->db->where('resto_id', $id);
		$this->db->delete('tbl_restaurant');
	}
}