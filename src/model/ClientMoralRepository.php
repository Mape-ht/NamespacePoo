<?php

namespace src\model;

use src\model\DBacces;



class ClientMoralRepository extends DBacces
{

    public function __construct()
    {
        parent::__construct();
    }

    public function addClientMo($clientMoral){

        $sql = "INSERT INTO `client_moral`(id, raison_social, nom, adresse, ninea, telephone, email, `login`, `password`) VALUES (null,'".$clientMoral->getRaisonSo()."','".$clientMoral->getNom()."', '".$clientMoral->getAdresse()."', '".$clientMoral->getNinea()."',null,null,null,null)";

        return $this->db->exec($sql);
        //$access = new DBacces();
        //$db=$this->getConnect($sql);//instance de PDOStatement

        /*if($db->exec(array('".$clientMoral->getRaisonSo()."','".$clientMoral->getNom()."', '".$clientMoral->getAdresse()."', '".$clientMoral->getNinea()."'))){
            return true;
        }
        else{
            return false;
        }*/

        


    }

    /*public function listClientMoral(){


        $sql = ("SELECT * FROM client_moral "); 
        $db=$this->getConnect();//instance de PDOStatement
        $db->exec($sql);     
    
    }*/

}
//$client_repository=new ClientMoralRepository();
//$listClientMo =$client_repository->listClientMoral();
//if ($listClientMo != null) {

  //  while ($clientmoral = $listClientMo->fetch(PDO::FETCH_ASSOC)) {
    //    $id = $clientmoral["id"];
      //  echo "<option value='$id'>" . $clientmoral["raison_social"] . "</option>";
        //echo "<option value='$id'>" . $clientmoral["raison_social"] . "</option>";
    //}
//}
?>