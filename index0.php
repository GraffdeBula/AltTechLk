<?php
/*
 *  точка входа ЛК
 *  запускает AdminController
 */
    #header('Content-Type: text/html; charset=utf8');
    #$title='ФПК АЛЬТЕРНАТИВА: личный кабинет клиента';
    #define('VIEW_BACKGROUND','#f0e3c5');        
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ФПК АЛЬТЕРНАТИВА: личный кабинет клиента</title>
        <!--
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/sandstone/bootstrap.min.css">
        -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/_bootswatch.scss">
        <link rel="stylesheet" type="text/css" href="css/_variables.scss">
        <style>
            body{
            background-color: #f0e3c5; /* Цвет фона веб-страницы */
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
        <form class="aligncenter">
            <label for="login">логин</label><input type="text" id="login">
            <label for="password">пароль</label><input type="password" id="password">
        </form>
    </body>
</html>