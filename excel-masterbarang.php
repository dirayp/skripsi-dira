<!DOCTYPE html>
<html>
<head>
    <title>Export Master Barang</title>
</head>
<body>
        <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=ekspor-master-barang.xls");
        ?>

        <center>
            <h2>Master Barang</h2>
        </center>

        <table border="1">
            <tr>
                <th class="text-center">No</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Ukuran</th>
                <th>Warna</th>
            </tr>  

            <?php 
            include "inc/koneksi.php";
            $query = mysqli_query($koneksi,"SELECT * FROM master_barang ORDER BY id_namabarang ASC");
            $no = 1;
            while ($master_barang = mysqli_fetch_array($query)) {

             ?>          
                <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td><?php echo ucwords(strtolower($master_barang['nama_barang'])); ?></td>
                    <td><?php echo $master_barang['satuan']; ?></td>
                    <td><?php echo $master_barang['ukuran']; ?></td>
                    <td><?php echo $master_barang['warna']; ?></td>
                </tr>

             <?php 
               $no++; }
              ?>

        </table>
</body>
</html>
