<?php
include('oturum.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM albumler WHERE id = $id";
    if(mysqli_query($db, $sql)) {
        echo "Albüm başarıyla silindi!";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($db);
    }
}
header("location: album_listele.php");
?>
