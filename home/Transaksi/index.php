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
        <h3 class="text-center mb-3">Transaksi</h3>
        <a href="../../index.php" class="btn btn-warning">Kembali</a>
        <a href="addTransaksi.php" onclick="confirm('Konfirmasi Tambah Transaksi Baru?')" class="btn btn-primary">Tambah Transaksi</a>
        <div
            class="table-responsive">
            <table
                class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID Transaksi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../../config/koneksi.php';
                    $result = mysqli_query($conn, "SELECT * FROM transaksi order by tanggal desc");

                    while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <tr>
                            <td><?= $row['id_transaksi'] ?></td>
                            <td><?= $row['tanggal'] ?></td>
                            <td><?= $row['status'] ?></td>

                            <td>
                            <td>
                                <?= ($row['status'] !== "Selesai") ? '<a href="detail.php?id_transaksi=' . $row['id_transaksi'] . '" class="btn btn-warning">Lengkapi Transaksi</a> ' . '<a href="hapus.php?id_transaksi=' . $row['id_transaksi'] . '" class="btn btn-danger">Batalkan</a>' : '' ?>

                            </td>

                            </td>

                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>