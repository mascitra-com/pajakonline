<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pajak extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('pajak_m'));
    }

    /**
     *  TODO Menampilkan Halaman Verifikasi Pajak Bulanan
     * @Lihat savePajakBulanan
     */
    public function showVerifikasiPajak()
    {
        $this->data['verifikasi'] = $this->pajak_m->read();
        $this->data['listPpn'] = $this->pajak_m->listPpn();
        $this->load_view('Verifikasi Pajak', 'pajak/verifikasi');
    }

    /**
     *  TODO Menampilkan Pajak Bulanan yang sudah di salin ke Database Pajak
     * @Lihat savePajakBulanan
     */
    public function showPajakBulanan()
    {
        $this->data['bulanan'] = $this->pajak_m->readBulanan();
        $this->load_view('Pajak Bulanan', 'pajak/bulanan');
    }

    /**
     *  TODO Admin Memverifikasi Pajak Bulanan
     */
    public function approvePajak($date, $id_hotel)
    {
        $year = substr($date, 0, 4);
        $month = substr($date, 5, 2);
        $month = str_replace('0', '', $month);

        if ($this->pajak_m->transferPajak($year, $month, $id_hotel)) {
            $this->flash_message('Data Pajak Telah di Verifikasi');
        } else {
            $this->flash_message('Data Pajak Gagal di Verifikasi');
        }
        redirect('verifikasiPajak');
    }


    /**
     *  TODO Update Status Pembayaran saat Teller sudah menerima pembayaran
     */
    public function bayarPajak($id)
    {
        dump($this->pajak_m->bayarPajak($id));
    }
}
