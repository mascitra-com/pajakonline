<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <!-- Content Header Goes here -->
            <?= $title ?>
            <small>Pajak Online</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <!-- Breadcrumb Goes Here -->
            <li><a href="<?= site_url(strtolower($title)) ?>">{title}</a></li>
        </ol>
        <br/>
        <?php if ($this->session->flashdata('operation') !== NULL) : ?>
            <div class="alert alert-<?= $this->session->flashdata('operation'); ?>" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only"><?= $this->session->flashdata('result'); ?>:</span>
                <?= $this->session->flashdata('message'); ?>
            </div>
        <?php endif; ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Content goes here -->
        <?php $this->load->view($content) ?>
    </section>
    <!-- /.content -->
</div>