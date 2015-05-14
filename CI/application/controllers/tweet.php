<?php
class tweet extends CI_Controller 
{
	public function index()
	{
	echo "tweet/index";
	}


	public function add()
	{

//model klassen laden
$this->load->model("Tweet_model", '', true);


	// als er een post request is, 
if($this->input->server('REQUEST_METHOD') == 'POST')
{
//input uit form lezen
$text= $this->input->post('tweet');



//maak niew model aan
$t= new Tweet_model();
$t->text = $text;


$this->Tweet_model->save($t);


}
		
	$data=[

"hello"=>"world",
"tweets"=> $this->Tweet_model->get_all()


	];	






	
	$this->load->view("tweet/add");

	}

}

?>