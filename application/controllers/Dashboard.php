<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    private $model;
    private $library;
    private $helper;

    public function __construct()
    {
        parent::__construct($this->model,$this->library,$this->helper);
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
