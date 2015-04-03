<?php


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
$this->form_validation->set_rules('surname', 'Surname', 'trim|required|xss_clean'); //-

$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');



if ($this->form_validation->run() == FALSE) {
$this->load->view('registration_form');
} else {
$data = array(
'naam' => $this->input->post('name'),
'voornaam' => $this->input->post('surname'), //-
'gebruikersnaam' => $this->input->post('username'),
'email' => $this->input->post('email_value'),
'passwoord' => $this->input->post('password')
);

$result = $this->login_database->registration_insert($data) ;
if ($result == TRUE) {
$data['message_display'] = 'Registration Successfully !';
$this->load->view('login_form', $data);
} else {
$data['message_display'] = 'Username already exist!';
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
'password' =>$result[0]->passwoord
);
$this->load->view('admin_page', $data);
}
}else{
$data = array(
'error_message' => 'Invalid Username or Password'
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
$data['message_display'] = 'Successfully Logout';
$this->load->view('login_form', $data);
}
}

?>