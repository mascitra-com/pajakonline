<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    protected $dbs;

    public function __construct($database = NULL)
    {
        parent::__construct();
        if (!is_null($database))
            $this->dbs = $this->load->database($database, TRUE);
    }

}
