<?php
include('oturum.php');

$sql = "SELECT * FROM albumler";
$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Albüm Listesi</title>
</head>
<body>
    <h2>Albüm Listesi</h2>
    <table border="1">
        <tr>
            <th>Sanatçı Adı</th>
            <th>Albüm Adı</th>
            <th>Çıkış Tarihi</th>
            <th>Telif Hakkı Bilgisi</th>
            <th>Lisans Bilgisi</th>
            <th>Düzenle</th>
            <th>Sil</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['sanatci_adi']; ?></td>
            <td><?php echo $row['album_adi']; ?></td>
            <td><?php echo $row['cikis_tarihi']; ?></td>
            <td><?php echo $row['telif_hakki_bilgisi']; ?></td>
            <td><?php echo $row['lisans_bilgisi']; ?></td>
            <td><a href="album_duzenle.php?id=<?php echo $row['id']; ?>">Düzenle</a></td>
            <td><a href="album_sil.php?id=<?php echo $row['id']; ?>">Sil</a></td>
        </tr>
        <?php } ?>
    </table>
    <a href="hosgeldiniz.php">Ana Sayfaya Dön</a>
</body>
</html>
