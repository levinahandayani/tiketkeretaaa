<?php
require 'functions.php';

$id = $_GET["id"];

$tkt = query("SELECT * FROM tiket WHERE idTiket = $id")[0];

if (isset($_POST["submit"])) {

    if (edit($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'data.php';
            </script>
        ";
    } else {
        echo " <script>
        alert('data gagal diubah!');
        document.location.href = 'data.php';
        </script>";
    }
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

    <title>Ubah Data</title>
</head>

<body>

    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00CED1;">
        <a class="navbar-brand" href="#">
            <img src="img/logoo.jpg" width="55" height="35" class="d-inline-block align-top" alt="">
            Kereta Kapal Api
        </a>
        <div class="row w-25 mx-auto"><B>UBAH DATA PEMESANAN</B></div>
        <?php
        echo date('l ,j-M-Y');
        echo "<br/>";
        ?>
    </nav>
    <!--akhir navbar-->

    <form class="container" action=" " method="post" class="needs-validation" novalidate>
        <input type="hidden" name="id" value="<?= $tkt["idTiket"]; ?>">
        <div class="row w-50 mx-auto">
            <div class="p-3 mb-2 mt-3 bg-info">
                <div class="col">
                    <div class="form-group ">
                        <i class="fas fa-user"></i>
                        <label for="name">Nama</label>
                        <input type="text" class="form-control col-md-12" id="name" name="name" autocomplete="off" required value="<?= $tkt["nama"]; ?>">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <i class="fas fa-map-marker-alt"></i>
                            <label for="asal">Asal</label>
                            <input type="text" class="form-control col-md-12" id="asal" name="asal" autocomplete="off" required value="<?= $tkt["asal"]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fas fa-map-marker-alt"></i>
                            <label for="tujuan">Tujuan</label>
                            <input type="text" class="form-control col-md-12" id="tgl" name="tujuan" autocomplete="off" required value="<?= $tkt["tujuan"]; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <i class="fas fa-male"></i>
                            <i class="fas fa-female"></i>
                            <label for="dewasa">Dewasa</label>
                            <input type="number" class="form-control col-md-12" id="dewasa" name="dewasa" autocomplete="off" required value="<?= $tkt["dewasa"]; ?>">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fas fa-baby"></i>
                            <label for="bayi">Bayi</label>
                            <input type="number" class="form-control col-md-12" id="bayi" name="bayi" autocomplete="off" required value="<?= $tkt["bayi"]; ?>">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <i class="fas fa-calendar-alt"></i>
                            <label for="tgl">Tanggal Berangkat</label>
                            <input type="date" class="form-control col-md-12" id="tgl" name="tglbrngkt" autocomplete="off" required value="<?= $tkt["tgl_berangkat"]; ?>">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fas fa-calendar-week"></i>
                            <label for="tgl">Tanggal Pulang</label>
                            <input type="date" class="form-control col-md-12" id="tgl" name="tglpulang" autocomplete="off" required value="<?= $tkt["tgl_pulang"]; ?>">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-money-check-alt"></i>
                        <label for="pembayaran">Pembayaran</label>
                        <input type="text" class="form-control col-md-12" id="pembayaran" name="pembayaran" autocomplete="off" required value="<?= $tkt["pembayaran"]; ?>">
                    </div>
                     <div class="form-group">
                        <i class="fas fa-dollar-sign"></i>
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control col-md-12" id="harga" name="harga" autocomplete="off" required value="<?= $tkt["harga"]; ?>">
                    </div>

                    <button class="btn btn-primary col-md-12" type="submit" name="submit">Lanjutkan Ubah?</button>
                </div>
            </div>
        </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html