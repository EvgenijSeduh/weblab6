<?php
if (isset($_POST['fill_name'])) {
    $name = $_POST['fill_name'];
    $message = $_POST['message'];
    $type = $_POST['type'];
    $source = $_POST['source'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        
    <meta charset="UTF-8">
        
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../styles/styleHome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
</head>

<body>
    <header></header>
    <main>
        <div class="informWindow">
            <?php
            if ($type == "propose") {
                echo '<p>Здравствуйте, ' . $name . '</p>';
                echo '<p>Спасибо за ваше предложение:</p>';
                echo '<textarea>' . $message . '</textarea>';
            } else {
                echo '<p>Здравствуйте, ' . $name . '</p>';
                echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                echo '<textarea>' . $message . '</textarea>';
            }

            if (isset($_FILES['attachment']) & $_FILES['attachment'] != '') echo '<p>Вы приложили следующий файл: '.$_FILES['attachment']['name'].'</p>';
            echo '<p><a href="appeal.php?N=' . $_POST['fill_name'] . '&E=' . $_POST['email'] . '&R=' . $source . '">Заполнить снова</a></p>';
            ?>
            <p></p>

        </div>
    </main>
    <footer></footer>
</body>
</html>