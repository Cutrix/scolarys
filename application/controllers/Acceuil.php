<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class Acceuil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
       
	}
    
    public function index()
    {
    	$this->load->view('templates/header');
        $this->load->view('Acceuil/acceuil');
        $this->load->view('templates/footer'); 
    }
}