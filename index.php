<?php
    session_start();
    $items = array(
        "Яблоки",
        "Закатник",
        "Яблочный напиток",
        "Ягодный напиток с мятой",
        "Сок из волчьих крюков",
        "Святая вода",
        "Пиала чая",
        "Куриный шашлычок с грибами",
    );
    $date = [
        "Яблоки" => "Яблоко — еда, которую игрок может получить, собирая пищу во время исследований.Яблоко восстанавливает 300 HP выбранному персонажу. Как и большую часть еды, его нельзя применить на персонажей других игроков в Режиме совместной игры.",
        "Закатник" => "что то",
        "Яблочный напиток" => "что то",
        "Ягодный напиток с мятой" => "что то",
        "Сок из волчьих крюков" => "что то",
        "Святая вода" => "что то",
        "Пиала чая" => "что то",
        "Куриный шашлычок с грибами" => "Куриный шашлычок с грибами — еда, которую может приготовить игрок. Рецепт доступен с начала игры. Блюдо также можно приобрести у Сары в ресторане «Хороший охотник» (в Мондштадте) за 450 Моры (максимум 5 в день) и у Брук (в Спрингвейле) за 450 Моры (максимум 10 в день).В зависимости от качества, Куриный шашлычок с грибами восстанавливает выбранному персонажу 8 / 9 / 10 % от макс. HP + 800/ 1000 / 1200 HP дополнительно. Как и у большей части еды, эффект не действует на других игроков в Режиме совместной игры.Когда Кэйа готовит Куриный шашлычок с грибами, есть шанс приготовить вместо этого особое блюдо — Фруктовые шашлыки.",
    ] ;

    $ingredient_list = [
            "Яблоки" =>array(

            ),
            "Куриный шашлычок с грибами" =>array(
                "Грибы х1","Курица х1",
            )
        ] ;               

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <title>Recipe Storage</title>
</head>
<body>
    <!-- header -->
    <header class = "header__container">
        <div class="header__label__conteiner">
            <h2 class="header__label">Genshin Impact</h2>
            <h1 class="header__title">Recipe Storage</h1>
        </div>
        <form  class = "header__form" action="">
            <input class = "header__form__username" type="text">
            <input class = "header__form__password" type="password">
            <input class = "header__form__button" type="button" value="help">
        </form>
    </header>
    <!-- /header -->




    <!-- sidebar -->
    <div class="sidebar__container">
        <form action="index.php" method="get">
            <ul class="sidebar__menu">
                <li class="sidebar__label">
                    <div class="cnt">
                    <img src="img/globe.svg" alt="Logo">  RS
                    </div>
                </li>
                <?php
                for($i = 0 ;$i<10 ;$i++)
                    foreach( $items as $item){
                        echo"<li class='sidebar__item'><a href='?id={$item}'>{$item}</a></li>";
                    };
                ?>
            </ul>        
            </form>
    </div>
    <!-- /sidebar -->
    


    
    
    
    <div class="info__container">
        <?php
         if(isset($_GET['id'])){

            echo "<h1 class='info__name'>".$_GET["id"]."</h1>";
            
        }else
        echo "<h1 class='info__name'>Hello, traveler!</h1>";
        ?>
        <div class="info__container__text">
            <?php
            if(isset($_GET['id'])){
                // print_r($_GET);
                echo "<p>" .
                    $date[$_GET["id"]] .
                "</p>";
            }else
            echo '
            <p>Здравствуй путник! выбери любой интересующий рецепт</p>
                ';
                ?>
        </div>
    </div>
    



    <div class="recipe__container">
        <ul class="recipe__list">
            <li class="recipe__img">
                <img src="img/eat.png" alt="">
            </li>
            <?php

            if(isset($_GET['id']) && isset($ingredient_list[$_GET['id']])){
                foreach($ingredient_list[$_GET['id']] as $element ){
                    echo "<li class='recipe__item'>{$element}<a href='#'>Vieu</a></li>";
                }
            }else
            echo '
            
            ';
            ?>
        </ul>
    </div>
    
</body>
</html>