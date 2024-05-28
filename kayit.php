<?php
include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullanici_adi = mysqli_real_escape_string($db, $_POST['kullanici_adi']);
    $sifre = mysqli_real_escape_string($db, $_POST['sifre']); 
    $hashed_sifre = password_hash($sifre, PASSWORD_DEFAULT);

    $sql = "INSERT INTO kullanicilar (kullanici_adi, sifre) VALUES ('$kullanici_adi', '$hashed_sifre')";
    if(mysqli_query($db, $sql)) {
        echo "Kayıt başarılı!";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($db);
    }
}

header("Location:giris.php");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Ol</title>
</head>
<body>
    <h2>Kayıt Formu</h2>
    <form method="post" action="">
        Kullanıcı Adı: <input type="text" name="kullanici_adi" required><br>
        Şifre: <input type="password" name="sifre" required><br>
        <input type="submit" value="Kayıt Ol">
    </form>
</body>
</html>
