<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class reservatie_toevoegen_controller extends CI_Controller {
    
function __Construct(){
parent::__Construct ();
   $this->load->database(); // load database
   // Load session library
   $this->load->library('session');
   $this->load->model('reservatie_toevoegen_model'); // load model
}
    
function voeg_toe()
{
    // Including Validation Library
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    // Validating Naam Field
    $this->form_validation->set_rules('db_klantnaam', 'Naam klant', 'required|min_length[1]|max_length[50]');
   
    $this->form_validation->set_rules('db_telefoonnummer', 'telefoonnummer klant', 'required|numeric');
    
    $this->form_validation->set_rules('db_datum', 'Datum', 'required|min_length[1]|max_length[50]');
       
    $this->form_validation->set_rules('db_uur', 'Uur', 'required|min_length[1]|max_length[50]';

     $this->form_validation->set_rules('db_aantal', 'Aantal personen', 'required|numeric');;
    
if ($this->form_validation->run() == FALSE)
{
    $this->load->view('login');
}
else
{


// Setting Values For Tabel Columns
    $data = array(
    'naam klant' => $this->input->post('db_klantnaam'),
    'telefoonnummer' => $this->input->post('db_telefoonnummer'),
    'datum' => $this->input->post('db_datum'),
    'uur' => $this->input->post('db_uur'),
    'aantal' => $this->input->post('db_aantal'),
    'id'=>$this->session->userdata('logged_in')['id']
     );
    // Transfering Data To Model
    $this->reservatie_toevoegen_model->form_insert($data);
    // Loading View
    $this->load->view('login');
}
}
?>