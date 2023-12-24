<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styleLab6.css">
    <title>Js code</title>
    <script src = "../js/index.js" defer></script>
</head>
<body>
    <header>
        Лабораторная работа 6
    </header>
    <main>
    <select id="operation" onchange="showFields(this)">
        <option value="">Выберите действие</option>
        <option value="row">Возведение в степень</option>
        <option value="gcd">НОД</option>
        <option value="minDigit">Наименьшая цифра</option>
        <option value="pluralization">Множественные числа</option>
        <option value="fibb">Числа Фибоначчи</option>
    </select>

    <div id = "values" style="display: none;">
        <input type="num" id = "numA">
        <input type="num" id = "numB">
        <h4 id = "result"></h4>
        <button id = "calculate">Посчитать</button>
        <script>
        function ddd(){
            var result = document.getElementById("result")
        }
    </script>
    </div>
      
    <script src = "../js/index.js"></script>
    </main>
    <footer>

    </footer>
   
</body>
</html>