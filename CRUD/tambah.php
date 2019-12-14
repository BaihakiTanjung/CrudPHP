<?php

$sql = "SELECT * FROM coba ORDER BY cobaid DESC LIMIT 1";

$tampilkanid = mysqli_query($koneksi, $sql);

foreach ($tampilkanid as $t) {

    $ta = $t['cobaid'] + 1;
}
?>
<div class="judul text-center">
    <h2>Coba CRUD PHP Native</h2>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 text-white">
        <form method="post" action="prosescoba.php">
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>

                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?= $ta ?>" disabled>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama</label>
                <input type="text" name="namacoba" class="form-control" id="exampleInputPassword1" placeholder="Enter Nama">
            </div>
            <button type="submit" name="proses" value="tambah" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>