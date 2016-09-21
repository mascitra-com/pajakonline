<script src="<?= base_url() ?>js/jquery-3.1.0.min.js"></script>
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/app.min.js"></script>

<script type="text/javascript">
    function profil() {
        window.location.assign("<?=site_url('auth/show')?>")
    }
    function gantiPassword() {
        window.location.assign("<?=site_url('auth/edit')?>")
    }
    function signout() {
        window.location.assign("<?=site_url('auth/logout')?>")
    }
</script>

<?php if(isset($javascript)) : ?>
    <?=$javascript?>
<?php endif; ?>