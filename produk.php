<?php include "partials/nav1.html";
include "connect.php";

$sql = "SELECT * from products";
$value_tnn = mysqli_query($connect, $sql); // cara ambil data dr sql
$products = mysqli_fetch_all($value_tnn, MYSQLI_ASSOC); //merubah data sql jadi array
/*
$cars = [
    [
        "pabrikan" => "honda",
        'type' => "C-HR 1.8 A/T ",
        'harga' => "Rp. 520.000.000,-",
        'tahun' => 2017,
        'warna' => ['hitam', 'putih', 'silver'],
        'gambar' => 'image/mobil1.jpeg',
        'stok'  => "5"
    ],
    [
        "pabrikan" => "Toyota",
        'type' => "C-HR 1.8 A/T (Single Tone)",
        'harga' => "Rp. 521.800.000,-",
        'tahun' => 2017,
        'warna' => ['hitam', 'green', 'silver'],
        'gambar' => 'image/mobil4.jpg',
        'stok'  => "5"
    ],
    [
        "pabrikan" => "Toyota",
        'type' => "C-RR 1.8 A/T (Single Tone)",
        'harga' => "Rp. 721.800.000,-",
        'tahun' => 2017,
        'warna' => ['hitam', 'putih', 'blue'],
        'gambar' => 'image/mobil6.jpg',
        'stok'  => "5"
    ],
    [
        "pabrikan" => "ferrari",
        'type' => "ferrari 488 spider ",
        'harga' => "Rp.10.000.000.000,-",
        'tahun' => 2017,
        'warna' => ['hitam', 'red', 'silver'],
        'gambar' => 'image/mobil5.jpg',
        'stok'  => "5"
    ],
    [
        "pabrikan" => "mercedes",
        'type' => "mercedes-AMG coupe",
        'harga' => "Rp. 1.521.800.000,-",
        'tahun' => 2019,
        'warna' => ['hitam', 'putih', 'silver'],
        'gambar' => 'image/mobil7.png',
        'stok'  => "5"
    ],
    [
        "pabrikan" => "lamborghini",
        'type' => "Hi Ace Commuter M/T",
        'harga' => "Rp. 628.500.000,-",
        'tahun' => 2017,
        'warna' => ['hitam', 'putih', 'silver'],
        'gambar' => 'image/mobil8.jpg',
        'stok'  => "5"
    ],
    [
        "pabrikan" => "mitsubishi",
        'type' => "C-HR 1.8 A/T SERIES",
        'harga' => "Rp. 651.800.000,-",
        'tahun' => 2017,
        'warna' => ['hitam', 'putih', 'silver'],
        'gambar' => 'image/mobil3.jpg',
        'stok'  => "5"
    ],
    [
        "pabrikan" => "Toyota",
        'type' => "C-RR 2.8 A/T (Single Tone)",
        'harga' => "Rp. 521.500.000,-",
        'tahun' => 2017,
        'warna' => ['hitam', 'putih', 'silver'],
        'gambar' => 'image/mobil9.jpg',
        'stok'  => "5"
    ],
    [
        "pabrikan" => "Toyota",
        'type' => "C-HR 1.8 M/R ",
        'harga' => "Rp. 721.800.000,-",
        'tahun' => 2019,
        'warna' => ['hitam', 'putih', 'silver'],
        'gambar' => 'image/mobil10.png',
        'stok'  => "5"
    ],
    [
        "pabrikan" => "Toyota",
        'type' => "H-HR 3.8 SR/F (Single Tone)",
        'harga' => "Rp. 901.400.000,-",
        'tahun' => 2020,
        'warna' => ['hitam', 'blue', 'silver', 'red'],
        'gambar' => 'image/mobil2.jpg',
        'stok'  => "5"

    ]
];
*/
?>
<link rel="stylesheet" href="style.css">
<h3>ALL PRODUK</h3>
<ul class="atribut">
    <?php foreach ($products as $product) : ?>
        <li>
            <img src='<?= $product['gambar'] ?>'><br>
            <div class="deskripsi">
                <?= $product['pabrikan'] ?> <br>
                <?= $product['type'] ?> <br>
                <?= $product['harga'] ?> <br>
                <?= $product['tahun'] ?> <br>
                stok : <?= $product['stok'] ?> <br>

                <?php foreach ($product['warna'] as $warna) : ?>
                    <?= $warna ?>,
                <?php endforeach ?>
                <div>
                    <a href="beli.php?id= <?= $product['id_produk']; ?>">
                        <button>beli</button></a>
                </div>

            </div>

        </li>
    <?php endforeach ?>
</ul>
</div>
<div class="add">
    <a href="tambah produk.php?id= <?= $product['id_produk']; ?>">
        <button>Tambah Produk</button></a>
</div>

<?php include "partials/footer.html" ?>

</body>

</html>