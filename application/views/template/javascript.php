<script src="<?= base_url() ?>js/jquery-3.1.0.min.js"></script>
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/app.min.js"></script>

<?php if(isset($javascript)) : ?>
    <?=$javascript?>
<?php endif; ?>

<script type="text/javascript">
    function profil() {
        window.location.assign("<?=site_url($user.'/show')?>")
    }
    function gantiPassword() {
        window.location.assign("<?=site_url($user.'/editPassword')?>")
    }
    function signout() {
        window.location.assign("<?=site_url('auth/logout')?>")
    }
</script>