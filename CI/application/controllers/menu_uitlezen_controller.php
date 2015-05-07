<?php
class menu_uitlezen_controller extends CI_Controller {
    
function __Construct(){
parent::__Construct ();
   
}
    
function all_records()
{
    $this->load->model("menu_uitlezen_model");
    $data['records'] = $this->menu_uitlezen_model->getAllRecords();
    $this->load->view("menu_uitlezen_view", $data);
}
}
?>