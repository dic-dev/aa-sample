<?php
/*
  * ファイルパス : C:\xampp\htdocs\anyaddress\Bootstrap.class.php
  * ファイル名 : Bootstrap.class.php(設定に関するプログラム)
  */
namespace anyaddress;
date_default_timezone_set('Asia/Tokyo');
require_once dirname(__FILE__) . '/vendor/autoload.php';

class Bootstrap
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'anyaddress_db';
    const DB_USER = 'anyaddress_user';
    const DB_PASS = 'anyaddress_pass';
    const DB_TYPE = 'mysql';
    const APP_DIR = '/home/dic/www/DT/anyaddress/';
    const TEMPLATE_DIR = self::APP_DIR . 'View/';
    const CACHE_DIR = false;
    const APP_URL = 'http://localhost/DT/anyaddress/'; // プロジェクトのURL
    const ENTRY_URL = self::APP_URL;

    public static function loadClass($class)
    {
        $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.class.php';
        $path = self::APP_DIR . $classPath;
        if (file_exists($path)) {
            require_once $path;
        }
        /* $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php'); */
        /* require_once $path; */
    }
}

spl_autoload_register([
    'anyaddress\Bootstrap',
    'loadClass'
]);
