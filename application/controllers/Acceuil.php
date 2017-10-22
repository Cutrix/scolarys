<?php

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
    }
}