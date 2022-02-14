<?php
    if($_SESSION['autorized']==true){
        echo '<h3> Вывод информации: </h3>';
        echo "<ul>";
            echo "<li><h4> Имя сервера: </h4><em>" .$_SERVER['SERVER_NAME'] . "</em></li>";
            
            echo "<li><h4> Версия браузера: </h4> <em>".$_SERVER['HTTP_USER_AGENT']."</em></li>";

            
            echo '<li><h4> Адрес страницы, с которой был переход: </h4><em>' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']:"-")."</em></li>";

        echo "</ul>";
        // echo "<a href='./login.php'>Вернутся назад</a>";

}else{
    echo "Нет доступа";
}
   
?>