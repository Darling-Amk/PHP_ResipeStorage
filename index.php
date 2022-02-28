<?php
    $res = file_get_contents('db.json');

    $res = json_decode($res,true);

    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/resipe.css">
    <link rel="shortcut icon" href="/img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <title>Recipe Storage</title>
</head>
<body>

    <div class="wrapper">
        <!-- header -->
        <header class = "header__container">
            <div class="header__label__conteiner">
                <h2 class="header__label">Genshin Impact</h2>
                <h1 class="header__title">Recipe Storage</h1>
                <div class="bugar"></div>
            </div>
            <?php
            include_once 'login.php';
            ?>
        </header>
        <!-- /header -->



        <div class="content">
        <!-- sidebar -->
        <div class="sidebar__container">
                <ul class="sidebar__menu">
                    <li class="sidebar__label">
                        <div class="cnt">
                            <img src="img/globe.svg" alt="Logo">  
                            Menu 
                        </div>
                    </li>
                    <?php
                    
                        foreach($res as $id=>$val){
                            echo"<a href='?id={$id}'><li class='sidebar__item'>{$val['name']}</li></a>";
                        }
                    ?>
                   
                </ul>        
        </div>

        <div class="sidebar__bugar">
            <ul class="sidebar__menu">
            <!-- <li class="sidebar__item bugar__item">Яблоки</li> -->
            <?php
                    
                        foreach($res as $id=>$val){
                            echo"<a href='?id={$id}'><li class='sidebar__item bugar__item'>{$val['name']}</li></a>";
                        }
            ?>


            
        </ul>
    </div> 
        <!-- /sidebar -->

            <div class="info__container">
                <?php
                    if(isset($_GET['id'])){
                        echo"<h1 class='info__name'>{$res[$_GET['id']]['name']}</h1>";
                    }
                    else{
                        echo'<h1 class="info__name">Привет путешественник!</h1>';
                    }
                ?>
                
                <div class="info__container__text">
                    <?php
                        if(isset($_GET['id'])){
                            echo"<p >{$res[$_GET['id']]['description']}</p>";
                        }
                        else{
                            echo'<p >Миндальный тофу — это еда, которую может приготовить игрок. Рецепт Миндального тофу можно получить, исследуя кухонный стол на кухне Постоялого двора «Ваншу». Блюдо Миндальный тофу также можно купить у Верр Голдет на Постоялом дворе «Ваншу» за 1,550 Моры</p>';
                        }
                    ?>
                </div>
            </div>    
            <ul class="recipe__list">
                <?php
                    if(isset($_GET['id'])){
                        echo "<li class='recipe__img'><img src='img/eatlib/{$res[$_GET['id']]['img_name']}' alt=''> </li>";
                        foreach($res[$_GET['id']]['recipe'] as $item=>$count){
                            echo "<li class='recipe__item'>{$item} х{$count} <a href='#'>view</a></li>";
                        }
                    }
                    
                ?>
               
            </ul>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/header.js"></script>
</body>
</html>