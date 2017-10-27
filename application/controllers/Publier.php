<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Publier extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();	
	}

	public function question()
	{				
		$this->load->view('templates/header');

		$this->form_validation->set_rules('q1', '"question1"', 'required');
		$this->form_validation->set_rules('q2', '"question2"', 'required');
		$this->form_validation->set_rules('q3', '"question3"', 'required');
		$this->form_validation->set_rules('q4', '"question4"', 'required');
		$this->form_validation->set_rules('q5', '"question5"', 'required');
		$this->form_validation->set_rules('q6', '"question6"', 'required');
		$this->form_validation->set_rules('q7', '"question7"', 'required');
		$this->form_validation->set_rules('q8', '"question8"', 'required');
		$this->form_validation->set_rules('q9', '"question9"', 'required');
		$this->form_validation->set_rules('q10', '"question10"', 'required');
		$this->form_validation->set_rules('q11', '"question11"', 'required');
		$this->form_validation->set_rules('q12', '"question12"', 'required');
		$this->form_validation->set_rules('q13', '"question13"', 'required');
		$this->form_validation->set_rules('q14', '"question14"', 'required');
		$this->form_validation->set_rules('q15', '"question15"', 'required');

		if ($this->form_validation->run()) {
			$questions = array()
		}
		
		$this->load->view('Propositions/form');

		$this->load->view('templates/footer');
	}

}
