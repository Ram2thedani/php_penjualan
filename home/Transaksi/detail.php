<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include '../../config/koneksi.php';
    $id_transaksi = $_GET['id_transaksi'];
    ?>
    <div class="container">
        <h3 class="text-center mb-3">Barang</h3>
        <a href="index.php" class="btn btn-warning">Kembali</a>
        <a href="addDetail.php?id_transaksi=<?php echo $id_transaksi ?>" class="btn btn-primary">Tambah Barang</a>
        <div
            class="table-responsive">
            <table
                class="table table-striped">
                <thead>
                    <tr>

                        <th scope="col">Nama Barang</th>
                        <th scope="col">ID Supplier</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $result = mysqli_query($conn, "SELECT 
                        detail_transaksi.id_transaksi, 
                        barang.nama_barang, 
                        barang.harga, 
                        supplier.nama_supplier 
                        FROM detail_transaksi 
                            INNER JOIN barang ON detail_transaksi.id_barang = barang.id_barang 
                            INNER JOIN supplier ON barang.id_supplier = supplier.id_supplier
                        WHERE detail_transaksi.id_transaksi = '$id_transaksi'; ");

                    while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <tr>

                            <td><?= $row['nama_barang'] ?></td>
                            <td><?= $row['nama_supplier'] ?></td>
                            <td><?= $row['harga'] ?></td>



                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="checkout.php?id_transaksi=<?php echo $id_transaksi ?>" class="btn btn-success">Checkout</a>
            <a href="hapusDetail.php?id_transaksi=<?= $id_transaksi ?>" class="btn btn-danger">Reset</a>
        </div>

    </div>
</body>

</html>