<?php
//include_once CONTROLLER.'Home.php';
/**
* class Routeur
*creer les routes et trouver le controlleur adéquate
*/
class Routeur{
    private $url;

    private $routes = [
      'home'=>['controller'=>'Home','method'=>'showHome'],
      'addEtudiant'=>['controller'=>'Home','method'=>'showaddEtudiant'],
      'listerEtudiant'=>['controller'=>'Home','method'=>'showlisterEtudiant'],
      'addChambre'=>['controller'=>'Home','method'=>'showaddChambre'],
      'listerChambre'=>['controller'=>'Home','method'=>'showlisterChambre'],
      'validerChambre'=>['controller'=>'Home','method'=>'showvaliderChambre'] ,
      'editEtudiant'=>['controller'=>'Home','method'=>'showeditEtudiant'],
      'validerEtudiant'=>['controller'=>'Home','method'=>'showvaliderEtudiant']
    ];

  public function __construct($url){
    $this->url = $url;
  }

    public function renderController(){
          $url = $this->url;

          if(Key_exists($url,$this->routes)){
            //recuperation d'un controller
            $controller =$this->routes[$url]['controller'];
            //recperation d'une method
             $method =$this->routes[$url]['method'];

            if($method !="showHome"){
               ob_start();
                 $currentController = new $controller();
                 $currentController->$method();
                 $content_for_layout=ob_get_clean();
            include VUE.'home.php';


            }else{
             $currentController = new $controller();
              $currentController->$method();
            }
          }
        else{
              include VUE.'home.php';
           }
    }


}
