<?php
session_start();

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $input_password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($input_username) || empty($input_password)) {
        $error_message = "Kullanıcı adı ve şifre boş bırakılamaz.";
    } elseif (!filter_var($input_username, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Kullanıcı adı geçerli bir email adresi olmalıdır.";
    } else {
        $valid_username = "admin@example.com";
        $valid_password = "password123";

        if ($input_username === $valid_username && $input_password === $valid_password) {
            $_SESSION['username'] = $input_username;
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Yanlış kullanıcı adı veya şifre. Tekrar deneyiniz.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>

    <div class="topbar">
        <div class="wrapper">
            <div class="center">
                <a href="index.php">Hakkında</a>
                <a href="pages/ozgecmis.html">Özgeçmiş</a>
                <a href="pages/sehrim.html">Şehrim</a>
                <a href="pages/takimimiz.html">Takımımız</a>
            </div>
            <div class="right">
                <a href="login.php">Giriş Yap</a>
            </div>
        </div>
    </div>

    <div class="giris">
       <div class="hepsi">
       
        <form action="../login.php" method="POST">
            
            <h1>Giriş</h1>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Kullanıcı Adı" required>
                <i class='bx bxs-user' ></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Şifre" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember">
                <label><input type="checkbox">Beni Hatırla</label>
            </div>

            <button type="submit" value="login" class="btn">Giriş Yap</button>
            
            <?php
            if ($error_message) {
            echo '<p style="color:red;">' . htmlspecialchars($error_message) . '</p>';
            }
            ?>

        </form>
       </div>
    </div>