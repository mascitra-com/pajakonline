<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once('Users.php');

class Auth extends CI_Controller
{
    private $model = array('user_m');

    public function __construct()
    {
        parent::__construct();
        $this->load->model($this->model);
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $username = $this->input->post('inputUsername');
        $password = $this->input->post('inputPassword');
        if ($this->authentication->login($username, $password)) {
            redirect('Users');
        } else {
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->authentication->logout();
        $this->session->sess_destroy();
        redirect('auth');
    }

}
