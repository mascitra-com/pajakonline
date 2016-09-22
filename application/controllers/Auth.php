<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller
{
    private $model = array('user_m');
    private $library;
    private $helper;

    public function __construct()
    {
        parent::__construct($this->model,$this->library,$this->helper);
    }

    public function index()
    {
        if ($this->authentication->is_loggedin())
        {
            redirect('dashboard');
        }
        $this->load->view('auth/login');
    }

    public function login()
    {
        $username = $this->input->post('inputUsername');
        $password = $this->input->post('inputPassword');
        if ($this->authentication->login($username, $password)) {
            redirect('dashboard');
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

    public function store()
    {
        $user_identifier = $this->session->userdata('identifier');
        $data = [
            'email' => $this->input->post('inputEmail'),
            'name' => $this->input->post('inputName'),
            'address' => $this->input->post('inputAddress'),
            'phone' => $this->input->post('inputPhone')
        ];

        if ($this->user_m->updateDetails($user_identifier, $data)) {
            redirect('auth/show');
        } else {
            redirect('auth/show');
        }
    }

    public function show()
    {
        $user_identifier = $this->session->userdata('identifier');
        $user_details = $this->user_m->read($user_identifier);
        $data = [
            'title' => 'Profil Akun',
            'content' => 'auth/profil',
            'user_details' => $user_details
        ];
        $this->parser->parse($this->template, $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Profil Akun',
            'content' => 'auth/gantiPassword'
        ];
        $this->parser->parse($this->template, $data);
    }

    public function update()
    {
        $password = $this->input->post('inputOldUsername');
        $new_password = $this->input->post('inputNewPassword');
        if ($this->authentication->change_password($new_password))
        {
            redirect('auth/edit');
        } else {
            redirect('auth/edit');
        }


    }
}
