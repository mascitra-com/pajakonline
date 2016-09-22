<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $template = 'template/index';

    public function __construct($model, $library, $helper)
    {
        parent::__construct();
        $this->load->model($model);
    }
}
