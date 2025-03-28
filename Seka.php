<?php

//Klases seka aprasas
class Seka
{
    //Konstuktorius kuri naudojame paduoti default reiksmes
    public function __construct($nuo, $iki)
    {
        $this->nuo = $nuo;
        $this->iki = $iki;
    }

    //Kintamieji su kuriais dirba metodas
    private $nuo;
    private $iki;

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

    //isvestiSeka metodas kuris naudoja kintamuosius is Seka klases
    public function isvestiSeka()
    {
        if (empty($this->nuo) || empty($this->iki)) {
            return [];
        }

        // $itSkaicius = 0;
        $bendrasItSkaicius = 0;
        $masyvas = [];
        $maziausiaiIteraciju = 999999999;
        $daugiausiaIteraciju = 0;
        $maxReiksme = 0;
        $indeksasKuriamBuvoMaziausiaiIteraciju = 0;
        $indeksasKuriamBuvoDaugiausiaiIteraciju = 0;
        $indeksasMaxReiksme = 0;

        if ($this->nuo == 0 || $this->iki == 0) {
            return [];
        }

        if ($this->nuo > $this->iki) {
            echo " Ivesta bloga seka";
            return [];
        }

        for ($i = $this->nuo; $i <= $this->iki; $i++) {
            if ($i == 1) {
                continue;
            }

            //  echo "</br> Skaiciuojam seka skaiciui: ".$i."</br>";
            $itSkaicius = 0;
            $n = $i;
            while ($n != 1) {
                $itSkaicius++;
                $bendrasItSkaicius++;
                $masyvas[] = $n;

                // Jei $n nelyginis
                if ($n % 2 != 0) //& 1)
                {
                    $n = 3 * $n + 1;
                } else {
                    // Jei $n lyginis
                    $n = $n / 2;
                }

                if ($n > $maxReiksme) {
                    $maxReiksme = $n;
                    $indeksasMaxReiksme = $i;
                }

                // echo $n . " ";
            }

            if ($itSkaicius < $maziausiaiIteraciju) {
                $maziausiaiIteraciju = $itSkaicius;
                $indeksasKuriamBuvoMaziausiaiIteraciju = $i;
            }

            if ($itSkaicius > $daugiausiaIteraciju) {
                $daugiausiaIteraciju = $itSkaicius;
                $indeksasKuriamBuvoDaugiausiaiIteraciju = $i;
            }

            //  echo "</br> iteraciju skaicius: " . $itSkaicius . ". </br>";
        }

        echo "
            <table border='1'>
                <tr>
                    <th>Pavadinimas</th>
                    <th>Reiksme</th>
                    <th>Skaicius</th>
                </tr>  
                <tr>
                    <td>didžiausia pasiekta (užaugusi) reikšmė</td>
                    <td> $maxReiksme </td>
                    <td>$indeksasMaxReiksme</td>
                </tr>
                <tr>
                    <td>daugiausiai iteracijų</td>
                    <td> $daugiausiaIteraciju </td>
                    <td>$indeksasKuriamBuvoDaugiausiaiIteraciju</td>
                </tr>
                <tr>
                    <td>mažiausiai iteracijų</td>
                    <td> $maziausiaiIteraciju </td>
                    <td>$indeksasKuriamBuvoMaziausiaiIteraciju</td>
                </tr>
            </table>";
        return $masyvas;
    }


}