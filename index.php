
<!DOCTYPE html>
<html lang="ru">
<head>
    
    <link rel="apple-touch-icon" sizes="76x76" href="/list/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/list/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/list/ico/favicon-16x16.png">
    <link rel="manifest" href="/list/ico/site.webmanifest">
    <link rel="mask-icon" href="/list/ico/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = style.css>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">    


    <title>Список</title>
</head>
<body>
    <?php 
        echo "заебало нахуй";
    ?>
    <header>
        <img src="list/img/1.gif" alt="Логотип с popcat" class="logo">
        <h2>Список выполненных лабораторных работ</h2>
        <img src="list/img/1.gif" alt="Логотип с popcat" class="logo mir">
    </header>
    <hr>
    
    <div class="content">
        <ol>
            
            <li>
                <h3>Лабораторная работа:</h3>
                <ul>
                    <li><a href="list/1/simple_start.php">Таблица</a></li>

                </ul>  
            </li>
            <li>
                <h3>Лабораторная работа:</h3>
                <ul>
                    <li><a href="list/2/piramida.php">Прирамида</a></li>
                    <li><a href="list/2/demotivator.php">Демотиватор</a></li>
                    <li><a href="list/2/graycat.php">Серый кот</a></li>
                </ul>
            </li>
            
            <li>
                <h3>Лабораторная работа:</h3>
                <ul>
                    <li><a href="list/3/info.php">info(напрямую без сессии не пускает)</a></li>
                    <li><a href="list/3/login.php">login</a></li>
                    <li><a href="list/3/upload.html">upload</a></li>
                </ul>
            </li>
            <li><a href="list/4/index.php">Лаба</a></li>
            <li><a href="list/5/index.php">Лаба</a></li>
        </ol>   
        <?php
        $s =mt_rand(1,2);
            echo "<img class='child' src='list/img/{$s}.png'>";
        ?>
    </div>
    <hr>
    <em>
        <p align = "right">Зима 2022</p>
        <p align = "right">Кручинин Никита 22203</p>
    </em>
   
</body>
</html>