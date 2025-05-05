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
    <div class="container">
        <h3 class="text-center mb-3">Barang</h3>
        <a href="viewtambah.php" class="btn btn-primary">Tambah Barang</a>
        <div
            class="table-responsive">
            <table
                class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">ID Supplier</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../../config/koneksi.php';
                    $result = mysqli_query($conn, "SELECT 
                    barang.id_barang, 
                    barang.nama_barang,
                    supplier.nama_supplier,
                    barang.harga FROM barang 
                    INNER JOIN supplier ON barang.id_supplier = supplier.id_supplier");

                    while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <tr>
                            <td><?= $row['id_barang'] ?></td>
                            <td><?= $row['nama_barang'] ?></td>
                            <td><?= $row['nama_supplier'] ?></td>
                            <td><?= $row['harga'] ?></td>
                            <td><a href="viewedit.php?id_barang=<?php echo $row['id_barang'] ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?id_barang=<?php echo $row['id_barang'] ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>