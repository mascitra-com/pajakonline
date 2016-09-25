<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $data;
    protected $template = 'template/index';

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(ENVIRONMENT == 'development');
        if (!$this->authentication->is_loggedin()) {
            $this->session->sess_destroy();
            redirect('auth');
        }
        $this->data['styles'] = '';
        $this->data['javascript'] = '';
    }

    public function load_view($title, $content)
    {
        $this->data['title'] = $title;
        $this->data['content'] = $content;
        $this->data['user'] = $this->session->userdata('user');
        // Menentukan daftar tampilan yang memiliki Tabel
        switch ($this->data['title']) {
            case "Transaksi":
            case "Instansi":
                $this->tableFunction();
                break;
        }
        $this->parser->parse($this->template, $this->data);
    }

    public function flash_message($message)
    {
        $this->session->set_flashdata('operation', 'Success');
        $this->session->set_flashdata('result', 'Berhasil');
        $this->session->set_flashdata('message', $message);
    }

    public function tableFunction()
    {
        $this->data['styles'] .= '<link rel="stylesheet" href="' . base_url() . 'css/dataTables.bootstrap.css">';
        $this->data['javascript'] .= '<script src="' . base_url() . 'js/dataTables.bootstrap.min.js"></script>';
        $this->data['javascript'] .= '<script src="' . base_url() . 'js/jquery.dataTables.min.js"></script>
                                            ';
        $this->data['javascript'] .= '<script>
                                                $(function () {
                                                    $("#data' . $this->data['title'] . '").DataTable();
                                                });
                                            </script>';
    }
}
