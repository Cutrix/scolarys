<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Authentification extends CI_Controller {
    public function __construct()
    {
        parent::__construct();        

        $this->load->database();
        $this->load->model('Auth_model', 'authManager');
    }

    public function connexion()
    {    	        
        $this->load->view('templates/header');

        $this->form_validation->set_rules('email', '"Email"', 'required');
        $this->form_validation->set_rules('pwd', '"Mot de passe"', 'required');

        if ($this->form_validation->run()) {

            $mail = $this->input->post('email');
            $pass = sha1($this->input->post('pwd'));    

            //Recuperation de l'email du statut concerne
            $d_email = isset($this->authManager->detection($mail, $pass)[0]->email) ? $this->authManager->detection($mail, $pass)[0]->email : "";
        
            $this->session->set_userdata('email', $d_email);            

            //Deetection du statut
            if (!empty($this->authManager->detection($mail, $pass))) {
                $isSu = ($this->authManager->isSu($this->authManager->detection($mail, $pass))) ? true : false;
                $isProf = ($this->authManager->isProf($this->authManager->detection($mail, $pass))) ? true : false;
                $isParent = ($this->authManager->isParent($this->authManager->detection($mail, $pass))) ? true : false;

            //Creation des sessions pour les differents statut
                if ($isSu) $this->session->set_userdata('statut', 'su');
                if ($isProf) $this->session->set_userdata('statut', 'prof');
                if ($isParent) $this->session->set_userdata('statut', 'parent');
            

            //Redirection
                redirect('Acceuil');
            } else {
                $data['error'] = 'Mauvais identifiant ou mot de passe';                    
            }
            
        }
        $data = "";
    	$this->load->view('Connexion/form_connexion', $data);
        $this->load->view('templates/footer'); 
    }
}