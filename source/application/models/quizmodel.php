<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class quizmodel extends CI_Model {

  public function getQuestions()
  {
    $this->db->select("RowID, ModuleID, TopicID, Question, choice1, choice2, choice3, CorrectAnswer, Hint, Explanation");
    $this->db->from("multiple_choice_quiz");
    $this->db->limit(10);

    $query = $this->db->get();

    $GLOBALS['questionSaved'] = $query->result();

    return $GLOBALS['questionSaved'];

    $num_data_returned = $query->num_rows;

    if ($num_data_returned < 1) {
      echo "There is no data in the databse";
      exit();
    }

  }
}
