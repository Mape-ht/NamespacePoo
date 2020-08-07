<?php
namespace src\entities;


class ClientPhysique{

    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $email;
    private $telephone;
    private $salaire;
    private $statut;
    private $cin;
    private $login;
    private $password;
    private $typeclt_id;
    private $cltmoral_id;
    
    function __construct()
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
     * 
     */ 
    public function setId($id)
    {
        $this->id = $id;

        
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * 
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * 
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * 
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * 
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * 
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * 
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        
    }

    /**
     * Get the value of cin
     */ 
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     *
     * 
     */ 
    public function setCin($cin)
    {
        $this->cin = $cin;

        
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * 
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * 
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * 
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        
    }

    /**
     * Get the value of typeclt_id
     */ 
    public function getTypeclt_id()
    {
        return $this->typeclt_id;
    }

    /**
     * Set the value of typeclt_id
     *
     * 
     */ 
    public function setTypeclt_id($typeclt_id)
    {
        $this->typeclt_id = $typeclt_id;

        
    }

    /**
     * Get the value of cltmoral_id
     */ 
    public function getCltmoral_id()
    {
        return $this->cltmoral_id;
    }

    /**
     * Set the value of cltmoral_id
     *
     * 
     */ 
    public function setCltmoral_id($cltmoral_id)
    {
        $this->cltmoral_id = $cltmoral_id;

        
    }
}
    
    
    
?>