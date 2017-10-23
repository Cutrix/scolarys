<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class Deconnexion extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->session->sess_destroy();

		redirect('/Acceuil');
	}
}