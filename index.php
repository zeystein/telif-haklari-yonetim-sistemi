<?php
session_start();

if(isset($_SESSION['login_user'])) {
    header("location: hosgeldiniz.php");
} else {
    header("location: giris.php");
}
?>
