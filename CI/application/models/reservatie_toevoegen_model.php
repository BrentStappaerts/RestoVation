<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class reservatie_toevoegen_model extends CI_Model{
    function __construct() {

        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');

    parent::__construct();
    }
    
    function form_insert($data){
    // Inserting in Table(menu) of Database(restovation)
        $this->db->insert('tbl_reservatie', $data);
    }


    function getAll() {

        $this->db->select('*');
        $this->db->from('tbl_reservatie');
        $query = $this->db->get();

        return $query->result_array();
    }

}
?>