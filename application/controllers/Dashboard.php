<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    private $template = 'template/index';

    public function __construct()
    {
        parent::__construct();
        if (! $this->authentication->is_loggedin())
        {
            redirect('auth');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'content' => 'dashboard'
        ];
        $this->parser->parse($this->template, $data);
    }
}
