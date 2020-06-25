<?php
include '_config.php';
define("BASE_URL","http://localhost/mvc1");
// on charge maintenant myautoload
Myautoload::start();
if(isset($_GET['r'])){
  $url =$_GET['r'];

}else{
  $url ="home";
}

// echo $url; exit;
$routeur = new Routeur($url);

$routeur->renderController();



