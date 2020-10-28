<?php

//use mymodel\CompteDB;

class OperationController
{
    //Cette function permet au client de conaitre son solde a travers son numCompte
    public function getOperations($compte_id){
        
        // Set HTTP Response Content Type
        header('Content-Type: application/json');
        //pour indiquer qui p acceder a ces resources
        header('Access-Control-Allow-Origin: *');
       //compte= new Operation();
       include "./bootstrap.php";
       //var_dump($entityManager);
       $montant = $entityManager
       ->createQuery("SELECT o.montant FROM Operation o 
                      WHERE o.compte_id = ".$compte_id)
        ->getResult();
        echo json_encode($montant);
    }

}
    

?>