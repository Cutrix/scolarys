<?php if (!defined('BASEPATH')) exit ('Pas de script executer depuis l\'url');

class Publier extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'assets'));
	}

	public function question()
	{
		//var_dump($_POST);
		$this->session->set_userdata('nom', 'alpha');
		$this->session->unset_userdata(array('nom' => 'alpha'));
		echo $this->session->userdata('nom');
		echo $q1 = $this->input->post('q1');
		$this->load->view('templates/header');
		$this->load->view('Propositions/form');
		$this->load->view('templates/footer');
	}

}
