<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class QuizTest extends CI_Controller
{
  function __construct() {
	  parent:: __construct();
	  $this->load->database();
  }

	public function index()
	{
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestions();
		$this->load->view('Question_New', $this->data);
	}

	public function resultdisplay($row_number)
	{
		/*$passed = $this->input->get('rowID_array',false);

		$passed_array = explode('', $passed);

		print_r($passed_array);*/

		$row_number_array = explode(" ", $row_number);

		$this->data['checks'] = array(
			'quest1' => $this->input->post("quid<?php $row_number_array[0]?>"),
			'quest2' => $this->input->post("quid<?php $row_number_array[1]?>"),
			'quest3' => $this->input->post("quid<?php $row_number_array[2]?>"),
			'quest4' => $this->input->post("quid<?php $row_number_array[3]?>"),
			'quest5' => $this->input->post("quid<?php $row_number_array[4]?>"),
			'quest6' => $this->input->post("quid<?php $row_number_array[5]?>"),
			'quest7' => $this->input->post("quid<?php $row_number_array[6]?>"),
			'quest8' => $this->input->post("quid<?php $row_number_array[7]?>"),
			'quest9' => $this->input->post("quid<?php $row_number_array[8]?>"),
			'quest10' => $this->input->post("quid<?php $row_number_array[9]?>")
		);

		$this->load->model('quizmodel');
		$this->data['results'] = $this ->quizmodel->getQuestions($row_number);
		$this->load->view('result_page', $this->data);
	}

}
