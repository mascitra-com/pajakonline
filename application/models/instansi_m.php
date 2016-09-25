<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi_m extends MY_Model
{
    private $payment = 'payment';
    private $order = 'order';
    private $class = 'class';
    private $guest = 'guest';
    private $rooms = 'rooms';
    private $guest_group = 'guest_group';
    private $hotel = 'hotel';

    public function __construct()
    {
        parent::__construct();
        $this->db->db_select('hotel');
    }

    public function transactions()
    {
        $this->db->select('*');
        $this->db->from($this->payment);
        $this->db->join($this->order, $this->payment.'.order_id = '.$this->order.'.order_id');
        $this->db->join($this->class, $this->order.'.class_id = '.$this->class.'.idclass');
        $this->db->join($this->guest, $this->guest.'.id = '.$this->order.'.guest_id');
        $this->db->join($this->rooms, $this->rooms.'.idrooms = '.$this->order.'.idrooms');
        $this->db->join($this->guest_group, $this->guest.'.kode_grup = '.$this->guest_group.'.id_guest_group');
        $this->db->join($this->hotel, $this->hotel.'.id_hotel = '.$this->guest_group.'.id_hotel');
        $this->db->where('payment_date >', '0');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function companies()
    {
        $this->db->where('id_hotel >', '0');
        $query = $this->db->get($this->hotel);
        return $query->result_array();
    }
}
