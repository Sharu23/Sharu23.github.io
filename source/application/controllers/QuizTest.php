<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class QuizTest extends CI_Controller
{
  function __construct()
  {
	  parent:: __construct();
	  $this->load->database();
  }

	public function index()
	{
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestions();
		$this->load->view('Question_New', $this->data);

	}

  public function result()
  {
      $this->data['checks'] = array(
        'quest1' => $this->input->post("quid1"),
        'quest2' => $this->input->post("quid2"),
        'quest3' => $this->input->post("quid3"),
        'quest4' => $this->input->post("quid4"),
        'quest5' => $this->input->post("quid5"),
        'quest6' => $this->input->post("quid6"),
        'quest7' => $this->input->post("quid7"),
        'quest8' => $this->input->post("quid8"),
        'quest9' => $this->input->post("quid9"),
        'quest10' => $this->input->post("quid10")
      );

      $this->load->model('quizmodel');
      $this->data['results'] = $this ->quizmodel->getQuestions();
      $this->load->view('result_page', $this->data);

    }

}
