<!DOCTYPE html>
<html lang="tr" data-bs-theme="dark">

<head>
    <title>Log In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Giriş sayfası">
    <meta name="author" content="Zeynep Yener">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script>
        window.onload = function() {
            <?php
            session_start();
            if (isset($_SESSION["girisKontrol"]) && $_SESSION["girisKontrol"] == "GİRİŞ BAŞARISIZ") {
                echo 'alert("Girdiğiniz bilgilerde hata var.Lütfen tekrar deneyiniz!");';
                unset($_SESSION["girisKontrol"]); // Mesajın sadece bir kez görünmesini sağlamak için oturum değişkenini kaldırıyoruz.
            }
            ?>
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">


    <div class="container ">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <div>   
                    <form class="px-4 py-3" action="login.php" method="post" formenctype="multipart/form-data">
                        <div class="mb-3">
                            <br> <br> <br> <br> <br> <br> <br> <br> <br>
                            <label for="exampleDropdownFormEmail1" class="form-label">Kullanıcı Adı:</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" name="kullaniciAdi"
                                placeholder="b1812100001”@sakarya.edu.tr">
                        </div>
                        <div class="mb-3">
                            <br>
                            <label for="exampleDropdownFormPassword1" class="form-label">Şifre:</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" name="sifre"
                                placeholder="b1812100001">
                        </div>
                        <br> 
                        <center>
                            <button type="submit" class="btn btn-primary" name="girisButonu">Giriş Yap</button>
                        </center>
                    </form>
                </div>
            </div>


</body>

</html>