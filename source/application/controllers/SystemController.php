<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SystemController extends CI_Controller {

	public function index()
	{
		$this->load->view('SystemDesigns');
	}
}
