<?php
namespace model;
require_once('bootstrap.php');

class modeltypecompte{

    private $opendb;

    public function __construct()
    {
       $this->opendb = new bootstrap();
    }
    
    function ajoutercomptebloque($datedébut, $datefin, $numCmpte, $cleRip, $Frouverture, $Etat, $Solde){

        $sqlbloque = "INSERT INTO `Compte`( `datedebut`, `datefin`,`cleRib`, `numCmpte`, `Frouverture`, `Etat`,`Solde`, idTypeCompte) VALUES ('$datedébut', '$datefin', '$cleRip', $numCmpte, $Frouverture, '$Etat', $Solde, 3)";
    
        //$sql = $db->openDatabase()->query("SELECT * FROM `Compte`")->fetchAll();
       //$sql = $db->openDatabase()->exec("INSERT INTO `Compte`(cleRib,	Etat,numCmpte) VALUE (12,1,2548) ");

        //var_dump($sql);
        $pdo = $this->opendb->openDatabase();
    
        return $pdo->exec($sqlbloque);
    }
    
    
    
    function ajoutercomptecourant($numCmpte, $cleRip, $Agios,$Etat, $Solde, $idTypeCompte ){
    
        $sqlcourant = "INSERT INTO `Compte` (`numCmpte`, `cleRib`, Agios, `Etat`,`Solde`, idTypeCompte) VALUES ($numCmpte, '$cleRip', $Agios, '$Etat', $Solde, 2)";
    
        $pdo = $this->opendb->openDatabase();
    
       // var_dump($sqlcourant);
    
        return  $pdo->exec($sqlcourant);
    }
    
    
    
    function ajoutercompteepargne($numCmpte, $numAgence, $cleRip, $Frouverture, $Etat, $Solde, $idTypeCompte){
    
        $sqlepargne = "INSERT INTO Compte (`numCmpte`, numAgence , cleRib, `Frouverture` , Etat,`Solde`, idTypeCompte) 
        VALUES ($numCmpte, $numAgence, '$cleRip', $Frouverture, '$Etat', $Solde, 1)";
    
       $pdo = $this->opendb->openDatabase();
     
      //  var_dump($sqlepargne);
    
        return $pdo->exec($sqlepargne);
    }
    
}





?>