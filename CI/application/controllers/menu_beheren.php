<?php
class menu_beheren extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->database();
$this->load->model('menu_database');
}

function add_dish()
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
$this->load->view('menu_page');
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
$this->menu_database->form_insert($data);
// Loading View
$this->load->view('menu_page');
}
}
    
public function read_menu() {
$this->data['posts'] = $this->menu_database->get_dishes(); // calling Post model method getPosts()
$this->load->view('menu_page', $this->data); // load the view file , we are passing $data array to view file
 }
   
    <?php foreach($query as $post):?>
     <ul>
         <li><?php echo $post->gerechtnaam; echo $post->gerechttype; echo $post->gerechtprijs;?></li>
      </ul>     
     <?php endforeach;?> 
}
?>