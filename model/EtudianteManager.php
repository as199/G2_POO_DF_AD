<?php
class EtudianteManager extends Model{


    public  function __construct()
    {
        $this->table ='etudiant';
        $this->getConnection();
    }

    public  function  findALL(){
        $bdd= $this->getConnection();
        $query = "SELECT * FROM $this->table";
        $req =$bdd->prepare($query);
         $req->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)){

            $etudiante = new Etudiante();

            $etudiante->setMatricule($row['matricule']);
            $etudiante->setPrenom($row['prenom']);
            $etudiante->setNom($row['nom']);
            $etudiante->setEmail($row['email']);

           $etudiantes[] = $etudiante;

         };
         return $etudiantes;
    }
}
