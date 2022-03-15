<div class="wrapper">
        <!-- header -->
        <header class = "header__container">
            <div class="header__label__conteiner">
                <h2 class="header__label">Genshin Impact</h2>
                <h1 class="header__title">Recipe Storage</h1>
                <div class="bugar"></div>
            </div>
            <form method="POST" class = "header__form" action=".">
            <?php
            if ($_POST['login'] != NULL || $_POST['pass'] != NULL)
            {
                if (authorization($_POST['login'], $_POST['pass']))
                    {
                        $_SESSION['name'] = $_POST['login'];
                    }
                else
                {
                    $_COOKIE['login']='fail';
                }
            }
            else{
                // ничего
            }

            if(isset($_POST['logout'])){
                session_destroy();
                unset($_POST);
                unset($_SESSION);
                
            }
            if(isset($_SESSION['name']))
                include_once 'logout.php';
            else{
                include_once 'login.php';
            }

            unset($_COOKIE['login']);
            ?>
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
                        if(isset($_SESSION['name'])){
                            echo"<h1 class='info__name'>Привет, {$_SESSION['name']}!</h1>";
                        }else{
                            echo'<h1 class="info__name">Привет, путешественник!</h1>';
                        }
                        
                    }
                ?>
                
                <div class="info__container__text">
                    <?php
                        if(isset($_GET['id'])){
                            echo"<p >{$res[$_GET['id']]['description']}</p>";
                        }
                        else{
                            echo'<p>Задача организации, в особенности же реализация намеченного плана развития играет важную роль в формировании экономической целесообразности принимаемых решений? Таким образом, сложившаяся структура организации позволяет оценить значение экономической целесообразности принимаемых решений? Соображения высшего порядка, а также рамки и место обучения кадров влечет за собой процесс внедрения и модернизации форм воздействия.</p>';
                        }
                    ?>
                </div>
            </div>    
            <ul class="recipe__list">
                <?php
                    if(isset($_GET['id'])){
                        echo "<li class='recipe__img'><img src='img/eatlib/{$res[$_GET['id']]['img']}' alt=''> </li>";
                        foreach($res[$_GET['id']]['recipe'] as $item=>$count){
                            echo "<li class='recipe__item'>{$item} {$count} ";
                        }
                    }
                    
                ?>
               
            </ul>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/header.js"></script>