<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class restaurant_toevoegen_model extends CI_Model{
    function __construct() {

        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');

    parent::__construct();
    }
    
    function form_insert($data){
    // Inserting in Table(menu) of Database(restovation)
        $this->db->insert('tbl_restaurant', $data);
    }


    function getAll() {
//nog filteren op restaurant id
$condition = "id =" . "'" . $this->session->userdata('logged_in')['id']. "'";



        $this->db->select('resto_id, restaurantnaam, adres, gemeente, postcode, telefoonnummer');
        $this->db->from('tbl_restaurant');
        $this->db->where($condition);
        $query = $this->db->get();

        return $query->result_array();
    }



}
?>