<?php if(ENVIRONMENT == 'development'): var_dump($this->session); endif;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?> | Pajak Online</title>
    <?php $this->load->view('template/styles') ?>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<div class="wrapper">
    <body class="hold-transition skin-blue-light sidebar-mini">
    <!-- Header -->
    <?php $this->load->view('template/header') ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view('template/sidebar') ?>
    <!-- Content Wrapper. Contains page content -->
    <?php $this->load->view('template/content') ?>
    <!-- /.content-wrapper -->
    <?php $this->load->view('template/footer') ?>
</div>
</body>
</html>

