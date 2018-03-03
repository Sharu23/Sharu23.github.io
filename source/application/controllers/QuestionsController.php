<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuestionsController extends CI_Controller {

  public function index()
  {
    $this->load->view('QuestionPage.php');
  }

	public function questions($idquestion)
	 {
    $this->load->model('quizmodel');

	 	$questions= $this->quizmodel->get_questions();



	 	if($this->input->post()){
	 		$answered_question = $this->quizmodel->get_question($idquestion-1);
	 		$question = $this->quizmodel->get_question($idquestion);

			if($answered_question['correct_answer']==$this->input->post('answer')){

			}
			$data['question'] = $question;

			$data['next_question'] = $idquestion+1;
			$this->load->view('QuestionPage.php',$data);
		}
		else {
			$question = $this->quizmodel->get_question(1);

			$data['question'] = $question;

			$data['next_question'] = $next_question;
      $next_question = 2;
			$this->load->view('QuestionPage.php',$data);
		}
	 }
}
