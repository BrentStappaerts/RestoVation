<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('resto_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['restos'] = $this->resto_model->getAll();
		$this->data['title'] = 'Restaurant Management';
		$this->data['message'] = $this->session->flashdata('message');
		
		$this->load->view('resto/resto_manage', $this->data);
	}
	
	function addResto() {
		$this->data['title'] = 'Restaurant toevoegen';

		//validate form input
		$this->form_validation->set_rules('restaurantnaam', 'Naam restaurant', 'required');
		$this->form_validation->set_rules('adres', 'Adres', 'required');
        $this->form_validation->set_rules('gemeente', 'Gemeente', 'required');
        $this->form_validation->set_rules('postcode', 'Postcode', 'required');
        $this->form_validation->set_rules('telefoonnummer', 'Telefoonnummer', 'required');

		if ($this->form_validation->run() == true)
		{		
			$data = array(
				'restaurantnaam'=> $this->input->post('restaurantnaam'),
                'adres'		    => $this->input->post('adres'),
                'gemeente'		=> $this->input->post('gemeente'),
                'postcode'		=> $this->input->post('postcode'),
				'telefoonnummer'=> $this->input->post('telefoonnummer'),
				'id'=>$this->session->userdata('logged_in')['id']
			);
			
			$this->resto_model->insertResto($data);
			
			$this->session->set_flashdata('message', "<p>Restaurant toegevoegd.</p>");
			
			redirect(base_url().'index.php/restos/addresto');
		}else{
			
			$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
		
			$this->data['name'] = array(
				'name'  	=> 'restaurantnaam',
				'id'    	=> 'restaurantnaam',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('restaurantnaam'),
			);
			$this->data['adress'] = array(
				'name'  	=> 'adres',
				'id'    	=> 'adres',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('adres'),
			);
            $this->data['city'] = array(
				'name'  	=> 'gemeente',
				'id'    	=> 'gemeente',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('gemeente'),
			);
            $this->data['area'] = array(
				'name'  	=> 'postcode',
				'id'    	=> 'postcode',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('postcode'),
			);
            $this->data['telephone'] = array(
				'name'  	=> 'telefoonnummer',
				'id'    	=> 'telefoonnummer',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('telefoonnummer'),
			);
			$this->load->view('resto/resto_add', $this->data);
		}
	}

	function editResto($id) {
		$resto = $this->resto_model->getResto($id);

		$this->data['title'] = 'Bewerk restaurant';

        $this->form_validation->set_rules('restaurantnaam', 'Naam restaurant', 'required');
		$this->form_validation->set_rules('adres', 'Adres', 'required');
        $this->form_validation->set_rules('gemeente', 'Gemeente', 'required');
        $this->form_validation->set_rules('postcode', 'Postcode', 'required');
        $this->form_validation->set_rules('telefoonnummer', 'Telefoonnummer', 'required');
	
		if (isset($_POST) && !empty($_POST))
		{		
			$data = array(
				'restaurantnaam'=> $this->input->post('restaurantnaam'),
                'adres'		    => $this->input->post('adres'),
                'gemeente'		=> $this->input->post('gemeente'),
                'postcode'		=> $this->input->post('postcode'),
				'telefoonnummer'=> $this->input->post('telefoonnummer')
			);

			if ($this->form_validation->run() === true)
			{
				$this->resto_model->updateResto($id, $data);

				$this->session->set_flashdata('message', "<p>Restaurant aangepast.</p>");
				
				redirect(base_url().'index.php/restos/index');
			}			
		}

		$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
		
		$this->data['resto'] = $resto;
		
		$this->data['name'] = array(
			'name'  	=> 'restaurantnaam',
			'id'    	=> 'restaurantnaam',
			'value' 	=> $this->form_validation->set_value('restaurantnaam', $resto['restaurantnaam']),
		);

		$this->data['adress'] = array(
			'name'  	=> 'adres',
			'id'    	=> 'adres',
			'type'  	=> 'text',
			'value' 	=> $this->form_validation->set_value('adres', $resto['adres']),
		);
        
        $this->data['city'] = array(
			'name'  	=> 'gemeente',
			'id'    	=> 'gemeente',
			'value' 	=> $this->form_validation->set_value('gemeente', $resto['gemeente']),
		);
        
        $this->data['area'] = array(
			'name'  	=> 'postcode',
			'id'    	=> 'postcode',
			'value' 	=> $this->form_validation->set_value('postcode', $resto['postcode']),
		);
        
        $this->data['telephone'] = array(
			'name'  	=> 'telefoonnummer',
			'id'    	=> 'telefoonnummer',
			'value' 	=> $this->form_validation->set_value('telefoonnummer', $resto['telefoonnummer']),
		);

		$this->load->view('resto/resto_edit', $this->data);
	}	
	
	function deleteResto($id) {
		$this->resto_model->delResto($id);
		
		$this->session->set_flashdata('message', '<p>Restaurant werd verwijderd.</p>');
		
		redirect('restos/index');
	}
}