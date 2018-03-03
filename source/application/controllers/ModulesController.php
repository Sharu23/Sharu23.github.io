<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModulesController extends CI_Controller {

	public function index()
	{
		$this->load->view('Modules');
	}
}
