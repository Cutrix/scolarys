<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Configuration extends CI_Controller {
  

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
        
        $this->load->view('templates/footer.php');
    }

}