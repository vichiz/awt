<?php
class Answer extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function anwerQues($ques_id,$answer,$user_id) {

        $data = array('ques_id' => $ques_id, 'answer' => $answer, 'user_id' => $user_id);
        $this->db->insert('answers', $data);
        return null; // no error message because all is ok
    }
    function getAnswersById($ques_id){
                $data = $this->db->query("SELECT * FROM answers WHERE ques_id = '".$ques_id."'");
//        var_dump($data->result_array());
        return $data->result_array();
    }
}