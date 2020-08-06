<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity()
* @ORM\Table(name="Compte")
* */
class Compte {
/**
    * @ORM\Id()
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
private $id;
   /**
    * @ORM\Column(type="string")
    */
private $cleRip;
  /**
    * @ORM\Column(type="integer")
    */
private $Etat;
  /**
    * @ORM\Column(type="string")
    */
private $typecompte;
   /**
    * @ORM\Column(type="string")
    */
private $datedebut;
   /**
    * @ORM\Column(type="string")
    */
private $datefin;
 /**
    * @ORM\Column(type="string")
    */
    private $numCmpte;
    /**
      * @ORM\Column(type="string")
      */
  private $Frouverture;
    /**
      * @ORM\Column(type="string")
      */
  private $Solde;
     /**
      * @ORM\Column(type="string")
      */
  private $numAgence;
     /**
      * @ORM\Column(type="integer")
      */
  private $Agios;
  


public function __construct()
{
    
}
 
public function getId()
{
    return $this->id;
}

public function setId($id){

$this->id = $id;

}



public function getCleRib()
{
    return $this->cleRip;
}

public function setCleRib($cleRip){

$this->cleRip = $cleRip;

}



public function getEtat()
{
    return $this->Etat;
}

public function setEtat($Etat){

$this->Etat = $Etat;
}



public function getTypecompte()
{
    return $this->typecompte;
}

public function setTypecompte($typecompte){

$this->typecompte = $typecompte;
}



public function getDatedebut()
{
    return $this->datedebut;
}

public function setDatedebut($datedebut){

$this->datedebut = $datedebut;
}




public function getDatefin()
{
    return $this->datefin;
}

public function setDatefin($datefin){

$this->datefin = $datefin;
}



public function getNumCmpte()
{
    return $this->numCmpte;
}

public function setNumCmpte($numCmpte){

$this->numCmpte = $numCmpte;

}



public function getFrouverture()
{
    return $this->Frouverture;
}

public function setFrouverture($Frouverture){

$this->Frouverture = $Frouverture;
}



public function getSolde()
{
    return $this->Solde;
}

public function setSolde($Solde){

$this->Solde = $Solde;
}



public function getNumAgence()
{
    return $this->numAgence;
}

public function setNumAgence($numAgence){

$this->numAgence = $numAgence;
}




public function getAgios()
{
    return $this->Agios;
}

public function setAgios($Agios){

$this->Agios = $Agios;
}


}




?>