<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="apple-touch-icon" sizes="76x76" href="../ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../ico/favicon-16x16.png">
    <link rel="manifest" href="../ico/site.webmanifest">
    <link rel="mask-icon" href="../ico/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel = "stylesheet" href = style.css>
    <title>Login</title>
</head>
<body>
    <a href="../../index.php">Назад </a>
    <hr>
    <div class="">
    <?php
        error_reporting(0);
        if ($_POST['login'] != NULL || $_POST['password'] != NULL){

            if ($_POST['login'] == "user" && $_POST['password'] == "qwerty") {
                        $_SESSION['autorized']=true;
                        $_SESSION['user']=$_POST['login'];
                        echo "<p style='color:silver;' >Добро пожаловать, {$_SESSION['user']}</p>";
            }else{
                
                if($_POST['login'] == "user" ){
                    echo "<h2 style='color:red;'>Неправильный пароль</h2>";
                }
                else{
                    echo "<h2 style='color:red;'>Неизвестный пользователь</h2>";
                }
            } 
        }elseif($_SESSION['autorized']==true){
            echo "<p style='color:blue;'>Добрый день, {$_SESSION['user']}</p>";
        }
    ?>
    </div>

    <?php 
        if($_SESSION['autorized']==true){
            include 'info.php';
            ?>
            <a href="logout.php">Выход</a> 
            <?php 
        }
        else{
            ?>
            <div class="cont">
                <form class = "form" action="login.php" method="POST">

                <label for="login" >Логин</label>
                <input type="text" placeholder ="Логин" name="login">

                <label for="">Пароль</label>
                <input type="password" placeholder ="******************" name="password">
                <!-- <input type="submit" style="left:40%;" value="Войти" /> -->
                <button type="submit">Вход</button>
                </form>
            </div>
            <?php 
        }
    
    ?>
    


</body>
</html>