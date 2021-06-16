<?php
  require $_SERVER['HTTP_SERVER_ROOT'] . '/vendor/autoload.php';

  use Twig\Environment;
  use Twig\Loader\FilesystemLoader;

/**
 * Main app controller to handle all views
 */
class MainController
{
  private $loader;
  private $twig;

  public function __construct()
  {
    $this->loader = new FilesystemLoader( $_SERVER['HTTP_SERVER_ROOT'] . '/templates/' );
    $this->twig = new Environment($this->loader);
  }

  public function indexpage()
  {
    echo $this->twig->render('pages/index.html.twig');
  }

  public function renderTest()
  {
    echo "Something...";
  }
}

?>
