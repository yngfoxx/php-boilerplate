<?php
  session_start();

  include( $_SERVER['HTTP_SERVER_ROOT'] . '/src/route.php' );
  include( $_SERVER['HTTP_SERVER_ROOT'] . '/src/Controller/MainController.php' );

  # BASE ROUTE
  Route::add('/(.*)', function($path){
    $MainController = new MainController($path);
  });

  Route::run("\/pay_change_webapp");
?>
