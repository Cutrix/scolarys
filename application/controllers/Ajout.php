<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Ajout extends CI_Controller {
  

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

        //Verification du formulaire 
        $this->form_validation->set_rules('email', '"email"', 'required');
        $this->form_validation->set_rules('pwd', '"prenom"', 'required');

        //Envoi du formulaire 
        if($this->form_validation->run()) {
            $email = $this->input->post('email');
            $pwd_sauv = $this->input->post('pwd');

            var_dump($this->ajoutManager->add_professor($email, sha1($pwd_sauv)));
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