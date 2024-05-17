<?php
include 'connection.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

$sql = "insert into user (nama, alamat, pekerjaan) values ('$nama','$alamat','$pekerjaan')";
$result_sql = $db->query($sql);
var_dump($result_sql);