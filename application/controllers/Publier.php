<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Publier extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('Publier_model', 'publierManager');

        $this->load->helper(array('reponses', 'questions'));
    }

    //---------------------------------------------------------------------------------

    public function question()
    {
        $this->load->view('templates/header');
        $this->form_validation->set_rules('q', '"Ne doit pas etre vide"', 'required');
        $this->form_validation->set_rules('trueq', '"Ne doit pas etre vide"', 'required');
        if ($this->input->post('soumettre') != null) {
            $data['planif_q'] = $this->input->post('planif');
        }
        if ($this->form_validation->run()) {

            if ($this->input->post('reponses') !== null && $this->input->post('soumettre') != null) {
                $data_questions = [
                    'qestionText' => $this->input->post('q', TRUE),
                    'dateQestion' => current_db_time(),
                    'ProfesseurEt' => $this->session->userdata('id_prof'),
                    'planification' => $this->input->post('planif')
                ];
                $add_q_success = $this->publierManager->add_question($data_questions);
                $data_all_ans = [];
                $data_ans = [];
                foreach ($this->input->post('reponses') as $reponse) {
                    $data_ans[] = [
                        'reponseText' => $reponse,
                        'dateReponse' => current_db_time(),
                        'isTrue' => $this->input->post('trueq')+1,
                        'questionEt' => $this->publierManager->count('question'),
                    ];
                }
                $data_all_ans = $data_ans;
                $add_a_success = $this->publierManager->add_reponses($data_all_ans);
            }
        }
        //$data['questions'] = $this->publierManager->getQuestions($this->session->userdata('id_prof'));
        $data['reponses'] = $this->publierManager->getReponses($this->session->userdata('id_prof'));

        //$this->publierManager->add_question($data_questions);
        if (isset($add_q_ans) && isset($add_a_success)) {
            $data['add_q_ans'] = $add_q_success;
            $data['add_a_ans'] = $add_a_success;
            var_dump($add_q_success);
        }
        if (isset($data))
            $this->load->view('Publier/form', $data);
        else
            $this->load->view('Publier/form');
    }
    //---------------------------------------------------------------------------------
    public function cours()
    {
        $this->load->view('templates/header');
        $this->load->view('publier/cours');
    }
}