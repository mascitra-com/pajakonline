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
            <li class="">
                <a href="<?= site_url('dashboard') ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="<?= site_url('transaksi') ?>">
                    <i class="fa fa-calculator"></i> <span>Transaksi</span>
                </a>
            </li>
            <li class="">
                <a href="<?= site_url('wajib') ?>">
                    <i class="fa fa-institution"></i> <span>Wajib Pajak</span>
                </a>
            </li>
            <li class="">
                <a href="<?= site_url('obyek') ?>">
                    <i class="fa fa-map-marker"></i> <span>Obyek Pajak</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>