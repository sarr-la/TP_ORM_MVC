<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity()
* @ORM\Table(name="TypeCompte")
* */
class TypeCompte{

   /**
    * @ORM\Id()
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
private $id;
   /**
    * @ORM\Column(type="string")
    */
private $libele;
 

public function getId()
{
    return $this->id;
}

public function setId($id){

$this->id = $id;

}



public function getLibele()
{
    return $this->libele;
}

public function setLibele($libele){

$this->libele = $libele;

}



}









?>