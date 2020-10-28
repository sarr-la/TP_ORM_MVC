<?php
namespace mymodel;
 
Class CompteDB
{
    public function getSoldeByNum()
    {
            include "./bootstrap.php";
            
            var_dump($entityManager);
            die;
            $result=$EntityManager
            ->createQuery("SELECT c FROM Compte c where c.id=$idCompte")
            ->getOneOrnullResult ();
            return $result;


        }  
        

    
}






?>