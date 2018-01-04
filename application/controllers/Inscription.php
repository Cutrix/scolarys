<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Inscription extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('Inscription_model', 'inscriptionManager');
    }

    //--------------------------------------------------------------------------------------

    public function parent()
    {
        if ($this->input->post('pass') == $this->input->post('pass1')) {
            $parent = [
                'nomParent' => $this->input->post('nom'),
                'prenomParent' => $this->input->post('prenom'),
                'email' => $this->input->post('mail'),
                'mdp' => sha1($this->input->post('pass'))
            ];
            $this->inscriptionManager->addParent($parent);
            redirect('authentification/connexion/succ');
        } else {
            redirect('authentification/connexion/fail');
        }
    }

    //--------------------------------------------------------------------------------------
}