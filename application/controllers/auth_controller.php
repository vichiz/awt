<?php

class Auth_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('authlib');
        $this->load->helper('url');
    }

    public function index() {
        redirect('/auth_controller/login'); // url helper function
    }

    public function register() {
        $this->load->view('sign_up', array('errmsg' => ' '));
    }

    public function createaccount() {
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $conf_password = $this->input->post('confpwd');

        if (!($errmsg = $this->authlib->register($name, $username, $email, $password, $conf_password))) {
            redirect('/auth_controller/login');
        } else {
            $data['errmsg'] = $errmsg;
            $this->load->view('sign_up', $data);
        }
    }

    public function login() {
        $data['errmsg'] = '';
        $this->load->view('login', $data);
    }

    public function authenticate() {
        $username = $this->input->post('uname');
        $password = $this->input->post('pword');
        $user = $this->authlib->login($username, $password);
        if ($user !== false) {
            
            $this->load->view('basic_layout', array('name' => $user['name']));
        } else {
            $data['errmsg'] = 'Unable to login - please try again';
            $this->load->view('login', $data);
        }
    }

    public function load_home() {
//        $data['loggedIn']=$this->authlib->is_loggedin();
//         $this->load->view('home',$data);
         $this->load->view('home');
    }
    public function load_questions() {
         $this->load->view('questions');
    }
    public function load_about_us() {
         $this->load->view('about_us');
    }
    public function load_contact_us() {
         $this->load->view('contact_us');
    }
    
        public function logout() {
        $this->session->sess_destroy();
        $this->load->view('basic_layout', array('name' => 'Guest'));
    }

}
