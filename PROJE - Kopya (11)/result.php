<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullaniciAdi = htmlspecialchars($_POST['kullaniciAdi']);
    $sifre = htmlspecialchars($_POST['sifre']);
    $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
    $dogumTarihi = htmlspecialchars($_POST['dogumTarihi']);
    $universite = htmlspecialchars($_POST['universite']);
    $bolum = htmlspecialchars($_POST['bolum']);
    $hobiler = $_POST['hobiler'];
    $mesaj = htmlspecialchars($_POST['mesaj']);

    // Dosya işlemleri
    if (isset($_FILES['dosya']) && $_FILES['dosya']['error'] == 0) {
        $dosyaAdi = basename($_FILES['dosya']['name']);
        $dosyaYolu = "uploads/" . $dosyaAdi;
        move_uploaded_file($_FILES['dosya']['tmp_name'], $dosyaYolu);
    } else {
        $dosyaAdi = "Dosya yüklenemedi.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonuçları</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg" id="girisCubugu">
        <div class="container-fluid">
            <a class="navbar-brand" href="iletisim.html" title="İletişim sayfasına gider" id="hakkinda">
                <img src="Resimler/backicon.png">
                Geri
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Gönderilen Bilgiler</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>Kullanıcı Adı:</strong> <?php echo $kullaniciAdi; ?></li>
            <li class="list-group-item"><strong>Şifre:</strong> <?php echo $sifre; ?></li>
            <li class="list-group-item"><strong>Cinsiyet:</strong> <?php echo $cinsiyet; ?></li>
            <li class="list-group-item"><strong>Doğum Tarihi:</strong> <?php echo $dogumTarihi; ?></li>
            <li class="list-group-item"><strong>Üniversite:</strong> <?php echo $universite; ?></li>
            <li class="list-group-item"><strong>Bölüm:</strong> <?php echo $bolum; ?></li>
            <li class="list-group-item"><strong>Hobiler:</strong> <?php echo implode(", ", $hobiler); ?></li>
            <li class="list-group-item"><strong>Yüklenen Dosya:</strong> <?php echo $dosyaAdi; ?></li>
            <li class="list-group-item"><strong>Mesaj:</strong> <?php echo $mesaj; ?></li>
        </ul>
    </div>
</body>

</html>
