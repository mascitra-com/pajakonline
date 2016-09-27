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
                    foreach ($verifikasi as $list): ?>

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $list['nama_hotel'] ?></td>
                            <td><?php echo date('F', strtotime(str_replace('-', '/', $list['payment_date']))); ?></td>
                            <td><?php echo date('Y', strtotime(str_replace('-', '/', $list['payment_date']))); ?></td>
                            <td><?php echo 'Rp. ' . number_format($list['ppn'], '0', '', '.') . ',-'; ?></td>
                            <?php if (!in_array($list['ppn'], $listPpn)) { ?>
                                <td><a class="btn btn-info"
                                       href="<?= site_url("pajak/approvePajak/" . $list['payment_date'] . "/" . $list['id_hotel']) ?>">Verifikasi</a>
                                </td>
                            <?php } else { ?>
                                <td>
                                    <label class="text text-success">Terverifikasi</label>
                                </td>
                            <?php } ?>
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