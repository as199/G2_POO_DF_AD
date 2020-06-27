<?php
//include_once CONTROLLER.'Home.php';
/**
 * class Routeur
 *creer les routes et trouver le controlleur adéquate
 */
class Routeur
{
  private $url;

  private $routes = [
    'home' => ['controller' => 'Home', 'method' => 'showHome'],
    'addEtudiant' => ['controller' => 'Home', 'method' => 'showaddEtudiant'],
    'listerEtudiant' => ['controller' => 'Home', 'method' => 'showlisterEtudiant'],
    'addChambre' => ['controller' => 'Home', 'method' => 'showaddChambre'],
    'listerChambre' => ['controller' => 'Home', 'method' => 'showlisterChambre'],
    'editerChambre' => ['controller' => 'Home', 'method' => 'showvalidereditChambre'],
    'editEtudiant' => ['controller' => 'Home', 'method' => 'showeditEtudiant'],
    'validerEtudiant' => ['controller' => 'Home', 'method' => 'showvaliderEtudiant'],
    'delete' => ['controller' => 'Home', 'method' => 'deleteChambre'],
    'edit' => ['controller' => 'Home', 'method' => 'showeditChambre'] ,
    'validerChambre' => ['controller' => 'Home', 'method' => 'showvaliderChambre']
  ];

  public function __construct($url)
  {
    $this->url = $url;
  }
  public function getRoute(){
    $elements = explode('/',$this->url);
    return $elements[0]; // on recper l'element 0
  }
  public function getParams(){
    $elements = explode('/', $this->url);
    unset($elements[0]);
    for ($i=1; $i <count($elements) ; $i++) {
      $params[$elements[$i]] = $elements[$i+1];
      $i++;
    }
    if(!isset($params)){
      $params = null;
    }
    return $params;
    var_dump($params);exit;
  }
  public function renderController()
  {

    $route =$this->getRoute();
    $params =$this->getParams();

    if (Key_exists($route, $this->routes)) {
      //recuperation d'un controller
      $controller = $this->routes[$route]['controller'];
      //recperation d'une method
      $method = $this->routes[$route]['method'];

      if ($method != "showHome") {
        ob_start();
        $currentController = new $controller();
        $currentController->$method($params);
        $content_for_layout = ob_get_clean();
        include VUE . 'home.php';
      } else {
        $currentController = new $controller();
        $currentController->$method($params);
      }
    } else {
      include VUE . 'home.php';
    }
  }
}
