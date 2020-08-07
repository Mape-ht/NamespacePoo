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
        $nom = $clientP->getNom();
        $prenom = $clientP->getPrenom();
        $telephone = $clientP->getTelephone();
        $statut = $clientP->getStatut();
        $salaire = $clientP->getSalaire();
        $adresse = $clientP->getAdresse();
        $email = $clientP->getEmail();
        $cin = $clientP->getCin();
        $typeclient_id = $clientP->getTypeclt_id();
        $clientmoral_id = $clientP->getCltmoral_id();



        $sql="INSERT INTO `client_physique`(`id`, `nom`, `prenom`, `telephone`, `statut`, `salaire`, `adresse`, `login`, `password`, `email`, `cin`, `typeclt_id`, `cltmoral_id`) VALUES (null,'$nom','$prenom','$telephone','$statut',$salaire,'$adresse',null,null,'$email','$cin',$typeclient_id,null)";

        //var_dump($sql); //verifier si la connexion avec la database marche
        //die;//pour que l'insertion ne soit pas pris en compte

        
        return $this->db->exec($sql);

        
    }

}
//
?>