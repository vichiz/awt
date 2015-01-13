<?php

class Question_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('question');
        
    }
    
    public function question() {
        $data['errmsg'] = '';
//        $this->load->view('ask_question', $data);
    }

    public function askQuestion() {
        $this->load->view('ask_question');
    }
    
    public function createQuestion(){
        $category = $this->input->post('category');
        $title = $this->input->post('title');
        $tags = $this->input->post('tags');
        $question = $this->input->post('question');
        echo $category;
        return $this->question->createQuestion($category, $title, $tags, $question);
        }
        
        public function getQuestion(){
            $data['questionArr'] =  $this->question->getQuestions();
             $this->load->view('ques_title',$data);
        }
        
        public function getQuestionById(){
            $ques_id = trim(strip_tags($_POST['quesId']));
           // echo $ques_id;
//            alert($ques_id);
            $data['questionArrId'] =  $this->question->getQuestionsById($ques_id);
             $this->load->view('ques_layout',$data);
        }

}
