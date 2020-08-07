<?php


require_once "../../config/autoload.php";
use src\entities\ClientMoral;
use src\entities\ClientPhysique;
use src\model\ClientMoralRepository;
use src\model\ClientPhysiqueRepository;



//require_once "../../index.php";

//include "../model/ClientMoralRepository.php"; //appeller le fichier modeltraitement de sql
//include "../model/ClientPhysiqueRepository.php"; //appeller le fichier modeltraitement de sql

if(isset($_POST['ajouter'])){
    if ($_POST['cltp'] == "1"){

        if (isset($_POST) && empty($_POST) == false) { //voir si $ post existe et si champs pas vide

        $clientM = new ClientMoral(); //instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)

        $clientM->setRaisonSo($_POST["raisonSo"]); //récupérer les $_post du view
        $clientM->setNom($_POST["nomsEmployeur"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
        $clientM->setAdresse($_POST["adresseEmploi"]);
        $clientM->setNinea($_POST["numIdEmployeur"]);

        $clientMoRep = new ClientMoralRepository();
        $ok = $clientMoRep->addClientMo($clientM); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 

        if ($ok) {


            //header('location:../view/client/client.php');//si insertion ok retour à la page d'accueil
                echo ("=====Client bien inséré !=====");
            }
        } else {
            echo "Erreur !..."; //sinon message erreur
        }

    }else if($_POST['cltp'] == "2"){


        if (isset($_POST) && empty($_POST) == false) { //voir si $ post existe et si champs pas vide
             //var_dump(($_POST));
             //die;
             
            $clientP = new ClientPhysique(); //instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)

            //$clientP->setTypeclt($_POST["cltp"]);
            $clientP->setNom($_POST["nomsClt"]); //récupérer les $_post du view
            $clientP->setPrenom($_POST["prenoms"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
            $clientP->setTelephone($_POST["phone"]); //récupérer les $_post du view
            $clientP->setStatut($_POST["statut"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
            $clientP->setSalaire($_POST["salaire"]);
            $clientP->setAdresse($_POST["adresse"]);
            $clientP->setEmail($_POST["email"]);
            $clientP->setCin($_POST["numIdTravail"]);
            $clientP->setTypeclt_id($_POST["cltp"]);
            $clientP->setCltmoral_id($_POST["employeur"]);
                        // 

            $clientPhyRep = new ClientPhysiqueRepository();
            var_dump($clientPhyRep->addClientPhy($clientP));
            // var_dump($clientP);
            $ok = $clientPhyRep->addClientPhy($clientP);
            //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 
            //var_dump($ok);
            //die;
            if ($ok) {

                //header('location:../view/client/client.php');//si insertion ok retour à la page d'accueil
                echo ("=====Client bien inséré !=====");
            }
        } else {
            echo "Erreur !..."; //sinon message erreur
        }
    }
}


   



