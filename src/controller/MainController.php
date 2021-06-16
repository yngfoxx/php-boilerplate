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
  private $path;

  public function __construct(String $path = null)
  {
    $this->loader = new FilesystemLoader( $_SERVER['HTTP_SERVER_ROOT'] . '/templates/' );
    $this->twig = new Environment($this->loader);
    $this->forbidden = array('error_handler', 'database');
    $this->path = $path;

    switch ($path) {
      case null:
        $this->indexpage();
        break;

      default:
        return (method_exists($this, $path) && !in_array($path, $this->forbidden)) ? $this->$path() : $this->error_handler(404);
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
    // Render template
    echo $this->twig->render('pages/index.html.twig');
  }


  /*
  * Home page
  */
  public function home() {
    $param = array( 'path' => $this->path );
    if (isset($_GET['v'])) $param['version'] = $_GET['v'];

    // Render template
    echo $this->twig->render('pages/home.html.twig', $param);
  }
}

?>
