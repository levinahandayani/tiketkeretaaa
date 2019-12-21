<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$tiket = query("SELECT * FROM tiket ORDER BY idTiket DESC");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html>
<head>
	<title>data pemesanan</title>
	<link rel="stylesheet" href="print.css">
</head>
<body>
	<h1>data pemesanan</h1>

	<table border="1" cellpadding="10" cellspacing="0" class="table table-bordered mt-3">
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
                    <center>Harga</center>
                </th>    
             </tr>';

             $i = 1;
             foreach ($tiket as $row) {
             	$html .= '<tr>
             	<td>'. $i++ .'</td>
             	<td>'. $row["nama"] .'</td>
             	<td>'. $row["asal"] .'</td>
             	<td>'. $row["tujuan"] .'</td>
             	<td>'. $row["dewasa"] .'</td>
             	<td>'. $row["bayi"] .'</td>
             	<td>'. $row["tgl_berangkat"] .'</td>
             	<td>'. $row["tgl_pulang"] .'</td>
             	<td>'. $row["harga"] .'</td>
             	</tr>';
             }

$html .= '</table>

</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('data-pemesanan.pdf', \Mpdf\Output\Destination::INLINE);

?>
