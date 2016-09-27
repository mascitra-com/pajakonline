<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pajak_m extends MY_Model
{
    private $payment = 'payment';
    private $order = 'order';
    private $class = 'class';
    private $hotel = 'hotel';
    private $pajak = 'pajak';


    public function __construct()
    {
        parent::__construct();
    }

    public function transferPajak($year, $month, $id_hotel)
    {
        $pajak = $this->read($year, $month, $id_hotel);
        $data = [];
        foreach ($pajak as $list){
            $data = [
                'id_hotel' => $list['id_hotel'],
                'nama_hotel' => $list['nama_hotel'],
                'tanggal_pajak' => $list['payment_date'],
                'total_pajak' => $list['ppn'],
            ];
        }
        $DBpajak = $this->load->database('pajak', TRUE);
        return $DBpajak->insert($this->pajak, $data);
    }

    public function readBulanan()
    {
        $DBpajak = $this->load->database('pajak', TRUE);
        return $DBpajak->get($this->pajak)->result_array();
    }

    public function listPpn()
    {
        $ppn = $this->readBulanan();
        $list = array();
        foreach ($ppn as $data) {
            array_push($list,$data['total_pajak']);
        }
        return $list;
    }

    public function bayarPajak($id)
    {
        $DBpajak = $this->load->database('pajak', TRUE);
        $DBpajak->set('status', 2);
        $DBpajak->where('id', $id);
        return $DBpajak->update($this->pajak);
    }

    /**
     * @param null $date
     * @return mixed
     */
    public function read($year = NULL, $month = NULL, $id_hotel = NULL)
    {
        $this->db->db_select('hotel');
        $this->db->select(array('hotel.id_hotel', 'nama_hotel', 'payment.payment_date', 'SUM(payment.ppn) as ppn'));
        $this->db->from($this->payment);
        $this->db->join($this->order, $this->payment . '.order_id = ' . $this->order . '.order_id');
        $this->db->join($this->class, $this->order . '.class_id = ' . $this->class . '.idclass');
        $this->db->join($this->hotel, $this->hotel . '.id_hotel = ' . $this->class . '.id_hotel');
        $this->db->where('payment_date >', '0');
        if ($year <> NULL) {
            $this->db->where('YEAR(payment_date)', $year);
            $this->db->where('MONTH(payment_date)', $month);
            $this->db->where('hotel.id_hotel', $id_hotel);
        }
        $this->db->group_by(array('MONTH(payment.payment_date)', 'YEAR(payment.payment_date)', 'hotel.id_hotel'));
        $query = $this->db->get();
        return $query->result_array();
    }
}
