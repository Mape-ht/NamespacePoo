<?php
namespace src\model;

use src\model\DBacces;


class CompteRepository extends DBacces{


    public function __construct()
    {
        parent::__construct();
    }

    public function addCompte($compte){

        $sql = "INSERT INTO `compte_client`(`id`, `numerocte`, `clerib`, `agence_id`, `depotinitial`, `cltphy_id`, `cltmoral_id`, `datecrea`, `typecompte_id`, `typefrais_id`) VALUES (null,'".$compte->getNumerocte()."','".$compte->getClerib()."',null,'".$compte->getDepotinitial()."',null,null,'".$compte->getDatecrea()."','".$compte->getTypecompte_id()."','".$compte->getTypefrais_id()."')";
        
        //var_dump($sql);
        //die;

        return $this->db->exec($sql);
        
    
    }


    /*public function listCompte(){

        $sql = "SELECT * FROM `compte_client`";
        $access = new DBacces;
        return $access->selection($sql);
    }*/

}


?>



