<?php

function isvestiSeka($nuo, $iki)
{
    // $itSkaicius = 0;
    $bendrasItSkaicius = 0;
    $masyvas = [];
    $maziausiaiIteraciju = 999999999;
    $daugiausiaIteraciju = 0;
    $maxReiksme = 0;
    $indeksasKuriamBuvoMaziausiaiIteraciju = 0;
    $indeksasKuriamBuvoDaugiausiaiIteraciju = 0;
    $indeksasMaxReiksme = 0;

    if ($nuo == 0 || $iki == 0)
    {
        return [];
    }

    if ($nuo > $iki)
    {
        echo " Ivesta bloga seka";
        return [];
    }

    for ($i = $nuo; $i <= $iki; $i++)
    {
        if ( $i == 1)
        {
            continue;
        }

      //  echo "</br> Skaiciuojam seka skaiciui: ".$i."</br>";
        $itSkaicius = 0;
        $n = $i;
        while ($n != 1)
        {
            $itSkaicius++;
            $bendrasItSkaicius++;
            $masyvas[] = $n;

            // Jei $n nelyginis
            if ($n  % 2 != 0) //& 1)
            {
                $n = 3 * $n + 1;
            }
            else
            {
                // Jei $n lyginis
                $n = $n / 2;
            }

            if ($n > $maxReiksme)
            {
                $maxReiksme = $n;
                $indeksasMaxReiksme = $i;
            }

           // echo $n . " ";
        }

        if ($itSkaicius < $maziausiaiIteraciju)
        {
            $maziausiaiIteraciju = $itSkaicius;
            $indeksasKuriamBuvoMaziausiaiIteraciju = $i;
        }

        if ($itSkaicius > $daugiausiaIteraciju)
        {
            $daugiausiaIteraciju = $itSkaicius;
            $indeksasKuriamBuvoDaugiausiaiIteraciju = $i;
        }

      //  echo "</br> iteraciju skaicius: " . $itSkaicius . ". </br>";
    }

//    echo "</br> bendras iteraciju skaicius: " . $bendrasItSkaicius;
//    echo "</br> max reiksme: " . $maxReiksme ;
//    echo "</br> masyvo reiksmes: " . print_r($masyvas, true) ;
    echo "<table border='1'><tr><th>Pavadinimas</th><th>Reiksme</th><th>Skaicius</th></tr>  <tr><td>didžiausia pasiekta (užaugusi) reikšmė</td><td> $maxReiksme </td><td>$indeksasMaxReiksme</td></tr><tr><td>daugiausiai iteracijų</td><td> $daugiausiaIteraciju </td><td>$indeksasKuriamBuvoDaugiausiaiIteraciju</td></tr><tr><td>mažiausiai iteracijų</td><td> $maziausiaiIteraciju </td><td>$indeksasKuriamBuvoMaziausiaiIteraciju</td></tr></table>";
    return $masyvas;
}

?>

<?php
$ivestasSkaiciusnuo = empty($_GET['nuo']) ? 0 : $_GET['nuo'];
$ivestasSkaiciusiki = empty($_GET['iki']) ? 0 : $_GET['iki'];
?>

<!DOCTYPE html>
<html>
<body>



<!-- Kvieciama funkcija su vartotojo ivestu parametru -->
<h1><?php isvestiSeka($ivestasSkaiciusnuo, $ivestasSkaiciusiki); ?></h1>

<!-- Atvaizduojama koks yra ivestas kintamasis -->
<p>Ivestas seka yra nuo: <?php echo $ivestasSkaiciusnuo ?> iki: <?php echo $ivestasSkaiciusiki ?>.</p>

<!-- sukuriame forma kad vartotojas galetu ivesti skaiciu -->
<form action="/antras.php">
    <label for="nuo">nuo</label>
    <input type="text" id="nuo" name="nuo"><br><br>
    <label for="iki">iki</label>
    <input type="text" id="iki" name="iki"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>