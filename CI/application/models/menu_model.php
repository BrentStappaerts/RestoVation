<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class menu_model extends CI_Model{
function __construct() {
parent::__construct();
    
}
 
function formInsert($data){
    // Inserting in Table(menu) of Database(restovation)
    $this->db->insert('tbl_menu', $data);
}    
    
function getAllRecords()
{
    $this->load->database();
    $q = $this->db->get("tbl_menu");
    if($q->num_rows() > 0)
    {
        return $q->result();
    }
    return array();
}
 
}
?>