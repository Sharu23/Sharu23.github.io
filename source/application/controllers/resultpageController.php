<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class resultpageController extends CI_Controller
{
	  function __construct()
		{
		  parent:: __construct();
		  $this->load->database();
	  }

	public function index()
	{
		$this->data['checks'] = array(
			'quest1' => $this->input->post("quizid1"),
			'quest2' => $this->input->post("quizid2"),
			'quest3' => $this->input->post("quizid3"),
			'quest4' => $this->input->post("quizid4"),
			'quest5' => $this->input->post("quizid5"),
			'quest6' => $this->input->post("quizid6"),
			'quest7' => $this->input->post("quizid7"),
			'quest8' => $this->input->post("quizid8"),
			'quest9' => $this->input->post("quizid9"),
			'quest10' => $this->input->post("quizid10")
		);

		$this->load->model('quizmodel');
		$this->data['results'] = $this ->quizmodel->getQuestions();
		$this->load->view('result_page', $this->data);

	}

}
