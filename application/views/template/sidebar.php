<?php
$level = $this->session->userdata('identifier');
$dashboard_active = "";
$transaksi_active = "";
$instansi_active = "";
$pajak_active = "";
$verifikasi_active = "";
$bulanan_active = "";
switch ($title) {
    case "Dashboard":
        $dashboard_active = "active";
        break;
    case "Transaksi":
        $transaksi_active = "active";
        break;
    case "Instansi":
        $instansi_active = "active";
        break;
    case "Verifikasi Pajak":
        $pajak_active = "active";
        $verifikasi_active = "active";
        break;
    case "Pajak Bulanan":
        $pajak_active = "active";
        $bulanan_active = "active";
        break;
}
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <i class="fa fa-circle text-success"></i> Online
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="<?=$dashboard_active?>">
                <a href="<?= site_url('dashboard') ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="<?=$transaksi_active?>">
                <a href="<?= site_url('transaksi') ?>">
                    <i class="fa fa-calculator"></i> <span>Daftar Transaksi</span>
                </a>
            </li>

            <li class="<?=$instansi_active?>">
                <a href="<?= site_url('instansi') ?>">
                    <i class="fa fa-institution"></i> <span>Daftar Instansi</span>
                </a>
            </li>
            <?php if ($level == 1) { ?>
            <li class="<?=$verifikasi_active?>">
                <a href="<?= site_url('verifikasiPajak') ?>">
                    <i class="fa fa-area-chart"></i> <span>Veriffikasi Pajak</span>
                </a>
            </li>
            <?php } else { ?>
            <li class="<?=$bulanan_active?>">
                <a href="<?= site_url('pajakBulanan') ?>">
                    <i class="fa fa-area-chart"></i> <span>Pembayaran Pajak</span>
                </a>
            </li>
            <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>