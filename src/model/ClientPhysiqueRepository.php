<?php
namespace src\model;


use src\model\DBacces;

class ClientPhysiqueRepository extends DBacces
{

    public function __construct()
    {
        parent::__construct();
    }

    public function addClientPhy($clientP){

        //var_dump($clientP->getCltmoral_id());
        //die;
        $sql="INSERT INTO `client_physique`(`id`, `nom`, `prenom`, `telephone`, `statut`, `salaire`, `adresse`, `login`, `password`, `email`, `cin`, `typeclt_id`, `cltmoral_id`) VALUES (null,'".$clientP->getNom()."','".$clientP->getPrenom()."','".$clientP->getTelephone()."','".$clientP->getStatut()."','".$clientP->getSalaire()."','".$clientP->getAdresse()."','null','null','".$clientP->getEmail()."','".$clientP->getCin()."','".$clientP->getTypeclt_id()."','".$clientP->getCltmoral_id()."')";

        //var_dump($sql); //verifier si la connexion avec la database marche
        //die;//pour que l'insertion ne soit pas pris en compte
        
        return $this->db->exec($sql);

        
    }

}
//
?>