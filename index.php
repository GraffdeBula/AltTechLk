<?php
/*
 *  точка входа для личного кабинета
 *  1. подключает настройки
 *  2. подключает автолоадер
 *  3. подключает композер
 *  4. запускает проверку авторизации
 *  5. запускает главный контроллер
 */
header('Content-Type: text/html; charset=utf8');

include_once "app/Settings.php";

include_once "{$_SERVER['DOCUMENT_ROOT']}/".WORK_FOLDER."/app/Atoloader.php";
spl_autoload_register([new autoloader(), 'getClass']);

require_once "{$_SERVER['DOCUMENT_ROOT']}/AltTech/vendor/autoload.php";

(new SessionChecker())->checkSession();

(new MainController())->run();
