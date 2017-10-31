<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Publier extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();	

		$this->load->database();
        $this->load->model('Publier_model', 'publierManager');

        $this->load->helper('reponses');
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
				$ids = array_reverse($this->publierManager->getIds());
				$this->session->set_userdata('ids', $ids);
				redirect('publier/reponses/');
			}
		} 
		
		$this->load->view('Publier/form');

		$this->load->view('templates/footer');
	}

	public function reponses()
	{
		$this->load->view('templates/header');
		$data['qB'] = $this->session->userdata('backQ') ?? '';

		//var_dump(isTrue($this->input->post('r1'), $this->input->post($this->input->post('q1'))));			

		$this->form_validation->set_rules('r1', '"Reponse 1"', 'required');
		/*$this->form_validation->set_rules('r2', '"Reponse 1"', 'required');
		$this->form_validation->set_rules('r3', '"Reponse 1"', 'required');
		$this->form_validation->set_rules('r4', '"Reponse 1"', 'required');
		$this->form_validation->set_rules('r5', '"Reponse 1"', 'required');
		$this->form_validation->set_rules('r6', '"Reponse 1"', 'required');*/

		$ids = (($this->session->userdata('ids')) != null) ? $this->session->userdata('ids') : null;

		if ($this->form_validation->run()) {

			if ($this->session->userdata('ids') !== null) {

			$answers = array(
				array(
					'reponseText' => $this->input->post('r1'),
					'questionEt' => (int) $ids[0]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r1'), $this->input->post($this->input->post('q1')))
				),

				array(
					'reponseText' => $this->input->post('r2'),
					'questionEt' => (int) $ids[1]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r2'), $this->input->post($this->input->post('q1')))
				),

				array(
					'reponseText' => $this->input->post('r3'),
					'questionEt' => (int) $ids[3]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r3'), $this->input->post($this->input->post('q1')))
				),

				array(
					'reponseText' => $this->input->post('r4'),
					'questionEt' => (int) $ids[4]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r4'), $this->input->post($this->input->post('q2')))
				),

				array(
					'reponseText' => $this->input->post('r5'),
					'questionEt' => (int) $ids[5]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r5'), $this->input->post($this->input->post('q2')))
				),

				array(
					'reponseText' => $this->input->post('r6'),
					'questionEt' => (int) $ids[6]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r6'), $this->input->post($this->input->post('q2')))
				),
				array(
					'reponseText' => $this->input->post('r7'),
					'questionEt' => (int) $ids[7]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r7'), $this->input->post($this->input->post('q3')))
				),
				array(
					'reponseText' => $this->input->post('r8'),
					'questionEt' => (int) $ids[8]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r8'), $this->input->post($this->input->post('q3')))
				),
				array(
					'reponseText' => $this->input->post('r9'),
					'questionEt' => (int) $ids[9]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r9'), $this->input->post($this->input->post('q3')))
				),
				array(
					'reponseText' => $this->input->post('r10'),
					'questionEt' => (int) $ids[10]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r10'), $this->input->post($this->input->post('q4')))
				),
				array(
					'reponseText' => $this->input->post('r11'),
					'questionEt' => (int) $ids[11]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r11'), $this->input->post($this->input->post('q4')))
				),
				array(
					'reponseText' => $this->input->post('r12'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r12'), $this->input->post($this->input->post('q4')))
				),

				array(
					'reponseText' => $this->input->post('r13'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r13'), $this->input->post($this->input->post('q5')))
				),

				array(
					'reponseText' => $this->input->post('r14'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r14'), $this->input->post($this->input->post('q5')))
				),

				array(
					'reponseText' => $this->input->post('r15'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r15'), $this->input->post($this->input->post('q5')))
				),
				array(
					'reponseText' => $this->input->post('r16'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r16'), $this->input->post($this->input->post('q6')))
				),
				array(
					'reponseText' => $this->input->post('r17'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r17'), $this->input->post($this->input->post('q6')))
				),
				array(
					'reponseText' => $this->input->post('r18'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r18'), $this->input->post($this->input->post('q6')))
				),
				array(
					'reponseText' => $this->input->post('r19'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r19'), $this->input->post($this->input->post('q7')))
				),
				array(
					'reponseText' => $this->input->post('r20'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r12'), $this->input->post($this->input->post('q7')))
				),
				array(
					'reponseText' => $this->input->post('r21'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r21'), $this->input->post($this->input->post('q7')))
				),
				array(
					'reponseText' => $this->input->post('r22'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r22'), $this->input->post($this->input->post('q8')))
				),
				array(
					'reponseText' => $this->input->post('r23'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r23'), $this->input->post($this->input->post('q8')))
				),
				array(
					'reponseText' => $this->input->post('r24'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r24'), $this->input->post($this->input->post('q8')))
				),
				array(
					'reponseText' => $this->input->post('r25'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r25'), $this->input->post($this->input->post('q9')))
				),
				array(
					'reponseText' => $this->input->post('r26'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r26'), $this->input->post($this->input->post('q9')))
				),
				array(
					'reponseText' => $this->input->post('r27'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r27'), $this->input->post($this->input->post('q9')))
				),
				array(
					'reponseText' => $this->input->post('r28'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r28'), $this->input->post($this->input->post('q10')))
				),
				array(
					'reponseText' => $this->input->post('r29'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r29'), $this->input->post($this->input->post('q10')))
				),
				array(
					'reponseText' => $this->input->post('r30'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r30'), $this->input->post($this->input->post('q10')))
				),
				array(
					'reponseText' => $this->input->post('r31'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r31'), $this->input->post($this->input->post('q11')))
				),
				array(
					'reponseText' => $this->input->post('r32'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r32'), $this->input->post($this->input->post('q11')))
				),
				array(
					'reponseText' => $this->input->post('r33'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r33'), $this->input->post($this->input->post('q11')))
				),
				array(
					'reponseText' => $this->input->post('r34'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r34'), $this->input->post($this->input->post('q12')))
				),
				array(
					'reponseText' => $this->input->post('r35'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r35'), $this->input->post($this->input->post('q12')))
				),
				array(
					'reponseText' => $this->input->post('r36'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r36'), $this->input->post($this->input->post('q12')))
				),

				array(
					'reponseText' => $this->input->post('r37'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r37'), $this->input->post($this->input->post('q13')))
				),
				array(
					'reponseText' => $this->input->post('r38'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r38'), $this->input->post($this->input->post('q13')))
				),
				array(
					'reponseText' => $this->input->post('r39'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r39'), $this->input->post($this->input->post('q13')))
				),
				array(
					'reponseText' => $this->input->post('r40'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r40'), $this->input->post($this->input->post('q14')))
				),
				array(
					'reponseText' => $this->input->post('r41'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r41'), $this->input->post($this->input->post('q14')))
				),
				array(
					'reponseText' => $this->input->post('r42'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r42'), $this->input->post($this->input->post('q14')))
				),
				array(
					'reponseText' => $this->input->post('r43'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r43'), $this->input->post($this->input->post('q15')))
				),
				array(
					'reponseText' => $this->input->post('r44'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r44'), $this->input->post($this->input->post('q15')))
				),
				array(
					'reponseText' => $this->input->post('r45'),
					'questionEt' => (int) $ids[12]->QuestionID,
					'isTrue' => (int) isTrue($this->input->post('r45'), $this->input->post($this->input->post('q15')))
				)

			);
			
			if ($this->publierManager->add_answers($answers)) {
				echo 'string';
			}
			}
		}
		//var_dump($this->session->userdata());
		$this->load->view('Publier/form_reponse', $data);
		$this->load->view('templates/footer');
	}

}
