<?php if (!defined('BASEPATH')) exit ('Pas de script executer depuis l\'url');

class Publier extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'assets'));
	}

	public function question()
	{
		$this->load->view('templates/header');
		$this->load->view('Propositions/form');
		$this->load->view('templates/footer');
	}

}
