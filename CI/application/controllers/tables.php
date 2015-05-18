<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tables extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('table_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['tables'] = $this->table_model->getAll();
		$this->data['title'] = 'Tafel Management';
		$this->data['message'] = $this->session->flashdata('message');
		
		$this->load->view('table/table_manage', $this->data);
	}
	
	function addTable() {
		$this->data['title'] = 'Tafel toevoegen';

		//validate form input
		$this->form_validation->set_rules('tafelnummer', 'Nummer tafel', 'required');
		$this->form_validation->set_rules('aantal', 'Aantal', 'required');

		if ($this->form_validation->run() == true)
		{		
			$data = array(
				'tafelnr'		=> $this->input->post('tafelnummer'),
				'aantal' 		=> $this->input->post('aantal')
			);
			
			$this->table_model->insertTable($data);
			
			$this->session->set_flashdata('message', "<p>Tafel toegevoegd.</p>");
			
			redirect(base_url().'index.php/tables/addtable');
		}else{
			//display the add product form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
		
			$this->data['number'] = array(
				'name'  	=> 'tafelnummer',
				'id'    	=> 'tafelnummer',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('tafelnummer'),
			);
			$this->data['amount'] = array(
				'name'  	=> 'aantal',
				'id'    	=> 'aantal',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('aantal'),
			);
			$this->load->view('table/table_add', $this->data);
		}
	}

	function editTable($id) {
		$table = $this->table_model->getTable($id);

		$this->data['title'] = 'Bewerk tafel';

        $this->form_validation->set_rules('tafelnummer', 'Nummer tafel', 'required');
		$this->form_validation->set_rules('aantal', 'Aantal personen', 'required');
	
		if (isset($_POST) && !empty($_POST))
		{		
			$data = array(
				'tafelnr'		=> $this->input->post('tafelnummer'),
				'aantal' 		=> $this->input->post('aantal')
			);

			if ($this->form_validation->run() === true)
			{
				$this->table_model->updateTable($id, $data);

				$this->session->set_flashdata('message', "<p>Tafel aangepast.</p>");
				
				redirect(base_url().'index.php/tables/index');
			}			
		}

		$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
		
		$this->data['table'] = $table;
		
		$this->data['number'] = array(
			'name'  	=> 'tafelnummer',
			'id'    	=> 'tafelnummer',
			'value' 	=> $this->form_validation->set_value('tafelnummer', $table['tafelnr']),
		);

		$this->data['amount'] = array(
			'name'  	=> 'aantal',
			'id'    	=> 'aantal',
			'type'  	=> 'text',
			'value' 	=> $this->form_validation->set_value('aantal', $table['aantal']),
		);

		$this->load->view('table/table_edit', $this->data);
	}	
	
	function deleteTable($id) {
		$this->table_model->delTable($id);
		
		$this->session->set_flashdata('message', '<p>Tafel werd verwijderd.</p>');
		
		redirect('tables/index');
	}
}