<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class Acceuil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

        $this->load->database();
        $this->load->model('Publier_model', 'publierManager');
        $this->load->model('Auth_model', 'authManager');

        $this->load->helper(array('reponses', 'questions'));
       
	}
    
    public function index()
    {
    	$this->load->view('templates/header');
        $this->load->view('Acceuil/acceuil');
        //$this->load->view('templates/footer');
    }

    public function prof() {
        $this->load->view('templates/header');
        $questions_posted = $this->publierManager->getQuestions($this->session->userdata('id_prof'));
        $data['etablissementProf'] = $this->authManager->getEtablissement($this->session->userdata('email'))->etablissementText;
        $data['question_poster'] = $questions_posted;
        $this->load->view('Acceuil/Acceuil_prof', $data);
        $this->load->view('templates/footer');
    }
}