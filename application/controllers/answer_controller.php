
<?php

class Answer_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('answer');
         $this->load->model('question');
    }

    public function answerQuestion() {
        $ques_id = $this->input->post('quesId');
        $answer = $this->input->post('answer');
        $user_id = $this->input->post('userId');
        
        if ($answer == '') {
            return 'Missing field';
        }
        return $this->answer->anwerQues($ques_id, $answer, $user_id);
    }
    
    public function getAnswersById(){
            $ques_id = trim(strip_tags($_POST['quesId']));
            $data['answersArrId'] =  $this->answer->getAnswersById($ques_id);
             $data['questionArrId'] =  $this->question->getQuestionsById($ques_id);
             $this->load->view('ques_layout',$data);
        
    }

}