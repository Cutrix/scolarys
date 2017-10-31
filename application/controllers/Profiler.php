<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class Profiler extends CI_Controller {
	public function index()
	{
		$this->output->enable_profiler(true);
	}
}