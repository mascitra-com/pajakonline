<div class="row">
    <div class="col-lg-10">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <!-- form start -->
            {user_details}
            <form class="form-horizontal" action="<?=site_url('auth')?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputUsername" class="col-sm-2 control-label">Username</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputUsername" placeholder="Username" value="{username}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" value="{email}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Nama</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Nama" value="{name}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="col-sm-2 control-label">Alamat</label>

                        <div class="col-sm-10">
                                        <textarea class="form-control" name="inputAddress" id="inputAddress"
                                                  placeholder="Alamat">{address}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-sm-2 control-label">Telepon</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inputPhone"  id="inputPhone" placeholder="Telepon"  value="{phone}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <button type="submit" class="btn btn-info">Simpan</button>
                            <button class="btn btn-default">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
            {/user_details}
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row -->