<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamnbah Produk</title>
</head>

<body>
    <h2>Tambah Produk</h2>

    <form method="POST">
        <div class="form-group">
            <label>gambar</label><br>
            <input type="file" class="form-control" name="gambar">
        </div>
        <div class="form-group">
            <label>pabrikan</label><br>
            <input type="text" class="form-control" name="pabrikan">
        </div>
        <div class="form-group">
            <label>type</label><br>
            <input type="text" class="form-control" name="type">
        </div>
        <div class="form-group">
            <label>harga</label><br>
            <input type="text" class="form-control" name="harga">
        </div>
        <div class="form-group">
            <label>tahun</label><br>
            <input type="text" class="form-control" name="tahun">
        </div>
        <div class="form-group">
            <label>stok</label><br>
            <input type="number" class="form-control" name="stok">
        </div>
        <div class="form-group">
            <label>warna</label><br>
            <input type="text" class="form-control" name="warna">
        </div>
        <button class="btn-primary" name="save">simpan</button>
    </form>
    <?php
    if (isset($POST['save'])) {
        $nama = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi, "../image/$nama");
        $connect->query("INSERT INTO products(pabrikan, type, harga, warna, tahun, gambar, stok)
        values('$_POST'[pabrikan]'.'$_POST[type]'.'$_POST[harga]'.'$_POST[warna])'.'
        $_POST[tahun]'.'$_POST[gambar]'.'$_POST[stok])");

        echo "<div class= 'alert alert-info'>data tersimpan</div>";
        echo "<meta http-equiv = 'refresh' conten= '1; url= produk.php?halaman = produk'>";
    }
    ?>
</body>

</html>