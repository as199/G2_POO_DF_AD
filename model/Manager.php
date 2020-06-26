<?php
session_start();
class Manager {

private  $bdd;
public function __construct()
{
    $this->bdd =new PDO("mysql:host=localhost;dbname=g2_poo_df_ad;charset=utf8","root","");
}
    //lister les etudiants
    public  function  findALL($table){
        $bdd = $this->bdd;
        $query = "SELECT * FROM $table";
        $req =$bdd->prepare($query);
        $req->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)){

            $etudiante = new Etudiante();

            $etudiante->setMatricule($row['matricule']);
            $etudiante->setPrenom($row['prenom']);
            $etudiante->setNom($row['nom']);
            $etudiante->setEmail($row['email']);
            $etudiante->setType($row['type']);
            $etudiante->setMontant($row['montant']);
           $etudiante->setTelephone($row['telephone']);
            $etudiante->setNumChambre($row['numChambre']);
            $etudiante->setAdresse($row['adresse']);
            $etudiante->setDateNaissance($row['dateNaissance']);
            $etudiantes[] = $etudiante; // tableau objet
        };

        return $etudiantes;

    }
    public function findNumchamp(){
      $bdd = $this->bdd;
      $query = "SELECT numChambre FROM chambre";
      $req =$bdd->prepare($query);
      $req->execute();
      $result= $req->fetchAll(PDO::FETCH_ASSOC);
      foreach ($result as  $row) {
        $data[] = $row['numChambre'];

     }
      return $data;
    }
    // lisetre les chambres
    public  function  findAllChambre(){
        $bdd = $this->bdd;
        $query = "SELECT * FROM chambre";
        $req =$bdd->prepare($query);
        $req->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)){

            $chambre= new Chambre();

            $chambre->setNumChambre($row['numChambre']);
            $chambre->setType($row['type']);

            $chambres[] = $chambre; // tableau objet
            $_SESSION['test'] = $chambres;
        };

        return $_SESSION['test'] ;

    }

    public function delete(){
      if (isset($_POST['del_id'])) {
        $id = $_POST['del_id'];
        $bdd = $this->bdd;


        $query ="DELETE FROM `chambre` WHERE numChambre = :id";
        $req =$bdd->prepare($query);
        $req->execute(['id'=>$id]);
        $count = $req->rowCount();
        if($count == 1){
          $teste ="faux";
        }else{
          $teste = "vrai";
        }
        echo json_encode(array('error'=>$teste));exit;
      }



    }

    //ajouter chambre
    public function addChambre($data){

        if(isset($_POST['action']) && $_POST['action']=="ajouterChambre"){
        $bdd = $this->bdd;
        $numero =$_POST['numero'];
        $type =$_POST['types'];
         $query = "INSERT INTO `chambre`(`numChambre`, `type`)  VALUES ($numero,$type)";

        $req =$bdd->prepare($query);
        $req->execute();
        $count = $req->rowCount();
        if($count == 1){
          $test ="faux";
        }else{
          $test = "vrai";
        }
        echo json_encode(array('error'=>$test));exit;


      }
  }
      public function editChambre($data){

        if(!empty($_POST["action"]) && $_POST["action"] =="modifierChambre"){

        $bdd = $this->bdd;
        $numero =$_POST['numero'];
        $type =$_POST['types'];
         $query = "UPDATE `chambre` SET `type`=:types WHERE  `numChambre` = :numero";

        $req =$bdd->prepare($query);
        $req->execute(["types"=>$type,"numero"=>$numero]);
        $count = $req->rowCount();

        if($count == 1){
          $tes ="faux";
        }else{
          $tes = "vrai";
        }
        echo json_encode(array('error'=>$tes));exit;

      }

    }



    //ajouter un etudiant

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


    public function addEtudiant($data){
         if(isset($_POST['action']) && $_POST['action']== "addEtudiant"){
          //var_dump($_POST);exit;
            $bdd = $this->bdd;
            //$matricule =1005;
        $prenom =$_POST['prenom'];
        $nom =$_POST['nom'];
        $email =$_POST['email'];
        $naissance =$_POST['naissance'];
        $telephone =$_POST['telephone'];
        $types =$_POST['types'];
          $annee=date("Y");
        $comnom =$this->coupe($nom);
        $derpren = $this->fin($prenom);
        $distict = date("is") ;
        $matricule =$annee.$comnom.$derpren.$distict;

          if($types== 'boursierLoger'){
            $montant =$_POST['montant'];
            $numchambre =$_POST['numchambre'];

        $query = "INSERT INTO etudiant(matricule,nom, prenom,email, dateNaissance, type, montant, telephone,numChambre) VALUES (:matricule,:nom,:prenom,:email,:dateNaissance,:type,:montant,:telephone,:numChambre)";

        $req = $bdd->prepare($query);

        $req->execute(['matricule' => $matricule, 'nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'dateNaissance' => $naissance, 'type' => $types, 'montant' => $montant, 'telephone' =>$telephone, 'numChambre'=>$numchambre]);
        $count = $req->rowCount();

          }
          elseif($types=='boursierNonLoger'){
            $montant =$_POST['montant'];
        $query = "INSERT INTO etudiant(matricule,nom, prenom,email, dateNaissance, type, montant, telephone) VALUES (:matricule,:nom,:prenom,:email,:dateNaissance,:type,:montant,:telephone)";

        $req = $bdd->prepare($query);

        $req->execute(['matricule' => $matricule, 'nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'dateNaissance' => $naissance, 'type' => $types, 'montant' => $montant, 'telephone' => $telephone]);
        $count = $req->rowCount();
          }

      elseif ($types == 'nonBoursier') {
            $adresse =$_POST['adresse'];
             $numchambre ='neant';
             $montant =0;

        $query = "INSERT INTO etudiant(matricule,nom, prenom,email,adresse, dateNaissance, type, telephone) VALUES (:matricule,:nom,:prenom,:email,:adresse,:dateNaissance,:type,:telephone)";

        $req = $bdd->prepare($query);

        $req->execute(['matricule' => $matricule, 'nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'adresse'=>$adresse,'dateNaissance' => $naissance, 'type' => $types, 'telephone' => $telephone]);
            $count = $req->rowCount();
          }
          if($count == 1){
            $t ="faux";
          }else{
            $t = "vrai";
          }
          echo json_encode(array('error'=>$t));exit;
        //   echo $matricule;
        //   echo "<pre>";

        //   var_dump($_POST);




        //  if($count==1){
        //     echo "collllllll";exit;
        //  }
        //  exit;
      }
    }


}
