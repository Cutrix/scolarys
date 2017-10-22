<?php if (!defined('BASEPATH')) exit('Pas de script executer depuis url');

class Acceuil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('assets', 'url'));
	}
    
    public function index()
    {
    	$this->load->view('templates/header');
        $this->load->view('Acceuil/acceuil');
        $this->load->view('templates/footer');
    }
}