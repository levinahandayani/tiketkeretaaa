<?php
require 'functions.php';
$tiket = query("SELECT * FROM tiket ORDER BY idTiket DESC");

if (isset($_POST["cari"])) {
    $tiket = cari($_POST["keywoard"]);
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Data Pemesan</title>

    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 118px;
            left: 210px;
            z-index: -1;
            display: none;
        }

        @media print {

        }
    </style>
</head>

<body>


    <div class="p-3 mb-3 col-md-14 bg-info text-white">
        <form class="form-inline my-2 my-lg-0" action="" method="post">
            <input class="form-control mr-sm-2" type="text" placeholder="Cari Data Pemesan" name="keywoard" autofocus autocomplete="off">
            <button class="btn btn-outline-light mr-2 my-2 my-sm-0" type="submit" name="cari">Search</button>

            <button class="btn btn-warning my-2 mr-2"><a href="cetak.php" target="_blank">Cetak</a></button>
            <button class="btn btn-warning my-2 mr-2"><a href="pemesanan.php" class="text-dark">
            <center>Tambahkan +</center>
            </a></button>
        </form>
        
    </div>


    <table class="table table-bordered mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">
                    <center>Nama</center>
                </th>
                <th scope="col">
                    <center>Asal</center>
                </th>
                <th scope="col">
                    <center>Tujuan</center>
                </th>
                <th scope="col">
                    <center>Dewasa</center>
                </th>
                <th scope="col">
                    <center>Bayi</center>
                </th>
                <th scope="col">
                    <center>Tanggal Berangkat</center>
                </th>
                <th scope="col">
                    <center>Tanggal Pulang</center>
                </th>
                <th scope="col">
                    <center>Pembayaran</center>
                </th>
                 <th scope="col">
                    <center>Harga</center>
                </th>
                <th scope="col"><button class="btn btn-success"><a href="tampilan.php" class="text-dark">
                            <center>Kembali</center>
                        </a></button></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($tiket as $row) : ?>
                <tr>
                    <th><?= $i; ?></th>
                    <th><?= $row["nama"]; ?></th>
                    <th><?= $row["asal"]; ?></th>
                    <th><?= $row["tujuan"]; ?></th>
                    <th><?= $row["dewasa"]; ?></th>
                    <th><?= $row["bayi"]; ?></th>
                    <th><?= $row["tgl_berangkat"]; ?></th>
                    <th><?= $row["tgl_pulang"]; ?></th>
                    <th><?= $row["pembayaran"]; ?></th>
                    <th><?= $row["harga"]; ?></th>
                    <th><a href="edit.php?id=<?= $row["idTiket"]; ?>">Edit</a> |
                        <a href="hapus.php?id=<?= $row["idTiket"]; ?>" onclick="return confirm('Lanjutkan Hapus?');">Hapus</a></th>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>