<?php

$con = mysqli_connect("172.18.0.2","root","123","Trucorp");
$sql = "select * from Trucorp";
$res = mysqli_query($con,$sql);
$jumlah = mysqli_num_rows($res);


echo "Jumlah users ada: " . $jumlah;

mysqli_close($con);

?>
