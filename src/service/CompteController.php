<?php

//use mymodel\CompteDB;

class CompteController
{
    //Cette function permet au client de conaitre son solde a travers son numCompte
    public function getSoldldByNum($num_compte){
        
        // Set HTTP Response Content Type
        header('Content-Type: application/json');
        //pour indiquer qui p acceder a ces resources
        header('Access-Control-Allow-Origin: *');
       //compte= new Operation();
       include "./bootstrap.php";
       //var_dump($entityManager);
       $solde = $entityManager
       ->createQuery("SELECT c.solde FROM Compte c 
                      WHERE c.num_compte = ".$num_compte)
        ->getResult();
        echo json_encode($solde);
    }

}
    

?>