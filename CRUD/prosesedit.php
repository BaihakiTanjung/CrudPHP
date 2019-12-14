<?php

include_once 'koneksi.php';

$cobaid = $_POST['cobaid'];
$namacoba = $_POST['namacoba'];

$sql = "UPDATE `coba` SET `namacoba` = '$namacoba' WHERE `coba`.`cobaid` = $cobaid";

$update = mysqli_query($koneksi, $sql);

if ($update) {
  header("location:index.php?page=coba");
} else {
  echo "data gagal di kirim";
}
