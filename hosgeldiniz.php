<?php
include('oturum.php');
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hoşgeldiniz</title>
</head>
<body>
    <h2>Hoşgeldiniz, <?php echo $login_session; ?></h2>
    <a href="album_ekle.php">Albüm Ekle</a><br>
    <a href="album_listele.php">Albüm Listesi</a><br>
    <a href="cikis.php">Çıkış Yap</a>
</body>
</html>
