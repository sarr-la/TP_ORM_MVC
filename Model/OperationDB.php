<?php
namespace mymodel;
 
Class OperationDB
{
    public function getOperations()
    {
            include "./bootstrap.php";
            
            var_dump($entityManager);
            die;
            $result=$EntityManager
            ->createQuery("SELECT o FROM Operation o where o.id=$id")
            ->getOneOrnullResult ();
            return $result;


        }  
        

    
}






?>