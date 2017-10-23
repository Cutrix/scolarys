<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Ajout extends CI_Controller {

    const PROF_PRIVILEGES = 2;

    public function __construct()
    {
        parent::__construct();        

        $this->load->database();
        
    }

    public function index()
    {
        $this->load->view('templates/header.php');
        $this->load->view('Ajout/choix_ajout_view');
        $this->load->view('templates/footer.php');
    }

    public function professeur()
    {    	        
        $this->load->view('templates/header.php');
    	$this->load->view('Ajout/professeur_view');
        $this->load->view('templates/footer.php');
    }
}