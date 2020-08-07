<?php
namespace src\entities;

class ClientMoral{


    private $id;
    private $raisonSo;
    private $nom;
    private $adresse;
    private $ninea;
    private $telephone;
    private $email;
    private $login;
    private $password;


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
     * Get the value of raisonSo
     */ 
    public function getRaisonSo()
    {
        return $this->raisonSo;
    }

    /**
     * Set the value of raisonSo
     *
     * 
     */ 
    public function setRaisonSo($raisonSo)
    {
        $this->raisonSo = $raisonSo;

        
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
     * Get the value of ninea
     */ 
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * Set the value of ninea
     *
     * 
     */ 
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;

        
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
}

?>