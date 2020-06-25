<?php


class Home{

    public function showHome($params){


      include VUE.'home.php';

    }



    public function showaddEtudiant($params){

    include(VUE.'addEtudiant.php');
    }


    public function showvaliderEtudiant($params){

       $manager = new Manager();
      $etudiants = $manager->addEtudiant($_POST);

      $myVue = new Vue();
       $myVue->redirect('listerEtudiant');

    }

     public function showlisterEtudiant($params){

      $manager = new Manager();
      $etudiantes = $manager->findAll('etudiant');

      $myVue = new Vue('listerEtudiant');
      $myVue->render(array('etudiantes'=>$etudiantes));


    }
    public function showaddChambre(){

       include(VUE.'addChambre.php');
    }

    public function showlisterChambre($params){
        $manager = new Manager();
      $chambres = $manager->findAllChambre();

      $myVue = new Vue('listerChambre');
       $myVue->render(array('etudiante'=>$chambres));

    }
    public function showvaliderChambre($params){

      $manager = new Manager();
      $chambres = $manager->addChambre($_POST);

      $myVue = new Vue('addChambre');
       $myVue->render(array('etudiante'=>$chambres));


    }
    public function showeditChambre($params){
       extract($params);
       $_SESSION['id']=$id;
        include(VUE.'modifierChambre.php');
     }
      public function showvalidereditChambre($params){
        $manager = new Manager();
      $chambres = $manager->editChambre($_POST);

      $myVue = new Vue();
         $myVue->redirect('listerChambre');
     }


// fonction pour delete
    public function deleteChambre($params){
      extract($params);
      $manager = new Manager();
       $chambres = $manager->delete($id);
       $myVue = new Vue();
       $myVue->redirect('listerChambre');
    }




}


