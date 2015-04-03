<?php

Class Login_Database extends CI_Model {


// Insert registration data in database
public function registration_insert($data) {

// Query to check whether username already exist or not
$condition = "gebruikersnaam =" . "'" . $data['gebruikersnaam'] . "'";

$this->db->select('*');
$this->db->from('tbl_gebruikers');
$this->db->where($condition);
$this->db->limit(1);

$query = $this->db->get();

if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('tbl_gebruikers', $data);
if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}

// Read data using username and password
public function login($data) {

$condition = "gebruikersnaam =" . "'" . $data['username'] . "' AND " . "passwoord =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('tbl_gebruikers');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
}

// Read data from database to show data in admin page
public function read_user_information($sess_array) {

$condition = "gebruikersnaam =" . "'" . $sess_array['username'] . "'";
$this->db->select('*');
$this->db->from('tbl_gebruikers');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

}

?>