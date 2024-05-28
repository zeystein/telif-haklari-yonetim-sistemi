<?php
include('oturum.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM albumler WHERE id = $id";
    $result = mysqli_query($db, $sql);
    $album = mysqli_fetch_assoc($result);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $sanatci_adi = mysqli_real_escape_string($db, $_POST['sanatci_adi']);
    $album_adi = mysqli_real_escape_string($db, $_POST['album_adi']);
    $cikis_tarihi = mysqli_real_escape_string($db, $_POST['cikis_tarihi']);
    $telif_hakki_bilgisi = mysqli_real_escape_string($db, $_POST['telif_hakki_bilgisi']);
    $lisans_bilgisi = mysqli_real_escape_string($db, $_POST['lisans_bilgisi']);

    $sql = "UPDATE albumler SET sanatci_adi='$sanatci_adi', album_adi='$album_adi', cikis_tarihi='$cikis_tarihi', telif_hakki_bilgisi='$telif_hakki_bilgisi', lisans_bilgisi='$lisans_bilgisi' WHERE id = $id";
    if(mysqli_query($db, $sql)) {
        echo "Albüm başarıyla güncellendi!";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Albüm Düzenle</title>
</head>
<body>
    <h2>Albüm Düzenle</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $album['id']; ?>">
        Sanatçı Adı: <input type="text" name="sanatci_adi" value="<?php echo $album['sanatci_adi']; ?>" required><br>
        Albüm Adı: <input type="text" name="album_adi" value="<?php echo $album['album_adi']; ?>" required><br>
        Çıkış Tarihi: <input type="date" name="cikis_tarihi" value="<?php echo $album['cikis_tarihi']; ?>" required><br>
        Telif Hakkı Bilgisi: <textarea name="telif_hakki_bilgisi" required><?php echo $album['telif_hakki_bilgisi']; ?></textarea><br>
        Lisans Bilgisi: <textarea name="lisans_bilgisi" required><?php echo $album['lisans_bilgisi']; ?></textarea><br>
        <input type="submit" value="Güncelle">
    </form>
    <a href="album_listele.php">Albüm Listesine Dön</a>
</body>
</html>
