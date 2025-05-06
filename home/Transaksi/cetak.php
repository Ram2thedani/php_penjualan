<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .receipt {
            max-width: 350px;
            margin: auto;
            padding: 20px;
            border: 2px dashed #000;
            background: #fff;
            font-family: monospace;
        }

        .receipt h3 {
            text-align: center;
            margin-bottom: 15px;
        }

        .receipt p {
            border-bottom: 1px dashed #000;
            padding: 5px 0;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="receipt">
        <h3>Struk Pembelian</h3>

        <?php
        include '../../config/koneksi.php';
        $id_transaksi = $_GET['id_transaksi'];

        // Group items by id_barang and count occurrences
        $result = mysqli_query($conn, "SELECT barang.nama_barang, COUNT(detail_transaksi.id_barang) AS jumlah 
                               FROM detail_transaksi 
                               INNER JOIN barang ON detail_transaksi.id_barang = barang.id_barang 
                               WHERE id_transaksi = '$id_transaksi' 
                               GROUP BY detail_transaksi.id_barang");

        while ($row = mysqli_fetch_assoc($result)) :
        ?>
            <p><?= $row['nama_barang'] ?> <small>x<?= $row['jumlah'] ?></small></p>
        <?php endwhile; ?>


        <div class="footer">
            Terima kasih atas pembelian Anda!
        </div>
    </div>
</body>

</html>