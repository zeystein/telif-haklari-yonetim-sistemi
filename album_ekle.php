<?php
include('oturum.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $sanatci_adi = mysqli_real_escape_string($db, $_POST['sanatci_adi']);
    $album_adi = mysqli_real_escape_string($db, $_POST['album_adi']);
    $cikis_tarihi = mysqli_real_escape_string($db, $_POST['cikis_tarihi']);
    $telif_hakki_bilgisi = mysqli_real_escape_string($db, $_POST['telif_hakki_bilgisi']);
    $lisans_bilgisi = mysqli_real_escape_string($db, $_POST['lisans_bilgisi']);

    $sql = "INSERT INTO albumler (sanatci_adi, album_adi, cikis_tarihi, telif_hakki_bilgisi, lisans_bilgisi) VALUES ('$sanatci_adi', '$album_adi', '$cikis_tarihi', '$telif_hakki_bilgisi', '$lisans_bilgisi')";
    if(mysqli_query($db, $sql)) {
        echo "Albüm başarıyla eklendi!";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Albüm Ekle</title>
</head>
<body>
    <h2>Albüm Ekle</h2>
    <form method="post" action="">
        Sanatçı Adı: <input type="text" name="sanatci_adi" required><br>
        Albüm Adı: <input type="text" name="album_adi" required><br>
        Çıkış Tarihi: <input type="date" name="cikis_tarihi" required><br>
        Telif Hakkı Bilgisi: <textarea name="telif_hakki_bilgisi" required></textarea><br>
        Lisans Bilgisi: <textarea name="lisans_bilgisi" required></textarea><br>
        <input type="submit" value="Ekle">
    </form>
    <a href="hosgeldiniz.php">Ana Sayfaya Dön</a>
</body>
</html>
