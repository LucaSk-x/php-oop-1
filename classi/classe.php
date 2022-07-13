<?php

class Movie {
    public $title;
    public $protagonist;
    public $year;
    public $time;
    public $lenguage;
    public $produced;

    function __construct($_title, $_protagonist)
    {
        $this->time;
        $this->year;
        $this->lenguage;
        $this->produced;
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
     * Get the value of time
     */ 
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of time
     *
     * @return  self
     */ 
    public function setTime($time)
    {
        $this->time = $time;

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

    
}


