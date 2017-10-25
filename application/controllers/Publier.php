<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Publier extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();	
	}

	public function question()
	{				
		$this->load->view('templates/header');

		
		$this->load->view('Propositions/form');

		$this->load->view('templates/footer');
	}

}
