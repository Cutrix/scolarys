<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Publier extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();	

		$this->load->database();
        $this->load->model('Publier_model', 'publierManager');
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

		$id_prof_c = $this->session->userdata('id_prof') ?? 0;

		if ($this->form_validation->run()) {			
			$questions = array(
				array(
					'qestionText' => $this->input->post('q1'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),
				array(
					'qestionText' => $this->input->post('q2'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),
				array(
					'qestionText' => $this->input->post('q3'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q4'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q5'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q6'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q7'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q8'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q9'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q10'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q11'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q12'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q13'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q14'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),array(
					'qestionText' => $this->input->post('q15'),
					'dateQestion' => date('Y-m-d H:m:i'),
					'ProfesseurEt' => $id_prof_c
				),				

			);


			//Insertion des questions en bd
			
			if($this->publierManager->add_question($questions)){               
				$this->session->set_userdata('backQ', $questions);
				redirect('publier/reponses/');
			}
		} 
		
		$this->load->view('Propositions/form');

		$this->load->view('templates/footer');
	}

	public function reponses()
	{
		var_dump($this->session->userdata());
	}

}
