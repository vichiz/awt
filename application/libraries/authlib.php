<?php

class Authlib {

    function __construct() {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();

        $this->ci->load->model('user');
    }

    public function register($name, $username, $email, $password, $confpwd) {
        if ($name == '' || $username == '' || $email == '' || $password == '' || $confpwd == '') {
            return 'Missing field';
        }
        if ($password != $confpwd) {
            return "Passwords do not match";
        }
        return $this->ci->user->register($name, $username, $email, $password);
    }

    public function login($user, $pwd) {
        if ($user == '' || $pwd == '') {
            return false;
        }
        return $this->ci->user->login($user, $pwd);
    }

    public function is_loggedin() {
        return $this->ci->user->is_loggedin();
    }

}
