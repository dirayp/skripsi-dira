<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi Masuk</title>
</head>
<body>
        <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=laporan-trx-masuk.xls");
        ?>

        <center>
            <h2>Laporan Transaksi Masuk</h2>
        </center>

        <table border="1">
            <tr>
                <th class="text-center">No</th>
                <th>Nama Barang</th>
                <th>Nama Supplier</th>
                <th>Tgl Beli</th>
                <th>Jumlah Barang Masuk</th>
                <th>Satuan</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Harga Beli</th>
                <th>Total</th>
            </tr>  

            <?php
            include "inc/koneksi.php";
            $mulaidari = $_POST['mulaidari'];
            $sampaidari = $_POST['sampaidari'];
            $query = mysqli_query($koneksi,"SELECT * FROM trx_masuk WHERE tgl_beli BETWEEN '$mulaidari' AND '$sampaidari' ORDER BY id_trxmasuk ASC");
            $no = 1;
            while ($trx_masuk = mysqli_fetch_array($query)) {
                $master_barang=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM master_barang WHERE id_namabarang='$trx_masuk[id_namabarang]'"));

             ?>          
                <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td><?php echo ucwords(strtolower($master_barang['nama_barang'])); ?></td>
                    <td><?php echo ucwords(strtolower($trx_masuk['id_namasupplier'])); ?></td>
                     <?php
                     $date = date_create($trx_masuk['tgl_beli']);
                     $date_ind = date_format($date, "d/m/Y");
                     ?>
                    <td><?php echo $date_ind; ?></td>
                    <td><?php echo number_format($trx_masuk['jml_barangmasuk'], 0, ',', '.'); ?></td>
                    <td><?php echo strtoupper($master_barang['satuan']); ?></td>
                    <td><?php echo strtoupper($master_barang['ukuran']); ?></td>
                    <td><?php echo strtolower($master_barang['warna']); ?></td>
                    <td><?php echo number_format($trx_masuk['harga_beli'], 0, ',', '.'); ?></td>
                    <td><?php echo number_format($trx_masuk['total'], 0, ',', '.'); ?></td>
                </tr>

             <?php 
               $no++; }
              ?>

        </table>
</body>
</html>
