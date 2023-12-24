<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="../styles/styleHome.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Авторизация</title>
</head>
<body>
<header></header>
<main>
    <div class = "informWindow">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];

    $expectedLogin = "admin";
    $expectedPassword = "admin123";

    if ($login === $expectedLogin && $password === $expectedPassword) {
        echo "Авторизация прошла успешно!";
        echo '<p> </p><button>Ок</button>';
    } else {
        echo "Неправильное имя пользователя или пароль.";
        echo '<p> </p><button onclick="redirectToOtherPage()">Вернуться назад</button>';
    }
}
?>
</div>
</main>
<footer></footer>
<script>
        function redirectToOtherPage() {
            window.location.href = "autorizate.php";
        }
    </script>
</html>