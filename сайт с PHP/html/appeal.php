
<?php
    if (isset($_GET['N'])) {$name =$_GET['N'];} else {$name='';}
    if (isset($_GET['E'])) {$email =$_GET['E'];} else {$email='';}
    if (isset($_GET['R'])) {$source =$_GET['R'];} else {$source='';}
?>

<?php include 'header.html'; ?>
    <header>
    </header>
    
    <main>
        <div class="feedbackForm">
        <form action="appealHome.php" method="post" enctype="multipart/form-data">
                <p><center><h2>Форма обратной связи</h2></center></p>
				<p><input id="name" type="text" name="fill_name" value="<?=$name ?>" placeholder="Введите имя" ></p>
				<p><input type="email" name="email" value="<?=$email ?>" placeholder="Введите почту"></p>
				<p><center>Откуда узнали о нас:</center></p>
				<label>
                <input type="radio" name="source" id="frends" value="frends" required<?php if ($source == 'frends') echo ' checked="checked"' ?>> Друзья
                <input type="radio" name="source" id="internet" value="advertising" required<?php if ($source == 'advertising') echo ' checked="checked"' ?>> Интернет
				</label>
				<p><center><select name = "type">
					<option value = "complaint">Жалоба</option>
					<option value = "propose">Предложение</option>
				</select></center></p>
				<p><textarea placeholder="Текст сообщения" name="message" required></textarea></p>
                <label for="attachment">Вложения:</label>
				<p><input type="file" id="attachment" name="attachment"></p>
				<p><label><input type="checkbox" name="consent" required> Даю согласие на обработку персональных данных</label></p>
				<p><center><button type="submit">Отправить</button></center></p>
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