<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Ajout extends CI_Controller {

    const PROF_PRIVILEGES = 2;

    //--------------------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();        

        $this->load->database();
        $this->load->model('Ajout_model', 'ajoutManager');
        
    }

    //--------------------------------------------------------------------------------------

    public function index()
    {
        $this->load->view('templates/header.php');
        $this->load->view('Ajout/choix_ajout_view');
        $this->load->view('templates/footer.php');
    }

    //--------------------------------------------------------------------------------------

    public function professeur()
    {    	        
        $this->load->view('templates/header.php');
    	
        $data['matieres'] = $this->ajoutManager->getAllSubject();
        $test = $this->input->subj;        

        if($this->form_validation->run()) {

        }
        
        $this->load->view('Ajout/professeur_view', $data);        
        
        $this->load->view('templates/footer.php');
    }

    //--------------------------------------------------------------------------------------

    public function matiere()
    {
        $this->load->view('templates/header.php');
        
        $data['matieres'] = $this->ajoutManager->getAllSubject();
        $this->load->view('Ajout/matiere_view', $data);
        
        $this->load->view('templates/footer.php');
    }
}