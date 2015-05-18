<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('menu_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['menus'] = $this->menu_model->getAll();
		$this->data['title'] = 'Menu Management';
		$this->data['message'] = $this->session->flashdata('message');
		
		$this->load->view('menu/menu_manage', $this->data);
	}
	
	function addDish() {
		$this->data['title'] = 'Gerecht toevoegen';

		//validate form input
		$this->form_validation->set_rules('gerechtnaam', 'Naam gerecht', 'required');
		$this->form_validation->set_rules('gerechttype', 'Type gerecht', 'required');
        $this->form_validation->set_rules('gerechtprijs', 'Prijs gerecht', 'required');

		if ($this->form_validation->run() == true)
		{		
			$data = array(
				'gerechtnaam'		=> $this->input->post('gerechtnaam'),
                'gerechttype'		=> $this->input->post('gerechttype'),
				'gerechtprijs' 		=> $this->input->post('gerechtprijs')
			);
			
			$this->menu_model->insertDish($data);
			
			$this->session->set_flashdata('message', "<p>Gerecht toegevoegd.</p>");
			
			redirect(base_url().'index.php/menu/adddish');
		}else{
			//display the add product form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
		    
            $this->data['name'] = array(
				'name'  	=> 'gerechtnaam',
				'id'    	=> 'gerechtnaam',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('gerechtnaam'),
			);
            
			$this->data['type'] = array(
				'name'  	=> 'gerechttype',
				'id'    	=> 'gerechttype',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('gerechttype'),
			);
			$this->data['price'] = array(
				'name'  	=> 'gerechtprijs',
				'id'    	=> 'gerechtprijs',
				'type'  	=> 'text',
				'value' 	=> $this->form_validation->set_value('gerechtprijs'),
			);
			$this->load->view('menu/menu_add', $this->data);
		}
	}

	function editDish($id) {
		$menu = $this->menu_model->getMenu($id);

		$this->data['title'] = 'Bewerk gerecht';

        $this->form_validation->set_rules('gerechtnaam', 'Naam gerecht', 'required');
		$this->form_validation->set_rules('gerechttype', 'Type gerecht', 'required');
        $this->form_validation->set_rules('gerechtprijs', 'Prijs gerecht', 'required');
	
		if (isset($_POST) && !empty($_POST))
		{		
			$data = array(
				'gerechtnaam'		=> $this->input->post('gerechtnaam'),
                'gerechttype'		=> $this->input->post('gerechttype'),
				'gerechtprijs' 		=> $this->input->post('gerechtprijs')
			);

			if ($this->form_validation->run() === true)
			{
				$this->menu_model->updateDish($id, $data);

				$this->session->set_flashdata('message', "<p>Menu aangepast</p>");
				
				redirect(base_url().'index.php/menu/index');
			}			
		}

		$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
		
		$this->data['menu'] = $menu;
		
		$this->data['name'] = array(
			'name'  	=> 'gerechtnaam',
			'id'    	=> 'gerechtnaam',
			'value' 	=> $this->form_validation->set_value('gerechtnaam', $menu['gerechtnaam']),
		);

		$this->data['type'] = array(
			'name'  	=> 'gerechttype',
			'id'    	=> 'gerechttype',
			'type'  	=> 'gerechttype',
			'value' 	=> $this->form_validation->set_value('gerechttype', $menu['gerechttype']),
		);
        $this->data['price'] = array(
			'name'  	=> 'gerechtprijs',
			'id'    	=> 'gerechtprijs',
			'type'  	=> 'text',
			'value' 	=> $this->form_validation->set_value('gerechtprijs', $menu['gerechtprijs']),
		);

		$this->load->view('menu/menu_edit', $this->data);
	}	
	
	function deleteDish($id) {
		$this->menu_model->delDish($id);
		
		$this->session->set_flashdata('message', '<p>Gerecht is verwijderd</p>');
		
		redirect('menu/index');
	}
}