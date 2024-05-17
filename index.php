<?php
session_start();

// Kullanıcı oturumda ise ve kullanıcı adı set edilmişse, $logged_in true olacak
$logged_in = isset($_SESSION['username']) && !empty($_SESSION['username']);

if (!$logged_in) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/index.css">
    <title>Document</title>
</head>
<body>

    <?php if ($logged_in): ?>
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>You have successfully logged in.</p>
    <?php else: ?>
    <?php endif; ?>

    <div class="topbar">
        <div class="wrapper">
            <div class="center">
                <a href="index.php">Hakkında</a>
                <a href="pages/ozgecmis.html">Özgeçmiş</a>
                <a href="pages/sehrim.html">Şehrim</a>
                <a href="pages/takimimiz.html">Takımımız</a>
                <a href="pages/iletisim.html">İletişim</a>
            </div>
            <div class="right">
                <a href="login.php">Giriş Yap</a>
            </div>         
        </div>
    </div>

    <header class="header">
        <h1>Merhaba!</h1>
        <h3>Projeme hoşgeldiniz.</h3>
    </header>

    <div class="hakkinda">
        <div class="wrapper">
            <div class="yazilar">
                <h2>Ben Ahmet Tunahan Yiğit.</h2>
                    <p> <br><br>  Sakarya üniversitesinde bilgisayar mühendisliği öğrencisiyim. 
                        <br><br>  Okuduğum bölümden anlaşılmak üzere bilgisayarda zaman geçirmeyi seviyorum.
                        <br><br>  Basketbol oynamayı çok severim, lisede okullar arası maçta oynamışlığım olmuştur.
                        <br><br>  Müzik dinlemeye bayılırım, çoğunlukla yabancı müzikler dinlerim.
                        <br><br>  Müzik yapma üzerinde de kendimi geliştirmeye çalışıyorum, sanatçı olmak istiyorum.
                        <br><br>  Ama genel olarak okuduğum bölümden ve okulumdan memnunum.
                    </p>
            </div>
            <div class="sidebar">
                <img src="/pictures/x.jpg" style="height: 300px;" alt="">
            </div>
        </div>
    </div>

</body>
</html>

