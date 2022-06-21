<?php include "partials/nav1.html";
include "connect.php";
session_start();

// echo "<pre>";
// print_r($_SESSION["keranjang"]);
// echo "</pre>";
?>

<section class="konten">
    <div class="container">
        <h1>Keranjang Belanja</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>no</th>
                    <th>produk</th>
                    <th>type</th>
                    <th>harga</th>
                    <th>jumlah</th>
                    <th>total</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) : ?>
                    <!-- menampilkan produk yg diulang berdasarkan id_produk -->
                    <?php
                    $ambil = $connect->query("SELECT * FROM products WHERE id_produk= '$id_produk'");
                    $pecah = $ambil->fetch_assoc();
                    $subharga = $pecah["harga"] * $jumlah;
                    // echo "<pre>";
                    // print_r($pecah);
                    // echo "</pre>";

                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $pecah['pabrikan']; ?></td>
                        <td><?php echo $pecah['type']; ?></td>
                        <td><?php echo number_format($pecah['harga']); ?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td><?php echo number_format($subharga); ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="lanjutan">
            <button> <a href="produk.php">lanjutkan belanja</a></button>
            <button> <a href="checkout.php">checkout</a></button>
        </div>
    </div>
</section>