<?php
//require_once "./../../vendor/autoload.php";
require_once "../../bootstrap.php";
require_once "../entities/Compte.php";

extract ($_POST);
if(isset($btn)) {

        $compte = new Compte();

        $compte->setCleRib($cleRip);
        $compte->setEtat($Etat);
        $compte->setTypecompte($typecompte);
        $compte->setDatedebut($datedébut);
        $compte->setDatefin($datefin);
        $compte->setNumCmpte($numCmpte);
        $compte->setFrouverture($Frouverture);
        $compte->setSolde($Solde);
        $compte->setNumAgence($numAgence);
        $compte->setAgios($Agios);


        $entityManager->persist($compte);
        $entityManager->flush();

echo "Données bien enregistrées" . $compte->getId() . "\n";
}












?>