<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


Class User_Authentication extends CI_Controller {

public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('form');

// Load form validation library
$this->load->library('form_validation');

// Load session library
$this->load->library('session');

// Load database
$this->load->model('login_database');



}


// Show login page
public function user_login_show() {
$this->load->view('login_form');
}

// Show registration page
public function user_registration_show() {
$this->load->view('registration_form');
}

// Validate and store registration data in database

public function new_user_registration() {
	$this->load->helper('security');

// Check validation for user input in SignUp form
$this->form_validation->set_rules('voornaam', 'voornaam', 'trim|required|xss_clean'); //-
$this->form_validation->set_rules('naam', 'naam', 'trim|required|xss_clean');
$this->form_validation->set_rules('gebruikersnaam', 'gebruikersnaam', 'trim|required|xss_clean');
$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
$this->form_validation->set_rules('passwoord', 'Passwoord', 'trim|required|xss_clean');




if ($this->form_validation->run() == FALSE) {
$this->load->view('registration_form');
} else {
$data = array(
'naam' => $this->input->post('naam'),
'voornaam' => $this->input->post('voornaam'), //-
'gebruikersnaam' => $this->input->post('gebruikersnaam'),
'email' => $this->input->post('email_value'),


//passwoord beveiligen met bcrypt en standaard option van 10 
'passwoord' => password_hash($this->input->post('passwoord'), PASSWORD_BCRYPT)
);

$result = $this->login_database->registration_insert($data) ;
if ($result == TRUE) {
$data['message_display'] = 'U werd succesvol geregistreerd!';
$this->load->view('login_form', $data);
} else {
$data['message_display'] = 'Gebruikersnaam bestaat al!';
$this->load->view('registration_form', $data);
}
}

}

// Check for user login process
public function user_login_process() {
	$this->load->helper('security');

$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

if ($this->form_validation->run() == FALSE) {
$this->load->view('login_form');
} else {
$data = array(
'username' => $this->input->post('username'),
'password' => $this->input->post('password')
);

$result = $this->login_database->login($data);
if($result == TRUE){
$sess_array = array(
'username' => $this->input->post('username')
);

// Add user data in session

$result = $this->login_database->read_user_information($sess_array);
if($result != false){
$data = array(
'name' =>$result[0]->naam,
'surname' =>$result[0]->voornaam,
'username' =>$result[0]->gebruikersnaam,
'email' =>$result[0]->email,
'password' =>$result[0]->passwoord,
'id' =>$result[0]->id
);


$this->session->set_userdata('logged_in', $data);
$this->load->view('admin_page', $data);
}
}else{
$data = array(
'error_message' => 'Ongeldige gebruikersnaam of wachtwoord.'
);
$this->load->view('login_form', $data);
}
}
}

// Logout from admin page
public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'U werd succesvol uitgelogd.';
$this->load->view('login_form', $data);
}
}

?>