<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi Keluar</title>
</head>
<body>
        <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=ekspor-trx-keluar.xls");
        ?>

        <center>
            <h2>Laporan Transaksi Keluar</h2>
        </center>

        <table border="1">
            <tr>
                <th class="text-center">No</th>
                <th>Nama Barang</th>
                  <th>Tgl Jual</th>
                  <th>Jumlah Barang Keluar</th>
                  <th>Satuan</th>
                  <th>Ukuran</th>
                  <th>Warna</th>
                  <th>Harga Jual</th>
                  <th>Total</th>
            </tr>  

            <?php
            include "inc/koneksi.php";
            $mulaidari = $_POST['mulaidari'];
            $sampaidari = $_POST['sampaidari'];
            $query = mysqli_query($koneksi,"SELECT * FROM trx_keluar WHERE tgl_jual BETWEEN '$mulaidari' AND '$sampaidari' ORDER BY id_trxkeluar ASC");
            $no = 1;
            while ($trx_keluar = mysqli_fetch_array($query)) {
                $master_barang=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM master_barang WHERE id_namabarang='$trx_keluar[id_namabarang]'"));

             ?>          
                <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td><?php echo ucwords(strtolower($master_barang['nama_barang'])); ?></td>
                    <?php
                    $date=date_create($trx_keluar['tgl_jual']);    
                    $date_ind = date_format($date,"d/m/Y");
                    ?>
                    <td><?php echo $date_ind; ?></td>
                    <td><?php echo number_format($trx_keluar['jml_barangkeluar'],0,',','.'); ?></td>
                    <td><?php echo ucwords(strtoupper($master_barang['satuan'])); ?></td>
                    <td><?php echo ucwords(strtoupper($master_barang['ukuran'])); ?></td>
                    <td><?php echo ucwords(strtolower($master_barang['warna'])); ?></td>
                    <td><?php echo number_format($trx_keluar['harga_jual'],0,',','.'); ?></td>
                    <td><?php echo number_format($trx_keluar['total'],0,',','.'); ?></td>
                </tr>

             <?php 
               $no++; }
              ?>

        </table>
</body>
</html>
