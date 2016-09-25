<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('instansi_m'));
    }

    /**
     *  Menampilkan semua Transaksi dari setiap Instansi
     */
    public function showTransaction()
    {
        $this->data['transaksi'] = $this->instansi_m->transactions();
        $this->load_view('Transaksi', 'pajak/daftarTransaksi');
    }

    /**
     *  Menampilkan daftar Instansi Wajib Pajak
     */
    public function showCompanies()
    {
        $this->data['instansi'] = $this->instansi_m->companies();
        $this->load_view('Instansi', 'pajak/daftarInstansi');
    }
}
