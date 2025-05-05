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
    $id_transaksi = $_GET['id_transaksi'];

    ?>
    <div class="container">
        <h3 class="text-center mb-3">Edit User</h3>
        <form action="prosesaddDetail.php" method="post">
            <div class="mb-3">
                <label for="" class="form-label">ID Transaksi</label>
                <input
                    type="text"
                    class="form-control"
                    name="id_transaksi"
                    readonly
                    id=""
                    value="<?php echo $id_transaksi ?>"
                    aria-describedby="helpId"
                    placeholder="" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Barang</label>
                <select name="id_barang" class="form-control" id="">
                    <?php
                    include '../../config/koneksi.php';
                    $result = mysqli_query($conn, "SELECT * FROM barang");

                    while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <option value="<?php echo $row['id_barang'] ?>"><?php echo $row['nama_barang'] ?></option>
                    <?php
                    endwhile; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</body>

</html>