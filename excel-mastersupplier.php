<!DOCTYPE html>
<html>
<head>
    <title>Export Master Supplier</title>
</head>
<body>
        <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=ekspor-master-supplier.xls");
        ?>

        <center>
            <h2>Master Supplier</h2>
        </center>

        <table border="1">
            <tr>
                <th class="text-center">No</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>No Telp</th>
            </tr>  

            <?php 
            include "inc/koneksi.php";
            $query = mysqli_query($koneksi,"SELECT * FROM master_supplier ORDER BY id_namasupplier ASC");
            $no = 1;
            while ($master_supplier = mysqli_fetch_array($query)) {

             ?>          
                <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td><?php echo ucwords(strtolower($master_supplier['nama_supplier'])); ?></td>
                    <td><?php echo $master_supplier['alamat']; ?></td>
                    <td><?php echo $master_supplier['no_telp']; ?></td>
                </tr>

             <?php 
               $no++; }
              ?>

        </table>
</body>
</html>
