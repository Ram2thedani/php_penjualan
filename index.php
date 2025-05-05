<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column justify-content-center align-items-center vh-100">
    <h1 class="mb-4">Dashboard</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card text-center shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">Data User</h5>
                        <p class="card-text">Kelola data user.</p>
                        <a href="home/user/index.php" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">Data Barang</h5>
                        <p class="card-text">Kelola Data Barang.</p>
                        <a href="home/barang/" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">Transaksi</h5>
                        <p class="card-text">Kelola Data Transaksi.</p>
                        <a href="home/Transaksi/" class="btn btn-warning">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">Logout</h5>
                        <p class="card-text">End your session.</p>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>