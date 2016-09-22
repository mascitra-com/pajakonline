<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_m extends MY_Model
{
    private $table = 'users';
    public function __construct()
    {
        parent::__construct();
    }

    public function read($user_identifier)
    {
        $this->db->where('id', $user_identifier);
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function updateDetails($user_identifier, $data)
    {
        $this->db->set($data);
        $this->db->where('id', $user_identifier);
        $this->db->update($this->table);
    }
}
