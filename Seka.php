<?php

include "SekosTevas.php";

//Klases seka aprasas
class Seka extends SekosTevas
{
    public function sekaNurodyta()
    {
        return  $this->nuo > 0 && $this->iki > 0;
    }

    public function getIvestaSeka()
    {
        if ($this->sekaNurodyta()) {
            return "Ivestas seka yra nuo: $this->nuo iki: $this->iki .";
        }

        return "";
    }




}