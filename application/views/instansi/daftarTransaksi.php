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
                        <th>Tgl Transaksi</th>
                        <th>Obyek Pajak</th>
                        <th>No Transaksi</th>
                        <th>Total</th>
                        <th>Pajak</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($transaksi as $list): ?>
                    <tr>
                        <td><?php echo date('d M Y', strtotime(str_replace('-','/', $list['payment_date'])));?></td>
                        <td><?=$list['nama_hotel']?></td>
                        <td><?=$list['kwitansi']?></td>
                        <td><?php echo 'Rp. ' . number_format($list['payment_total'], '0' , '' , '.' ) . ',-';?></td>
                        <td><?php echo 'Rp. ' . number_format($list['ppn'], '0' , '' , '.' ) . ',-';?></td>
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