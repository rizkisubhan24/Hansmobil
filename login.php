<?php include "partials/nav1.html";
include "connect.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <form  method="post">
            <label for="email">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="email" placeholder="email" id="email" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
          <button name="login">login</button>
        </form>
    </div>
    <?php
    if (isset($_POST['login'])) {
        $email = $_POST["email_pelanggan"];
        $password = $_POST["password_pelanggan"];
        $ambil = $connect -> query("SELECT * FROM pelanggan
        WHERE email_pelanggan = '$email' AND password_pelanggan = '$password'");

        $akuncocok = $ambil->num_rows;
 var_dump( $akuncocok);
 die;
        if ($akuncocok==1) {
            $akun = $ambil->fetch_assoc();

            $_SESSION['pelanggan'] = $akun;
            echo "<script>alert('anda sukses login); </script>";
            // echo "<script>location= 'checkout.php'; </script>";
            header("location:checkout.php");
        }
        else{
            echo "<script>alert('anda gagal login,periksa akun anda); </script>";
            echo "<script>location= 'login.php'; </script>";
        }
    }

    ?>
</body>

</html>