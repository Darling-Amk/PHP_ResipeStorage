<?php

echo '<form  class = "header__form" action="login.php">';

    if(flag==0){
        echo'<div class="form_cont">
                <label for="header__form__username">Username</label>
                <input class = "header__form__username" type="text">
        </div>';
    }
    else{

    }
    ?>
    <div class="form_cont">
        <label for="header__form__password">Password</label>
        <input class = "header__form__password" type="password">
    </div>
    <div class="form_cont">
        <label for="header__form__button" class = "hid">subbmit!</label>
        

        <input class = "header__form__button" type="submit" value="Login">

        
        
    </div>
    <?php   
echo '</form>';
?>