<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class quizmodel extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }
  public function get_questions()
  {
      return $this->db->get('multiple_choice_quiz')->result_array();
  }
  public function get_question($idquestion)
  {
    $this->db->select('multiple_choice_quiz.*');
    $this->db->from('multiple_choice_quiz');
    $this->db->where('multiple_choice_quiz.id',$idquestion);
    return $this->db->get()->result_array();
  }
}
