<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller
{
    protected $model = array('user_m');

    public function __construct()
    {
        parent::__construct();
        $this->load->model($this->model);
    }

    /**
     *  Menentukan Hak Akses User
     */
    public function index()
    {
        $id = $this->session->userdata('identifier');
        if ($id == 1){
            $this->session->set_userdata('user', 'admin');
            redirect('admin');
        } else {
            $this->session->set_userdata('user', 'admin');
            redirect('teller');
            // TODO tambahkan untuk Teller
        }
    }

    /**
     *  Menampilkan Profil akun yang sedang Login
     */
    public function show()
    {
        $user_identifier = $this->session->userdata('identifier');
        $user_details = $this->user_m->read($user_identifier);
        $this->data['user_details'] = $user_details;
        $this->load_view('Profil Akun', 'user/profil');
    }

    /**
     *  Memperbarui Data Profil Akun
     */
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
            $this->flash_message('Profil Akun Berhasil di Update');
        } else {
            $this->flash_message('Profil Akun Gagal di Update');
        }
        redirect($this->data['user'].'/show');
    }

    /**
     *  Menampilkan Halaman Ganti Password
     */
    public function editPassword()
    {
        $this->load_view('Profil Akun', 'user/gantiPassword');
    }

    /**
     *  Update Password Akun
     */
    public function update()
    {
        $password = $this->input->post('inputOldUsername');
        $new_password = $this->input->post('inputNewPassword');
        if ($this->authentication->change_password($new_password))
        {
            $this->flash_message('Password Akun Berhasil di Update');
        } else {
            $this->flash_message('Password Akun Gagal di Update');
        }
        redirect($this->data['user'].'/editPassword');
    }
}
