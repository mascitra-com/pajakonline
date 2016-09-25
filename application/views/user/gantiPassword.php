<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-md-6">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal" action="<?=base_url($user.'/update')?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputOldPassword" class="col-sm-4 control-label">Password Lama</label>

                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputOldPassword" name="inputOldPassword"
                                   placeholder="Password Lama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNewPassword" class="col-sm-4 control-label">Password Baru</label>

                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputNewPassword" name="inputNewPassword"
                                   placeholder="Password Baru">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNewConfirmation" class="col-sm-4 control-label">Konfirmasi Password</label>

                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputNewConfirmation" name="inputNewConfirmation"
                                   placeholder="Password Lama">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-info">Ganti</button>
                    </div>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row -->