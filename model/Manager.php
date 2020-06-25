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
            $etudiante->setNumChambre($row['numChambre']);
            $etudiante->setAdresse($row['adresse']);
            $etudiante->setDateNaissance($row['dateNaissance']);
            $etudiantes[] = $etudiante; // tableau objet
        };
        return $etudiantes;

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

    public function delete($id){
        $bdd = $this->bdd;


        $query ="DELETE FROM `chambre` WHERE numChambre = :id";
        $req =$bdd->prepare($query);
        $req->execute(['id'=>$id]);
        $count = $req->rowCount();


    }

    //ajouter chambre
    public function addChambre($data){

        if(!empty($data)){
        $bdd = $this->bdd;
        $numero =$data['numero'];
        $type =$data['types'];
         $query = "INSERT INTO `chambre`(`numChambre`, `type`)  VALUES ($numero,$type)";

        $req =$bdd->prepare($query);
        $req->execute();



      }
  }
      public function editChambre($data){

        if(!empty($data)){
        $bdd = $this->bdd;
        $numero =$data['numero'];
        $type =$data['types'];
         $query = "UPDATE `chambre` SET `type`=:types WHERE  `numChambre` = :numero";

        $req =$bdd->prepare($query);
        $req->execute(["types"=>$type,"numero"=>$numero]);
        $count = $req->rowCount();


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
         if(!empty($data)){
            $bdd = $this->bdd;
            //$matricule =1005;
        $prenom =$data['prenom'];
        $nom =$data['nom'];
        $email =$data['email'];
        $naissance =$data['naissance'];
        $telephone =$data['telephone'];
        $types =$data['types'];
          $annee=date("Y");
        $comnom =$this->coupe($nom);
        $derpren = $this->fin($prenom);
        $distict = date("is") ;
        $matricule =$annee.$comnom.$derpren.$distict;

          if($types=='boursierLoger'){
            $montant =$data['montant'];
            $numchambre =$data['numchambre'];

             $query = "INSERT INTO etudiant(matricule,nom, prenom, email, dateNaissance, type, montant, telephone,numChambre) VALUES (:matricule,:nom,:prenom,:email,:dateNaissance,:type,:montant,:telephone,:numChambre)";

            $req = $bdd->prepare($query);

          $req->execute(['matricule'=>$matricule,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'dateNaissance'=>$naissance,'type'=>$types,'montant'=>$montant,'telephone'=>$telephone,'numChambre'=>$numchambre]);

            $count = $req->rowCount();

          }elseif($types=='boursierNonLoger'){
            $montant =$data['montant'];
             $query = "INSERT INTO etudiant(matricule,nom, prenom, email, dateNaissance, type, montant, telephone,numChambre) VALUES (:matricule,:nom,:prenom,:email,:dateNaissance,:type,:montant,:telephone)";

            $req = $bdd->prepare($query);

          $req->execute(['matricule'=>$matricule,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'dateNaissance'=>$naissance,'type'=>$types,'montant'=>$montant,'telephone'=>$telephone]);
        $count = $req->rowCount();
          }
          else{
            $adresse =$data['adresse'];
             $numchambre ='neant';
             $montant =0;

             $query = "INSERT INTO etudiant(matricule,nom, prenom, email,adresse, dateNaissance, type,telephone) VALUES (:matricule,:nom,:prenom,:email,:adresse,:dateNaissance,:type,:telephone)";

            $req = $bdd->prepare($query);

          $req->execute(['matricule'=>$matricule,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'adresse'=>$adresse,'dateNaissance'=>$naissance,'type'=>$types,'montant'=>$montant,'telephone'=>$telephone,'numChambre'=>$numchambre]);
            $count = $req->rowCount();
          }
        //   echo $matricule;
        //   echo "<pre>";

        //   var_dump($data);




        //  if($count==1){
        //     echo "collllllll";exit;
        //  }
        //  exit;
      }
    }


}
