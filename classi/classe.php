<?php

class Movie {
    public $title;
    public $protagonist;
    public $year;
    public $lenguage;
    public $produced;

    function __construct($_title, $_protagonist, $_Year, $_leanguage, $_produced)
    {
        $this->setTitle($_title);
        $this->setProtagonist($_protagonist);
        $this->setYear($_Year);
        $this->setLenguage($_leanguage);
        $this->setProduced($_produced);
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of protagonist
     */ 
    public function getProtagonist()
    {
        return $this->protagonist;
    }

    /**
     * Set the value of protagonist
     *
     * @return  self
     */ 
    public function setProtagonist($protagonist)
    {
        $this->protagonist = $protagonist;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of lenguage
     */ 
    public function getLenguage()
    {
        return $this->lenguage;
    }

    /**
     * Set the value of lenguage
     *
     * @return  self
     */ 
    public function setLenguage($lenguage)
    {
        $this->lenguage = $lenguage;

        return $this;
    }

    /**
     * Get the value of produced
     */ 
    public function getProduced()
    {
        return $this->produced;
    }

    /**
     * Set the value of produced
     *
     * @return  self
     */ 
    public function setProduced($produced)
    {
        $this->produced = $produced;

        return $this;
    }

    function printCard() {
        $name = $this->getTitle();
        $actor = $this->getProtagonist();
        $productor = $this->getProduced();
        $year = $this->getYear();
        $lean = $this->getLenguage();

        echo "
        <h3>
            <span> $name </span> is a $year film produced by $productor interpreted by $actor in $lean.
        </h3>
        
        ";
        
        
    }
}




