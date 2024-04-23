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

#echo(WEB_ROOT);
include_once WORK_ROOT."/app/Autoloader.php";
spl_autoload_register([new Autoloader(), 'getClass']);

require_once WEB_ROOT."/AltTech/vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

#(new Logger(''))->logToFile('loaded');
#(new SessionChecker())->checkSession();

(new AppMainCtrl())->actionIndex();
