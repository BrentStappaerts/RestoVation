<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class restaurant_toevoegen_controller extends CI_Controller {
    
function __Construct(){
parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('restaurant_toevoegen_model'); // load model
$this->load->model('login_database'); //voor sessiedata
}
    
function voeg_toe()
{
    // Including Validation Library
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    // Validating Naam Field
$this->form_validation->set_rules('db_restaurantnaam', 'Naam restaurant', 'required|min_length[1]|max_length[50]');
   
    $this->form_validation->set_rules('db_adres', 'Adres', 'required|min_length[1]|max_length[50]');
    
    $this->form_validation->set_rules('db_gemeente', 'Gemeente', 'required|min_length[1]|max_length[50]');
       
    $this->form_validation->set_rules('db_postcode', 'Postcode', 'required|numeric');

     $this->form_validation->set_rules('db_telefoonnummer', 'telefoonnummer', 'required|numeric');;
    
if ($this->form_validation->run() == FALSE)
{
    $this->load->view('restaurant_toevoegen_view');
}
else
{


// Setting Values For Tabel Columns
    $data = array(
    'restaurantnaam' => $this->input->post('db_restaurantnaam'),
    'adres' => $this->input->post('db_adres'),
    'gemeente' => $this->input->post('db_gemeente'),
    'postcode' => $this->input->post('db_postcode'),
    'telefoonnummer' => $this->input->post('db_telefoonnummer'),
    'id'=>$_SESSION['id']
     );
    // Transfering Data To Model
    $this->restaurant_toevoegen_model->form_insert($data);
    // Loading View
    $this->load->view('restaurant_toevoegen_view');
}
}

}
?>