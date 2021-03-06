<?php

    if(!isset($_SESSION['name'])){
        session_start();
    }
    // define(DB_NAME,'sqlite/ResipeStorage.db');
    $res = file_get_contents('db.json');

    $res = json_decode($res,true);
    
    function authorization($name,$password){
        $db = new PDO('sqlite:sqlite/ResipeStorage.db');
        $sth = $db->prepare("SELECT * FROM users WHERE (name = \"{$name}\") AND (password = \"{$password}\");");
        $sth->execute();
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);
        return count($array)==1;
        // return false;
    }
   
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
    <link rel="stylesheet" href="css/music.css">
    <link rel="shortcut icon" href="/img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <title>Recipe Storage</title>
</head>
<body>
    <?php
    
    
    if(!isset($_GET['mylist'])){
        include_once('main.php');
    }
    else{
        include_once('mylist.php');
    }  

    ?>

   </body>
</html>
