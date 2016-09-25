<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once('Users.php');

class Teller extends Users
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     *  TODO Tentukan data yang akan ditampilkan
     */
    public function index()
    {
        $this->load_view('Dashboard Teller', 'dashboard/teller');
    }
}
