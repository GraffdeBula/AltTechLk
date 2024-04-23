<?php

/* 
 * настройки для работы приложения
 */

define('CONFIG_ROOT', __DIR__);
define('WORK_ROOT', dirname(CONFIG_ROOT));
define('WORK_FOLDER','lk');

define('WEB_ROOT',$_SERVER['DOCUMENT_ROOT']);

define('LOG_ROOT','/'.WORK_FOLDER.'/log/');
define('LOG_FOLDER','/'.WORK_FOLDER.'/log/');

define('VIEW_BACKGROUND','#e9e7e3');

define('DB_NAME_MAIN','firebird:dbname=192.168.154.252:client2');
#define('DB_NAME_MAIN','firebird:dbname=192.168.154.252:test2');


