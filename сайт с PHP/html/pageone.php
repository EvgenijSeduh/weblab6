<?php
$title = 'Седых Евгений 221-362 работа 3';
$array = array('Искустенный интелект сегодня', 'Прошлое: От Первых Шагов к Революции ИИ', 'Будущее: ИИ и Человечество в Симбиозе');
$arrayLink = array('pageone.php','pagetwo.php','pagethree.php');
$thispage = 0;
$currentTime = date('H:i:s');
$seconds = date('s', strtotime($currentTime));
   if($seconds%2 == 1){
       $imageName1 = "pageOne1.jpg";
       $imageName2 = "pageOne2.jpg";
   }else{
       $imageName1 = "pageOne2.jpg";
       $imageName2 = "pageOne1.jpg";
   }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <?php date_default_timezone_set('Europe/Moscow');?>
    <link rel="stylesheet" href="../styles/stylePage.css">
</head>

<body>
    <header>
        <h1>Искустенный интелект сегодня</h1>
        
        <?php
echo '<span class="selected_menu">' . $title . '</span><p></p>';
        ?>
        <p></p>
<a href="<?php echo $arrayLink[0]; ?>" class="menu-item<?php echo " current-page"?> ">1 </a>
<a href="<?php echo $arrayLink[1]; ?>" class="menu-item">2</a>
<a href="<?php echo $arrayLink[2]; ?>" class="menu-item">3</a>
<button onclick="redirectToAutorizatePage()" class = buttonEntry>Войти</button>
    </header>
    <main>
        <center><h2>Оглавление</h2></center>
        <?php
        echo "<ul>";
        foreach ($array as $item) {
            echo "<li>$item</li>";
        }

        echo "</ul>";
        ?>
        <p id="subtitle">Технологии ИИ: Прошлое, Настоящее и Будущее</p>
        <p>В последние десятилетия искусственный интеллект (ИИ) стал ключевой темой в мире технологий, переворачивая
            наши представления о том, что компьютеры и программы могут делать. Искусственный интеллект охватывает
            множество технологий, которые позволяют машинам учиться, адаптироваться и решать задачи, которые раньше
            считались вне их способностей.</p>

        <p id="subtitle">Прошлое: От Первых Шагов к Революции ИИ</p>
        <p>Искусственный интеллект не является новым понятием. Его истоки уходят в далекое прошлое, но только в
            последние десятилетия технологии достигли уровня, позволяющего создавать программы, способные распознавать
            образы, обучаться на основе данных и принимать решения, подобно человеку.</p>
       <center><img src="../images/<?php echo $imageName1; ?>" height="400px" width="650px" alt="Изображение не загружено"></center>

        <p id="subtitle">Настоящее: Революция в Применении ИИ</p>
        <p>Сегодня ИИ широко используется в различных областях, включая медицину, финансы, образование, производство и
            транспорт. Алгоритмы машинного обучения позволяют анализировать большие объемы данных, предсказывать тренды
            и улучшать бизнес-процессы. Роботы и боты ИИ внедряются в клиентское обслуживание и помогают в решении
            повседневных задач.</p>

        <center><img src="../images/<?php echo $imageName2; ?>" height="400px" width="650px" alt="Изображение не загружено"></center>

        <p id="subtitle">Будущее: ИИ и Человечество в Симбиозе</p>
        <p>Перспективы искусственного интеллекта впечатляют. В будущем мы можем ожидать дальнейших прорывов в области
            автономных автомобилей, медицинских диагностических систем, робототехники и образования. Однако возникают и
            вопросы о нравственности, безопасности и равенстве при использовании ИИ. Человечество должно найти баланс
            между новыми технологическими возможностями и этическими нормами, чтобы обеспечить устойчивое будущее для
            всех.</p>
        <p>Искусственный интеллект стал невероятным двигателем инноваций и преобразований в нашем мире. С развитием
            технологий и общественным диалогом мы можем создать будущее, где ИИ служит человечеству, помогая нам решать
            сложные проблемы и совершать новые открытия.</p>
    </main>
    <footer>
    <p> <button onclick="redirectToAppealPage()">Обратная связь</button></p>
        <h6><?php echo "Сформировано " . $currentTime ?></h6>
    </footer>
</body>
<script>
        function redirectToAppealPage() {
            window.location.href = "appeal.php";
        }
		function redirectToAutorizatePage() {
            window.location.href = "autorizate.php";
        }
    </script>
</html>