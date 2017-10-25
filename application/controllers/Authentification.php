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
        $this->load->view('Connexion/form_connexion');
        
        $this->form_validation->set_rules('email', '"Votre email"', 'required|encode_php_tags');

        $this->form_validation->set_rules('pwd', '"Votre mot de passe"', 'required');		
       
        if($this->form_validation->run()) {        	
        	
        	$mail = $this->input->post('email');
        	$pwd = sha1($this->input->post('pwd'));
        	
            if (valid_email($mail)) {                    
                if($this->authManager->connect($mail, $pwd)) {                    
	        		$this->session->set_userdata('email', $mail);                    
                    $isSu = (int) $this->authManager->isSu($mail, $pwd)[0]->privilegeEt === 1;                    
                    if ($isSu)
                        $this->session->set_userdata('isSu', $isSu);
                    redirect('acceuil');
	        	}
        	}

        } else {
            //Signature
        	echo 'formaulaire non valide';
        }

        $this->load->view('templates/footer.php');
    }
}