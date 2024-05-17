<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoşgeldiniz</title>
    <style>
        body {
            font-family: "Josefin Sans", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .message {
            border: 3px solid rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            padding: 50px;
            background-color: white;
            text-align: center;
        }
    </style>
    <script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 3000);
    </script>
</head>

<body>
    <div class="message">
        <h1>Hoşgeldiniz, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>3 saniye içinde ana sayfaya yönlendirileceksiniz...</p>
    </div>
</body>

</html>