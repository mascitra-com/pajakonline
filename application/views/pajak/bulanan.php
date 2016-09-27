<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table id="dataTransaksi" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Hotel</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Total Pajak</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($bulanan as $list): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $list['nama_hotel'] ?></td>
                            <td><?php echo date('F', strtotime(str_replace('-', '/', $list['tanggal_pajak']))); ?></td>
                            <td><?php echo date('Y', strtotime(str_replace('-', '/', $list['tanggal_pajak']))); ?></td>
                            <td><?php echo 'Rp. ' . number_format($list['total_pajak'], '0', '', '.') . ',-'; ?></td>
                            <td>
                                <?php switch ($list['status']) {
                                    case "1" : ?>
                                        <a class="btn btn-info"
                                           href="<?= site_url("pajak/bayarPajak/" . $list['id']) ?>">Bayar</a>
                                        <?php break; ?>
                                    <?php default : ?>
                                        <label class="text text-success">Lunas</label>
                                    <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Tgl Transaksi</th>
                        <th>Obyek Pajak</th>
                        <th>No Transaksi</th>
                        <th>Total</th>
                        <th>Pajak</th>
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
</script>