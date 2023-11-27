<?php
/*
  * ファイルパス : C:\xampp\htdocs\anyaddress\public\index.php
  * ファイル名 : index.php(ルーテイング設定に関するプログラム)
  */
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  require_once __DIR__ . '/../Bootstrap.class.php';
  use anyaddress\Bootstrap;
  use Controller\UserController;
 
  // リクエストURIの取得
  $uri = $_SERVER['REQUEST_URI'];

  $user = new UserController();
 
  // ルーティング設定
  $routes = [
      '/anyaddress/login' => [UserController::class, 'login'],
      '/anyaddress/register' => [UserController::class, 'register'],
  ];
  /* var_dump($uri); */
  /* var_dump($routes); */
 
  // ルーティングに応じたコントローラーとアクションの取得
  $controller = null;
  $action = null;
  foreach ($routes as $route => $handler) {
      if (strpos($uri, $route) === 0) {
          $controller = new $handler[0]();
          $action = $handler[1];
          break;
      }
  }

