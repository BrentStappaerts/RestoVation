<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class restaurant_toevoegen_model extends CI_Model{
    function __construct() {
    parent::__construct();
    }
    
    function form_insert($data){
    // Inserting in Table(menu) of Database(restovation)
        $this->db->insert('tbl_restaurant', $data);
    }
}
?>