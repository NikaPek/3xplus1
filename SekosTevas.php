<?php

class SekosTevas
{
    const AUTHOR = "Veronika";
    const VERSION = "1.0";

    //Konstuktorius kuri naudojame paduoti default reiksmes
    public function __construct($nuo, $iki)
    {
        $this->nuo = $nuo;
        $this->iki = $iki;
    }

    //Kintamieji su kuriais dirba metodas
    protected $nuo;
    protected $iki;

    //Getteriai ir setteriai
    public function getNuo()
    {
        return $this->nuo;
    }

    public function setNuo($nuo)
    {
        $this->nuo = $nuo;
    }

    public function getIki()
    {
        return $this->iki;
    }

    public function setIki($iki)
    {
        $this->iki = $iki;
    }
}