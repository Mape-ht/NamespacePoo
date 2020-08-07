<?php
require_once "../../config/autoload.php";
use src\entities\Compte;
use src\model\CompteRepository;


//extract($_POST);
class CompteController
{


    public function addCompteEpargne(){

        if(isset($_POST)&& empty($_POST)==false && ($_POST["typeCompte"])!="0" && ($_POST["typesfrais"])=="1"){//voir si $ post existe et si champs pas vide
            //var_dump($_POST);
            //die; 
             $compte=new Compte();//instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
             
         
             $compte->setNumerocte($_POST["numCompte"]);//récupérer les $_post du view
             //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
         
             $compte->setClerib($_POST["cle"]);
             $compte->setDepotinitial($_POST["initial"]);
             $compte->setDatecrea($_POST["dateOuv"]);
             $compte->setTypecompte_id($_POST["typeCompte"]);
             $compte->setTypefrais_id($_POST["typesfrais"]);
                     
             $compteRep = new CompteRepository();
             $ok = $compteRep->addCompte($compte); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 
             var_dump($ok);
             die;
             if ($ok){
         
                 
                     header('location:../view/compte/compte.php');//si insertion ok retour à la page d'accueil
                        
             }
           
         }
         else
             {
                 echo "Erreur !..."; //sinon message erreur
             }


    }

    public function addCompteCourant(){

        if(isset($_POST)&& empty($_POST)==false && ($_POST["typeCompte"])!="0" && ($_POST["typesfrais"])=="2"){//voir si $ post existe et si champs pas vide
            //var_dump($_POST);
            //die; 
             $compte=new Compte();//instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
             
         
             $compte->setNumerocte($_POST["numCompte"]);//récupérer les $_post du view
             //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
         
             $compte->setClerib($_POST["cle"]);
             $compte->setDepotinitial($_POST["initial"]);
             $compte->setDatecrea($_POST["dateOuv"]);
             $compte->setTypecompte_id($_POST["typeCompte"]);
             $compte->setTypefrais_id($_POST["typesfrais"]);
                     
             $compteRep = new CompteRepository();
             $ok = $compteRep->addCompte($compte); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 
             //var_dump($ok);
             //die;
             if ($ok){
         
                 
                     header('location:../view/compte/compte.php');//si insertion ok retour à la page d'accueil
                        
             }
           
         }
         else
             {
                 echo "Erreur !..."; //sinon message erreur
             }


    }

    public function addCompteBloque(){

        if(isset($_POST)&& empty($_POST)==false && ($_POST["typeCompte"])!="0" && ($_POST["typesfrais"])=="3"){//voir si $ post existe et si champs pas vide
            //var_dump($_POST);
            //die; 
             $compte=new Compte();//instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
             
         
             $compte->setNumerocte($_POST["numCompte"]);//récupérer les $_post du view
             //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
         
             $compte->setClerib($_POST["cle"]);
             $compte->setDepotinitial($_POST["initial"]);
             $compte->setDatecrea($_POST["dateOuv"]);
             $compte->setTypecompte_id($_POST["typeCompte"]);
             $compte->setTypefrais_id($_POST["typesfrais"]);
                     
             $compteRep = new CompteRepository();
             $ok = $compteRep->addCompte($compte); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 
             //var_dump($ok);
             //die;
             if ($ok){
         
                 
                     header('location:../view/compte/compte.php');//si insertion ok retour à la page d'accueil
                        
             }
           
         }
         else
             {
                 echo "Erreur !..."; //sinon message erreur
             }


    }
  
}

if(isset($_POST['ajouter'])){
    if ($_POST['typeCompte'] == "1"){


        $compteController = new CompteController();
        $compteController->addCompteEpargne();

    }if ($_POST['typeCompte'] == "2") {
        
        $compteController = new CompteController();
        $compteController->addCompteCourant();

    }else{


        $compteController = new CompteController();
        $compteController->addCompteBloque();
    }
}


?>