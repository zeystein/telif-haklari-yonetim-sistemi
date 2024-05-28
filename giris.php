<?php
session_start();
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullanici_adi = mysqli_real_escape_string($db, $_POST['kullanici_adi']);
    $sifre = mysqli_real_escape_string($db, $_POST['sifre']); 

    $sql = "SELECT id, sifre FROM kullanicilar WHERE kullanici_adi = '$kullanici_adi'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(password_verify($sifre, $row['sifre'])) {
        $_SESSION['login_user'] = $kullanici_adi;
        header("location: hosgeldiniz.php");
    } else {
        $error = "Geçersiz kullanıcı adı veya şifre.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
</head>
<body>
    <h2>Giriş Formu</h2>
    <form method="post" action="">
        Kullanıcı Adı: <input type="text" name="kullanici_adi" required><br>
        Şifre: <input type="password" name="sifre" required><br>
        <input type="submit" value="Giriş Yap">
    </form>
</body>
</html>
