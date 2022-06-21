 <?php include "partials/nav1.html";
    session_start();
    $id_produk = $_GET['id'];
    if (isset($_SESSION['keranjang'][$id_produk])) {
        $_SESSION['keranjang'][$id_produk] += 1;
    } else {
        $_SESSION['keranjang'][$id_produk] = 1;
    }
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    //larikan ke keranjang
    echo "<script>alert('produk sudah masuk ke keranjang');</script>";
    echo "<script> location='keranjang.php';</script>";

    ?>