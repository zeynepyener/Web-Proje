<!DOCTYPE html>
<html lang="tr" data-bs-theme="dark"> <!--Temada bootstrap kullandım.-->
<head>
  <title>WEB PROJEM</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kendimi ve memleketimi tanıtan bir web sayfası">
  <meta name="keywords" content="Hakkımda, Hobilerim">
  <meta name="author" content="Zeynep Yener">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="proje.css">
  <script>
    window.onload = function() {
        <?php
        session_start();
        if (isset($_SESSION["girisKontrol"]) && $_SESSION["girisKontrol"] == "GİRİŞ BAŞARILI") {
            echo 'alert("HOŞ GELDİNİZ B231210099!");';
            unset($_SESSION["girisKontrol"]); // Mesajın sadece bir kez görünmesini sağlamak için oturum değişkenini kaldırıyoruz.
        }
        ?>
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg" id="girisCubugu">
    <div class="container-fluid">
      <a class="navbar-brand" href="proje.html" title="Hakkında" id="hakkinda">Hakkında</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="ozgecmis.html" id="ozGecmis" title="Öz Geçmiş">Öz Geçmiş</a>
            <!--aria-current="page"-->
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Şehrim
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sehrim.html" title="Şehrim">Şehrim</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="mirasimiz.html" title="Mirasımız">Mirasımız</a></li>
            </ul>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="ilgialanlarim.html"  title="İlgi Alanlarım">İlgi Alanlarım</a>
        </ul>
              <a class="nav-link" href="iletisim.html" id="iletisim" title="İletişim">İletişim Formu</a>
              <!--aria-current="page"-->
      </div>
    </div>
  </nav>
  <div class="container custom-container"> <!--bootstrap-->
    <div class="row">
      <div class="col-sm-6">
        <br>
        <h1>HAKKIMDA:</h1>
        <hr>
        <br>
        <h5>
          Merhaba, ben Zeynep Yener. Bu sitenin tasarımcısıyım. 20 yaşımdayım. Kocaeli'de doğdum, büyüdüm. 2 kız
          kardeşim var.
          İlköğrenimimi Hisareyn İlkokulunda, ortaöğrenimimi Mecit Kavan İmamhatip Ortaokulunda tamamladıktan sonra
          liseyi de Mehmet Akif
          Ersoy Kız Anadolu İmamhatip Lisesinde bitirdim. Lisede bir yıl Arapça ağırlıklı Arapça-İngilizce hazırlık
          okudum. Lisede çeşitli
          aktivitelerde yer aldım. Çeşitli okuma topluluklarında bulundum, Arapça münazara seçmelerine katıldım,
          katıldığım bir proje için
          önce okul panelinde daha sonra il panelinde moderatörlük yaptım. Edebiyat ve felsefe üzerine okumalar yaptım.
          Şimdi de Sakarya
          Üniversitesinde Bilgisayar Mühendisliği Bölümünde 1.sınıf öğrencisiyim.
        </h5>
        <br> <br> <br> <br> <br>
        <img src="Resimler/kahvekitap.jpg" alt="Resim" class="img-fluid" title="Kahveyle kitap" id="kahvekitapResim">
        <br> <br> <br> <br> <br>
        <hr>
        <h5>
          Diğer bir hobimse keman çalmak. Lisenin 1.yılı müzik öğretmenimin de destekleriyle keman çalmayı öğrenmeye
          başladım.
          Yaklaşık 1 yıl kadar birlikte çalıştık. Araya pandeminin girmesiyle birlikte çalışmalarıma tek devam etmek
          zorunda kaldım.
          Bu dönemde internetten çok yardım aldım ve 1-2 ay gibi kısa bir sürede çeşitli şarkıları çalmaya başladım.
        </h5>
        <br>
        <h5>
          Ortaokul yıllarımın sonuna doğru yüzme dersi aldım ve lisanslı bir yüzücü oldum. Bisiklet sürmek de yaptığım
          sporlar arasındadır.
          Voleybol oynamayı ve maçlarını izlemeyi çok severim. Özellikle milli maçlarımızın vazgeçilmez seyircisiyimdir.
          Eğer siz de izlemeyi seviyorsanız voleybol resmine tıklayarak Avrupa şampiyonu olduğumuz Türkiye-Sırbistan
          maçını izleyebilirsiniz.:)
        </h5>
        <br> <br> <br> <br>
        <a href="https://www.haberturk.com/bulmaca" target="_blank" id="kareBulmaca">
          <img src="Resimler/karebulmaca.jpg" alt="Bulmaca Linki" title="Online Kare Bulmaca" id="bulmaca">
        </a>

      </div>
      <div class="col-sm-6">
        <br> <br> <br> <br> <br>
        <img src="Resimler/timthumb.jpg" alt="Resim" class="img-fluid" title="SAÜ Bilişim Fakültesi" id="saüResim">
        <br> <br> <br> <br> <br>
        <h1>HOBİLERİM:</h1>
        <hr>
        <h5>
          İlkokuldayken herkes biraz kitap okumuştur ama gerçek anlamda kendime ben bir okurum dediğim yıllar ortaokul
          yıllarımdı.
          6.sınıftayken kitap okuma alışkanlığım tam anlamıyla oturmuştu. Kitap benim için boş zaman aktivitesi değildi.
          Aksine kitap okumak için özel olarak vaktimi ayırıyor hatta bazen uykusuz kalıyordum. Kitabın yanında sade bir
          Türk kahvesi
          içmek de aynı şekilde en sevdiğim aktivitelerden biriydi hala da öyle.
        </h5>
        <br><br><br><br> <br> <br> <br> <br> <br>
        <a href="https://www.youtube.com/live/W9jPppHicJo?si=nt_9rM44Dpl-33_x" target="_blank">
          <img src="Resimler/voleybol.jpg" alt="Resim" class="img-fluid rounded float-start" title="Voleybol" id="spor1">
        </a>
        <img src="Resimler/bisiklet.jpg" alt="Resim" class="img-fluid rounded float-end" title="Bisiklet" id="spor2">
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <hr>
        <h5>
          Son olarak boş zamanlarımda online olarak bulmaca çözmeyi severim. Kelimelerle aram iyidir ve küçüklükten beri
          bir kelime yarışmalarından birine katılmak da hayalimdi. Eğer siz de günün bulmacasını çözmek isterseniz
          soldaki
          resme tıklamanız yeterli. :)
        </h5>
      </div>
    </div>
  </div>

</body>

</html>