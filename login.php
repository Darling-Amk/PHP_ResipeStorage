<div class="form_cont">
    <label for="header__form__username">Username</label>
    <?php
        if($_COOKIE['login']){
            echo "<input class = 'header__form__username autorization_fail' name='login' type='text' placeholder='username'>";
        }
        else{
            echo "<input class = 'header__form__username' name='login' type='text' placeholder='username'>";
        }
     ?>
    
</div>

<div class="form_cont">
    <label for="header__form__password">Password</label>
    <?php
        if($_COOKIE['login']){
            echo "<input class = 'header__form__password autorization_fail' name='pass' type='password' placeholder='password'>";
        }
        else{
            echo "<input class = 'header__form__password ' name='pass' type='password' placeholder='password'>";
        }
     ?>
    
</div>

<div class="form_cont">
    <label for="header__form__button" class = "hid">subbmit!</label>
    <input class = "header__form__button" type="submit" value="Login">
</div>
