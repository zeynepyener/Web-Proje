<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        $kullaniciAdi = $_POST['kullaniciAdi'];
        $sifre = $_POST['sifre'];

        if (($kullaniciAdi)=="b231210099@sakarya.edu.tr" && ($sifre)=="b231210099") {
            $_SESSION["girisKontrol"] = "GİRİŞ BAŞARILI";
            header("Location: proje.php");
        exit;
        } else {
            $_SESSION["girisKontrol"] = "GİRİŞ BAŞARISIZ";
            header("Location: giris.php");
        exit;
        }
    }
    ?>
    