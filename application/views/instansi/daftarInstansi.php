<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Wajib Pajak</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="dataInstansi" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                    </tr>
                    </thead>
                    <tbody>
                    {instansi}
                    <tr>
                        <td>{nama_hotel}</td>
                        <td>Hotel</td>
                        <td>{alamat_hotel}</td>
                        <td>{no_hp_hotel}</td>
                    </tr>
                    {/instansi}
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>NPWPD</th>
                        <th>CP Perusahaan</th>
                        <th>Telepon</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->