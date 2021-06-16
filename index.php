<?php
  session_start();

  include( $_SERVER['HTTP_SERVER_ROOT'] . '/src/route.php' );
  include( $_SERVER['HTTP_SERVER_ROOT'] . '/src/controller/MainController.php' );

  # BASE ROUTE
  Route::add('/', function(){
    $MainController = new MainController();
    $MainController->indexpage();
  });

  Route::run("\/pay_change_webapp");
?>
