<?php
  session_start();

  include( $_SERVER['HTTP_SERVER_ROOT'] . '/src/route.php' );
  foreach (glob($_SERVER['HTTP_SERVER_ROOT'] . '/src/Controller/*.php') as $filename) {
    include($filename);
  }

  # BASE ROUTE
  Route::add('/(.*)', function($path){ $MainController = new MainController($path); });

  Route::run("\/stephens-php-boilerplate");
?>
