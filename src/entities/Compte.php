<?php
namespace src\entities;

class Compte{

    private $id;
    private $numerocte;
    private $clerib;
    private $agence_id;
    private $depotinitial;
    private $cltphy_id;
    private $cltmoral_id;
    private $datecrea;
    private $typecompte_id;
    private $typefrais_id;

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
     * Get the value of numerocte
     */ 
    public function getNumerocte()
    {
        return $this->numerocte;
    }

    /**
     * Set the value of numerocte
     *
     * 
     */ 
    public function setNumerocte($numerocte)
    {
        $this->numerocte = $numerocte;

        
    }

    /**
     * Get the value of clerib
     */ 
    public function getClerib()
    {
        return $this->clerib;
    }

    /**
     * Set the value of clerib
     *
     * 
     */ 
    public function setClerib($clerib)
    {
        $this->clerib = $clerib;

        
    }

    /**
     * Get the value of agence_id
     */ 
    public function getAgence_id()
    {
        return $this->agence_id;
    }

    /**
     * Set the value of agence_id
     *
     * 
     */ 
    public function setAgence_id($agence_id)
    {
        $this->agence_id = $agence_id;

        
    }

    /**
     * Get the value of depotinitial
     */ 
    public function getDepotinitial()
    {
        return $this->depotinitial;
    }

    /**
     * Set the value of depotinitial
     *
     * 
     */ 
    public function setDepotinitial($depotinitial)
    {
        $this->depotinitial = $depotinitial;

        
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

    /**
     * Get the value of datecrea
     */ 
    public function getDatecrea()
    {
        return $this->datecrea;
    }

    /**
     * Set the value of datecrea
     *
     * 
     */ 
    public function setDatecrea($datecrea)
    {
        $this->datecrea = $datecrea;

        
    }

    /**
     * Get the value of typecompte_id
     */ 
    public function getTypecompte_id()
    {
        return $this->typecompte_id;
    }

    /**
     * Set the value of typecompte_id
     *
     * 
     */ 
    public function setTypecompte_id($typecompte_id)
    {
        $this->typecompte_id = $typecompte_id;

        
    }

    /**
     * Get the value of typefrais_id
     */ 
    public function getTypefrais_id()
    {
        return $this->typefrais_id;
    }

    /**
     * Set the value of typefrais_id
     *
     * 
     */ 
    public function setTypefrais_id($typefrais_id)
    {
        $this->typefrais_id = $typefrais_id;

        
    }

    /**
     * Get the value of cltphy_id
     */ 
    public function getCltphy_id()
    {
        return $this->cltphy_id;
    }

    /**
     * Set the value of cltphy_id
     *
     * 
     */ 
    public function setCltphy_id($cltphy_id)
    {
        $this->cltphy_id = $cltphy_id;

        
    }
}  

    
?>