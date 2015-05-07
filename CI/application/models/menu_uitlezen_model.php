<?php

class menu_uitlezen_model extends CI_Model{
function __construct() {
parent::__construct();
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