<?php

    function Draw_item($img,$name,$id){
        echo '<div class="mylist__item">';
            echo '    <div class="mylist__img__conteiner">';
                    echo '<img src="./img/eatlib/'.$img.'" alt="">';
            echo '    </div>';
            echo '    <div class="mylist__item__title">';
                    echo '<a href="#">'.$name.'</a>';
            echo '    </div>';
            echo '    <div class="mylist__remove__button">';
                    echo '<img src="/img/x.png" alt="">';
            echo '    </div>';
        echo '</div>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/mylist.css">
    <link rel="stylesheet" href="css/music.css">
    <link rel="shortcut icon" href="/img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <title>My List</title>
</head>
<body>
    <!-- header -->
    <header class = "header__container">
            <div class="header__label__conteiner">
                <h2 class="header__label">Genshin Impact</h2>
                <h1 class="header__title">Recipe Storage</h1>
                <!-- <div class="bugar"></div> -->
            </div>

            
            <div class="cnt_t">
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
                
                
                        <div class="player">
                            <div class="sound">
                                <div class="player__title">
                                ✨  Genshin Impact Main Theme ✨       
                                    <!-- Genshin Impact Lofi ✨ 1 Hour Lofi Hip Hop -->
                                </div>
                            
                                <div class="play">
                                    <audio src="./audio/2.mp3" class=audio></audio>
                                    <div class="player__button">
                                        <div class="mini_btn"> ♫ Play ♫</div>
                                        <img class="player__button_img" src="./img/play.png" alt="">
                                    </div>

                                    <div class="progres">
                                        <div class="prog_all">
                                            <div class="prog"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
    </header>
        

        <div class="mylist__conteiner">
            <?php
                for($i=0;$i<5;$i++)
                    Draw_item("Мисо-суп.png","Мисо-суп",1)
            ?>
        </div>

        <!-- <script src="js/main.js"></script> -->
        <script src="js/header.js"></script>
    </body>
</html>