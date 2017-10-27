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
        $this->load->view('templates/header');

        $data['matieres'] = $this->ajoutManager->getAllSubject();

        $this->load->view('Ajout/professeur_view', $data);                
        
        $this->load->view('templates/footer');
    }

    //--------------------------------------------------------------------------------------

    public function matiere()
    {
        $this->load->view('templates/header.php');
        
        $this->form_validation->set_rules('matiere', '"Matiere"', 'required');

        if ($this->form_validation->run()) {            
            $data['success'] = $this->ajoutManager->add_matiere($this->input->post('matiere'));        
            $this->load->view('Ajout/etablissement', $data);   
        }        
        $this->load->view('Ajout/matiere');
        
        $this->load->view('templates/footer.php');
    }

    //--------------------------------------------------------------------------------------
    
    public function etablissement()
    {
        $this->load->view('templates/header.php');

        $this->form_validation->set_rules('matiere', '"Etablissement"', 'required');

        if ($this->form_validation->run()) {
            $num = !(empty($this->input->post('numero'))) ? $this->input->post('numero') : null;
            $data['success'] = $this->ajoutManager->add_etablissement($this->input->post('etablissement'), $num);        
            var_dump($this->ajoutManager->add_etablissement($this->input->post('etablissement'), $num));
            $this->load->view('Ajout/etablissement', $data);   
         }

         $this->load->view('Ajout/etablissement');
        
        
        $this->load->view('templates/footer.php');   
    }
}   