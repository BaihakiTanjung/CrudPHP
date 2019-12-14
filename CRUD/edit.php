<?php

$id = $_GET['edit'];
$data = mysqli_query($koneksi, "select * from coba where cobaid='$id'");
?>
<div class="judul text-center">
    <h2>Coba CRUD PHP Native</h2>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 text-white">
        <?php
        foreach ($data as $e) {
            # code...
            ?>
            <form method="POST" action="prosesedit.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="number" name="cobaid" class="form-control" value="<?= $e['cobaid'] ?>">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="namacoba" class="form-control" value="<?= $e['namacoba'] ?>" placeholder="Enter Nama">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        <?php
        }
        ?>
    </div>
    <div class="col-md-2"></div>
</div>