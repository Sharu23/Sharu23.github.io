<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quizModel extends CI_Model {

	public function getQuestions()
	{
		$this->db->select("*");
		$this->db->from("multiple_choice_quiz");

		$query - $this->dp->get();

		return $query->result();

		$num_data_returned = $query->num_rows;
		if ($num_data_returned < 1) {
			echo "There is no data in the database";
			exit();
		}
	}
}
