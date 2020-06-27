<?php

require_once('./classes/vue.php');
class Home{

    public function showHome($params){

      // var_dump($_SESSION['tab']);exit;
      include VUE.'home.php';

    }



    public function showaddEtudiant($params){
      $manager = new Manager();
      $_SESSION['tab'] = $manager->findNumchamp();
    include(VUE.'addEtudiant.php');
    }


    public function showvaliderEtudiant($params){

       $manager = new Manager();
      $etudiants = $manager->addEtudiant($_POST);

      //$myVue = new Vue();
      // $myVue->redirect('listerEtudiant');

    }

     public function showlisterEtudiant(){

      $manager = new Manager();
      $etudiantes = $manager->findAll('etudiant');

      $myVue = new Vue('listerEtudiant');
      $myVue->render(array('etudiantes'=>$etudiantes));


    }
    public function showaddChambre(){

       include(VUE.'addChambre.php');
    }

    public function showlisterChambre(){
        $manager = new Manager();
      $chambres = $manager->findAllChambre();

      $myVue = new Vue('listerChambre');
       $myVue->render(array('etudiante'=>$chambres));

    }
    public function showvaliderChambre($params){

      $manager = new Manager();
      $chambres = $manager->addChambre($_POST);

     // $myVue = new Vue('addChambre');
       //$myVue->render(array('etudiante'=>$chambres));


    }

      public function showvalidereditChambre(){
        //var_dump($_POST);exit;
        $manager = new Manager();
      $chambres = $manager->editChambre($_POST);

      //$myVue = new Vue();
       //  $myVue->redirect('listerChambre');
     }


// fonction pour delete
    public function deleteChambre($params){

      extract($params);
      // echo $id;exit;
      $manager = new Manager();
       $chambres = $manager->delete();
      //  $myVue = new Vue();
      //  $myVue->redirect('listerChambre');
    }




}


