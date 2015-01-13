<?php

class Question extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function createQuestion($category, $title, $tags, $question) {
        $data = array('category' => $category, 'title' => $title, 'tags' => $tags, 'question' => $question);
        $this->db->insert('questions', $data);
        return null;
    }
    
    function getQuestions(){
        $data = $this->db->query('SELECT * FROM questions');
//        var_dump($data->result_array());
//        die;
        return $data->result_array();
    }
    
    function getQuestionsById($ques_id){
        $data = $this->db->query("SELECT * FROM questions WHERE ques_id = '".$ques_id."'");
//        var_dump($data->result_array());
        return $data->result_array();
    }

}
