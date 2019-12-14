<?php

$namacoba = $_POST['namacoba'];

include_once 'koneksi.php';


$tombol = $_POST['proses'];
switch ($tombol) {
    case 'tambah':

        $sql = "INSERT INTO coba VALUES ('','$namacoba')";

        break;
    case 'update';

        break;

    case 'delete';

        break;
    default:
        # code...
        break;
}

$sql = mysqli_query($koneksi, $sql);

header("location:index.php?page=coba");
