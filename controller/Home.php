<?php


class Home{

    public function showHome(){


      include VUE.'home.php';

    }
    public function coupe($nom){
      $mot='';
      $mot=$nom[0].$nom[1];
      return $mot;
    }
    public function fin($nom){
      $mot='';
     $n=strlen($nom);
     $m=$n-2;
     $mot=$nom[$m].$nom[$n-1];
      return $mot;
    }


    public function showaddEtudiant(){

    include(VUE.'addEtudiant.php');
    }


    public function showvaliderEtudiant(){
      //echo date("Y");
      if(!empty($_POST)){
        $prenom =$_POST['prenom'];
        $nom =$_POST['nom'];
        $email =$_POST['email'];
        $naissance =$_POST['naissance'];
        $telephone =$_POST['telephone'];
        $types =$_POST['types'];

          if($types=='boursierLoger'){
            $montant =$_POST['montant'];
            $numchambre =$_POST['numchambre'];
             $adresse ="";
          }elseif($types=='boursierNonLoger'){
            $montant =$_POST['montant'];
             $numchambre ="";
             $adresse ="";
          }else{
            $adresse =$_POST['adresse'];
             $numchambre ="";
             $montant ="";
          }
          $annee=date("Y");
        $comnom =$this->coupe($nom);
        $derpren = $this->fin($prenom);
        $distict = date("is") ;
        $matricule=$annee.$comnom.$derpren.$distict;

         $query = "INSERT INTO etudiant(matricule, nom, prenom, email, adresse, dateNaissance, type, montant, telephone, numChambre) VALUES ($matricule,$nom,$prenom,$email,$adresse,$naissance,$types,$montant,$telephone,$numchambre)";
        $bdd= new PDO("mysql:host=localhost;dbname=g2_poo_df_ad;charset=utf8","root","");
        $req =$bdd->prepare($query);
        $req->execute();

         include(VUE.'editEtudiant.php');
      }else{
         include(VUE.'editEtudiant.php');
      }



        //annee  //2 premier lettr du nom //deux dernir carac du prenom //4 chiffr distinct



    }

     public function showlisterEtudiant(){

      // $manager = new EtudianteManager();
      // $etudiantes = $manager->findAll();



        $query = "SELECT * FROM etudiant";
        $bdd= new PDO("mysql:host=localhost;dbname=g2_poo_df_ad;charset=utf8","root","");
        $req =$bdd->prepare($query);
        $req->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)){
          $etudiante['matricule'] = $row['matricule'];
          $etudiante['prenom'] = $row['prenom'];
          $etudiante['nom'] = $row['nom'];
          $etudiante['email'] = $row['email'];
          $etudiante['type'] = $row['type'];
          $etudiante['telephone'] = $row['telephone'];
          $etudiante['dateNaissance'] = $row['dateNaissance'];
          $etudiante['adresse'] = $row['adresse'];
          $etudiantes[] = $etudiante;

        }

      $myVue = new Vue('listerEtudiant');
      $myVue->render($etudiantes);

    }
    public function showaddChambre(){

       include(VUE.'addChambre.php');
    }

    public function showlisterChambre(){
      $query = "SELECT * FROM chambre";
        $bdd= new PDO("mysql:host=localhost;dbname=g2_poo_df_ad;charset=utf8","root","");
        $req =$bdd->prepare($query);
        $req->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)){
          $chambre['numero'] = $row['numChambre'];
          $chambre['type'] = $row['type'];

          $chambres[] = $chambre;

        }
       include(VUE.'listerChambre.php');
    }
    public function showvaliderChambre(){

      if(!empty($_POST)){
        $numero =$_POST['numero'];
        $type =$_POST['types'];
         $query = "INSERT INTO `chambre`(`numChambre`, `type`) VALUES ($numero,$type)";
        $bdd= new PDO("mysql:host=localhost;dbname=g2_poo_df_ad;charset=utf8","root","");
        $req =$bdd->prepare($query);
        $req->execute();
        include(VUE.'addChambre.php');
      }else{
        include(VUE.'addChambre.php');

      }



    }

}


