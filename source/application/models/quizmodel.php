<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class quizmodel extends CI_Model {

  public function getQuestions()
  {
    $this->db->select("RowID, ModuleID, TopicID, Question, choice1, choice2, choice3, CorrectAnswer, Hint, Explanation");
    $this->db->from("multiple_choice_quiz");

    $query = $this->db->get();

    return $query->result();

    $num_data_returned = $query->num_rows;

    if ($num_data_returned <1) {
      echo "There is no data in the databse";
      exit();
    }

  }
}
