<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="compte")
 */
class Compte
{
        /** 
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue
         */
        private $id;
        /** 
         * @ORM\Column(type="string") 
         */
        private $num_compte;
        /** 
         * @ORM\Column(type="string") 
         */
        private $cle_rip;
        /** 
         * @ORM\Column(type="decimal") 
         */
        private $frais_ouverture;
        /** 
         * @ORM\Column(type="decimal") 
         */
        private $agio;
        /** 
         * @ORM\Column(type="string") 
         */
        private $date_ouverture;
        /** 
         * @ORM\Column(type="string") 
         */
        private $date_fermuture;

        /**
         * Many compte have one client. This is the owning side.
         * @ORM\ManyToOne(targetEntity="Client", inversedBy="comptes")
         * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
         */
        private $client_id;

        /**
         * Many compte have one type_compte. This is the owning side.
         * @ORM\ManyToOne(targetEntity="Typecompte", inversedBy="comptes")
         * @ORM\JoinColumn(name="type_compte_id", referencedColumnName="id")
         */
        private $type_compte_id;


        /** @ORM\Column(type="string") **/
        private $etat;

         /**
         * One compte has many operations. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Operation", mappedBy="compte_id")
         */
        private $operations;

         /** 
         * @ORM\Column(type="decimal") 
         */
        private $solde;

        public function __construct()
        {
        }


        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of num_compte
         */
        public function getNum_compte()
        {
                return $this->num_compte;
        }

        /**
         * Set the value of num_compte
         *
         * @return  self
         */
        public function setNum_compte($num_compte)
        {
                $this->num_compte = $num_compte;

                return $this;
        }

       
        /**
         * Get the value of cle_rip
         */
        public function getCle_rip()
        {
                return $this->cle_rip;
        }

        /**
         * Set the value of cle_rip
         *
         * @return  self
         */
        public function setCle_rip($cle_rip)
        {
                $this->cle_rip = $cle_rip;

                return $this;
        }

        /**
         * Get the value of frais_ouverture
         */
        public function getFrais_ouverture()
        {
                return $this->frais_ouverture;
        }

        /**
         * Set the value of frais_ouverture
         *
         * @return  self
         */
        public function setFrais_ouverture($frais_ouverture)
        {
                $this->frais_ouverture = $frais_ouverture;

                return $this;
        }

        /**
         * Get the value of agio
         */
        public function getAgio()
        {
                return $this->agio;
        }

        /**
         * Set the value of agio
         *
         * @return  self
         */
        public function setAgio($agio)
        {
                $this->agio = $agio;

                return $this;
        }

        /**
         * Get the value of date_ouverture
         */
        public function getDate_ouverture()
        {
                return $this->date_ouverture;
        }

        /**
         * Set the value of date_ouverture
         *
         * @return  self
         */
        public function setDate_ouverture($date_ouverture)
        {
                $this->date_ouverture = $date_ouverture;

                return $this;
        }

        /**
         * Get the value of date_fermuture
         */
        public function getDate_fermuture()
        {
                return $this->date_fermuture;
        }

        /**
         * Set the value of date_fermuture
         *
         * @return  self
         */
        public function setDate_fermuture($date_fermuture)
        {
                $this->date_fermuture = $date_fermuture;

                return $this;
        }

        /**
         * Get the value of type_compte_id
         */
        public function getType_compte_id()
        {
                return $this->type_compte_id;
        }

        /**
         * Set the value of type_compte_id
         *
         * @return  self
         */
        public function setType_compte_id($type_compte_id)
        {
                $this->type_compte_id = $type_compte_id;

                return $this;
        }

        /**
         * Get the value of client_id
         */
        public function getClient_id()
        {
                return $this->client_id;
        }

        /**
         * Set the value of client_id
         *
         * @return  self
         */
        public function setClient_id($client_id)
        {
                $this->client_id = $client_id;

                return $this;
        }

        /**
         * Get the value of etat
         */
        public function getEtat()
        {
                return $this->etat;
        }

        /**
         * Set the value of etat
         *
         * @return  self
         */
        public function setEtat($etat)
        {
                $this->etat = $etat;

                return $this;
        }

        /**
         * Get one compte has many operations. This is the inverse side.
         */ 
        public function getOperations()
        {
                return $this->operations;
        }

        /**
         * Set one compte has many operations. This is the inverse side.
         *
         * @return  self
         */ 
        public function setOperations($operations)
        {
                $this->operations = $operations;

                return $this;
        }

        /**
         * Get the value of solde
         */ 
        public function getSolde()
        {
                return $this->solde;
        }

        /**
         * Set the value of solde
         *
         * @return  self
         */ 
        public function setSolde($solde)
        {
                $this->solde = $solde;

                return $this;
        }
}
?>