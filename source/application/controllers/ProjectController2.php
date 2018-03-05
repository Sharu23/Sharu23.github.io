<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectController2 extends CI_Controller {

	public function index()
	{
		$this->load->view('ProjectManagement_2');
	}
}
