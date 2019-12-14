<?php

$sql = "SELECT * FROM coba";

$coba = mysqli_query($koneksi, $sql);

$page = $_GET["page"];


if (!empty($_REQUEST['delete'])) {
    $id = $_REQUEST['delete'];
    $sql = "DELETE FROM coba WHERE cobaid = '$id'";
    $hapus = mysqli_query($koneksi, $sql);
    header("location:index.php?page=coba");
}
?>

<div class="judul text-center">
    <h2>Coba CRUD PHP Native</h2>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table">
            <div class="tambah">
                <a type="button" href="index.php?page=tambah" class="btn btn-success">Tambah Data</a>
            </div>
            <thead class="thead-dark table-bordered">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Coba</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($coba as $c) {
                    ?>
                    <tr>
                        <td width="10px"><?= $no ?></td>
                        <td><?= $c['cobaid'] ?></td>
                        <td><?= $c['namacoba'] ?></td>
                        <td><a type="button" href="index.php?page=edit&edit=<?= $c['cobaid'] ?>" class="btn btn-warning ">Edit</a>
                            <a type="button" href="index.php?page=coba&delete=<?= $c['cobaid'] ?>" onclick="return confirm('Yakin ingin dihapus??')" class="btn btn-danger text-white">Delete</a></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>

            </tbody>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>