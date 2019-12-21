<?php
require 'functions.php';
$jadwal = query("SELECT * FROM jadwal");

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

    <title>Jadwal Kereta</title>
</head>

<body>

    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light mb-1">
        <a class="navbar-brand text-dark" href="tampilan.php">
            <img src="img/logoo.jpg" width="55" height="35" class="d-inline-block align-top" alt="">
            Kereta Api Indonesia
        </a>
        <div class="row w-25 mx-auto"><B class="text-dark"> JADWAL KERETA API</B></div>
        <?php 
        echo date('l, j-M-Y');
        echo "<br/>";
        ?>
    </nav>
    <!--akhir navbar-->

<div class="container">
    <table class="table table-bordered mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">
                    Statiun1
                </th>
                <th scope="col">
                    Statiun2
                </th>
                <th scope="col">
                    Berangkat
                </th>
                <th scope="col">
                    Sampai
                </th>
                <th scope="col">
                    Harga
                </th>
               
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($jadwal as $row) : ?>
                <tr>
                    <th><?= $i; ?></th>
                    <th><?= $row["statiun1"]; ?></th>
                    <th><?= $row["statiun2"]; ?></th>
                    <th><?= $row["berangkat"]; ?></th>
                    <th><?= $row["sampai"]; ?></th>
                    <th><?= $row["harga"]; ?></th>
                   
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>