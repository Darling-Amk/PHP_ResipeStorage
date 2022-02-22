<?php
    $res = file_get_contents('db.json');

    $res = json_decode($res,true);
    // echo'<pre>';
    // // print_r($res);
    // foreach($res as $id=>$val){
    //     echo "{$id}=>\n";
    //     echo "\tname:{$val['name']}\n";
    //     echo "\timg_name:{$val['img_name']}\n";
    //     echo "\trecipe:{$val['recipe']}\n";
    // }
    // echo'</pre>';
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
    <title>Document</title>
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
            <form  class = "header__form" action="">
                <div class="form_cont">
                    <label for="header__form__username">Username</label>
                    <input class = "header__form__username" type="text">
                </div>

                <div class="form_cont">
                    <label for="header__form__password">Password</label>
                    <input class = "header__form__password" type="password">
                </div>
                <div class="form_cont">
                    <label for="header__form__button" class = "hid">subbmit!</label>
                    <input class = "header__form__button" type="button" value="Login">
                </div>
            </form>
        </header>
        <!-- /header -->



        <div class="content">
        <!-- sidebar -->
        <div class="sidebar__container">
                <ul class="sidebar__menu">
                    <li class="sidebar__label">
                        <div class="cnt">
                            <img src="img/globe.svg" alt="Logo">  
                            RS 
                        </div>
                    </li>
                    <?php
                    for($i=0;$i<10;$i++)
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
                    for($i=0;$i<10;$i++)
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
                    <p>Миндальный тофу — это еда, которую может приготовить игрок. Рецепт Миндального тофу можно получить, исследуя кухонный стол на кухне Постоялого двора «Ваншу». Блюдо Миндальный тофу также можно купить у Верр Голдет на Постоялом дворе «Ваншу» за 1,550 Моры (максимум 2 в день).
                        В зависимости от качества, Миндальный тофу увеличивает атаку всех членов отряда на 66 / 81 / 95 в течение 300 секунд. Как и у большей части еды, эффект этого блюда не действует на персонажей других игроков в Режиме совместной игры.
                        
                        Когда Сяо готовит Миндальный тофу, у него есть шанс приготовить «Сладкий сон» вместо этого.</p>
                </div>
            </div>    
            <ul class="recipe__list">
                <?php
                    if(isset($_GET['id'])){
                        echo "<li class='recipe__img'><img src='img/eatlib/{$res[$_GET['id']]['img_name']}' alt=''> </li>";
                        foreach($res[$_GET['id']]['recipe'] as $item=>$count){
                            echo "<li class='recipe__item'>{$item} х{$count} <a href='#'>Vieu</a></li>";
                        }
                    }
                    
                ?>
               
            </ul>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>