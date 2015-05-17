<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class menu extends CI_Controller {
    
function __Construct(){
parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('menu_model'); // load model
}

function index()
{
    $this->load->model("menu_model");
    $data['records'] = $this->menu_model->getAllRecords();
    $this->load->view("menu/menu_read", $data);
}

function addDish()
{
    // Including Validation Library
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    // Validating Naam Field
    $this->form_validation->set_rules('db_naam_gerecht', 'Naam gerecht', 'required|min_length[1]|max_length[50]');
    // Validating Prijs Field
    $this->form_validation->set_rules('db_prijs', 'Prijs gerecht', 'required|integer');
    // Validating Type Field
    $this->form_validation->set_rules('db_type_gerecht', 'Type gerecht', 'required|min_length[1]|max_length[50]');
    
if ($this->form_validation->run() == FALSE)
{
    $this->load->view('menu/menu_insert');
}
else
{
// Setting Values For Tabel Columns
    $data = array(
    'gerechtnaam' => $this->input->post('db_naam_gerecht'),
    'gerechttype' => $this->input->post('db_type_gerecht'),
    'gerechtprijs' => $this->input->post('db_prijs')
    );
    // Transfering Data To Model
    $this->menu_model->formInsert($data);
    // Loading View
    $this->load->view('menu/menu_insert');
}
}    
}
?>