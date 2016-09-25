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
    private $database ='hotel';

    public function __construct()
    {
        parent::__construct($this->database);
    }

    public function transactions()
    {
        $this->dbs->select('*');
        $this->dbs->from($this->payment);
        $this->dbs->join($this->order, $this->payment.'.order_id = '.$this->order.'.order_id');
        $this->dbs->join($this->class, $this->order.'.class_id = '.$this->class.'.idclass');
        $this->dbs->join($this->guest, $this->guest.'.id = '.$this->order.'.guest_id');
        $this->dbs->join($this->rooms, $this->rooms.'.idrooms = '.$this->order.'.idrooms');
        $this->dbs->join($this->guest_group, $this->guest.'.kode_grup = '.$this->guest_group.'.id_guest_group');
        $this->dbs->join($this->hotel, $this->hotel.'.id_hotel = '.$this->guest_group.'.id_hotel');
        $this->dbs->where('payment_date >', '0');
        $query = $this->dbs->get();
        return $query->result_array();
    }

    public function companies()
    {
        $query = $this->dbs->get($this->hotel);
        return $query->result_array();
    }
}
