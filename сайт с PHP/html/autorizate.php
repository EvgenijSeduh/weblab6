<?php
if (isset($_GET['N']) && isset($_GET['E']) && isset($_GET['S'])) {
    $login = htmlspecialchars($_GET['login']);
    $password = htmlspecialchars($_GET['password']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма регистрации</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/styleAutorization.css">
</head>

<body>
    <header>
    </header>
    
    <main>
        <div class="authorization">
            <form action="homeAutorizate.php" method="POST">
                <p><center><h2>Авторизация</h2></center></p>
				<table>
					<tr>
						<td><strong>Логин: </strong></td>
						<td><input maxlength="25" size="40" name="login" required></td>
					</tr>
					<tr>
						<td><strong>Пароль:</strong></td>
						<td><input type="password" maxlength="25" size="40" name="password" required></td>
					</tr>
				</table>
				<p><center><input type="checkbox" name="rememberMeCheckBox" value="true" checked>Запомнить меня</center></p>
				<p><center><button type = "sumbit"> Войти </button></center></p>
				<p> <button onclick="redirectToOtherPage()">Вернуться назад</button></p>
			</form>
        </div>
		 <script>
        function redirectToOtherPage() {
            window.location.href = "pageone.php";
        }
    </script>
    </main>
    
    <footer>
    </footer>
</body>
</html>