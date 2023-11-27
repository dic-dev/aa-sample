<?php
 /*
  * 　ファイルパス : C:\xampp\htdocs\anyaddress/Controller/UserController.php
  * ファイル名 : UserController.php(ユーザー関連の処理を制御するコントローラー)
  * アクセスURL http://localhost/anyaddress/Controller/UserController.php
  */
namespace Controller;
 
require_once dirname(__FILE__) . '/../Bootstrap.class.php';
  use anyaddress\Bootstrap;

require_once __DIR__ . '/../vendor/autoload.php';

class UserController
{
    public function login () {
        $loader = new \Twig\Loader\FilesystemLoader(Bootstrap::TEMPLATE_DIR);
        $twig = new \Twig\Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

        $template = $twig->loadTemplate('login.html.twig');
        $template->display();
    }

    public function register () {
        $loader = new \Twig\Loader\FilesystemLoader(Bootstrap::TEMPLATE_DIR);
        $twig = new \Twig\Environment($loader, ['cache' => Bootstrap::CACHE_DIR]);

        $template = $twig->loadTemplate('register.html.twig');
        $template->display();
    }
}
