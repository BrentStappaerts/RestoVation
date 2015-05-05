<?php

class menu_database extends CI_Model{
function __construct() {
parent::__construct();
}
    
function form_insert($data){
// Inserting in Table(menu) of Database(restovation)
$this->db->insert('tbl_menu', $data);
}

function get_menu(){
$this->db->select("gerechtnaam, gerechttype, gerechtprijs"); 
$this->db->from('tbl_menu');
$query = $this->db->get();
return $query->result();
 }
    
}
?>