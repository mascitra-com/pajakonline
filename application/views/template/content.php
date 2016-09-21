<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <!-- Content Header Goes here -->
            <?= $title ?>
            <small>Pajak Online</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <!-- Breadcrumb Goes Here -->
            <li><a href="<?=site_url(strtolower($title))?>">{title}</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Content goes here -->
        <?php $this->load->view($content) ?>
    </section>
    <!-- /.content -->
</div>