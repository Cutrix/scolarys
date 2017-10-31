<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Configuration extends CI_Controller {
  

    public function __construct()
    {
        parent::__construct();        

        $this->load->database();
        $this->load->model('Config_model', 'configManager');
        
    }

    //--------------------------------------------------------------------------------------

    public function index()
    {
        $this->load->view('templates/header.php');

        $this->load->view('Config/config');
        
        $this->load->view('templates/footer.php');
    }


    //--------------------------------------------------------------------------------------
    
    public function email()
    {
        $this->load->view('templates/header.php');

        $statut = $this->session->userdata('statut') ?? '';
        $mail = $this->session->userdata('email');

        $this->load->view('Config/config_email');
        
        $this->load->view('templates/footer.php');   
    }

    //--------------------------------------------------------------------------------------
    
    public function pwd() 
    {
        $this->load->view('templates/header.php');

        $this->form_validation->set_rules('pwdold', '"Ancien mot de passe"', 'required');
        $this->form_validation->set_rules('pwdnew', '"Nouveau mot de passe"', 'required');

        if ($this->form_validation->run()) {
            $inputPwd = sha1($this->input->post('pwdold'));
            $email_user = $this->session->userdata('email');
            $currentPwd = $this->configManager->getCurrentPwd($email_user)[0]->mdp;
            $statut = $this->session->userdata('statut');
            
            if ($inputPwd !== $currentPwd) {                
                $data['error'] = "Echec lors de la reconnaissance de l'ancien mot de passe";                
            } else {
                $nPwd = sha1($this->input->post('pwdnew'));
                $rnPwd = sha1($this->input->post('rpwdnew'));

                if ($nPwd === $rnPwd)
                    $data['success'] = $this->configManager->change_pwd($nPwd, $email_user, $statut);
                else 
                    $data['error'] = "les deux mots de passe sont differents";
                }
        }   
        if (isset($data))             
            $this->load->view('Config/config_pwd', $data);
        else
            $this->load->view('Config/config_pwd');
        $this->load->view('templates/footer.php');   
    }    

//--------------------------------------------------------------------------------------

    public function set_dpwd()
    {
        if (($this->session->userdata('statut')) !== "su")
            exit("Vous n'avez pas access a ce dossier");
        
        $this->load->view('templates/header');

        $this->form_validation->set_rules('email', '"Email"', 'required');

        if ($this->form_validation->run()) {
            $mail = $this->input->post('email');
            if (!empty($this->configManager->find_email($mail))) 
                $data['success'] = $this->configManager->s_dpwd($mail);
            else 
                $data['error'] = "Ce prof n'existe pas";            
        
        }

        if (isset($data))
            $this->load->view('Config/set_dpwd', $data);
        else 
            $this->load->view('Config/set_dpwd');

        $this->load->view('templates/footer');
    }
}