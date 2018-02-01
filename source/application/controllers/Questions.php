<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function quiz_display()
	{
		$this->load->model('quizModel');
		$this->data['questions'] = $this->quizModel->getQuestions();
		$this->load->view('display_quiz', $this->data);
	}
}
