<?php
/*
 *  страница авторизации ЛК
 */    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ФПК АЛЬТЕРНАТИВА: личный кабинет клиента</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/_bootswatch.scss">
        <link rel="stylesheet" type="text/css" href="css/_variables.scss">
        <style>
            body{
            background-color: <?=VIEW_BACKGROUND?>; /* Цвет фона веб-страницы */
            } 
            .aligncenter {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <p class="aligncenter">
            <img src="img/mylogo.png" alt="логотип Альтернативы">
        </p>
        <form class="aligncenter" autocomplete="off">
            <input type='hidden' name='controller' value="AuthCtrl">
            <input type='hidden' name='action' value="Index">
            <p>
            <label for="login">логин</label><input type="text" id="login" name='ClLogin'>
            <label for="password">пароль</label><input type="password" id="password" name='ClPass'>
            </p>
            <p class="text-danger"><?=$authresult?></p>
            <button class="btn btn-danger">Нажать здесь</button>
        </form>
    </body>
</html>