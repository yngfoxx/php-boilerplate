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

  public function __construct(String $path = null)
  {
    $this->loader = new FilesystemLoader( $_SERVER['HTTP_SERVER_ROOT'] . '/templates/' );
    $this->twig = new Environment($this->loader);

    switch ($path) {
      case null:
        $this->indexpage();
        break;

      default:
        return (method_exists($this, $path)) ? $this->$path() : $this->error_handler(404);
        break;
    }
  }

  /*
  * Error handler
  */
  public function error_handler($error_code = null) {
    echo $error_code;
  }


  /*
  * Index page
  */
  public function indexpage() {
    echo $this->twig->render('pages/index.html.twig');
  }


  /*
  * Home page
  */
  public function home() {
    echo "Welcome to the home page!";
  }
}

?>
