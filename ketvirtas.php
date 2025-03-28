<?php
include 'Seka.php';

$ivestasSkaiciusnuo = empty($_GET['nuo']) ? 0 : $_GET['nuo'];
$ivestasSkaiciusiki = empty($_GET['iki']) ? 0 : $_GET['iki'];

$seka = new Seka($ivestasSkaiciusnuo, $ivestasSkaiciusiki);
?>

<!DOCTYPE html>
<html>
<body>



<!-- Kvieciama funkcija su vartotojo ivestu parametru -->
<h1><?php $seka->sekaNurodyta() ? $seka->isvestiSeka() : ""; ?></h1>

<!-- Atvaizduojama koks yra ivestas kintamasis -->
<p> <?php echo $seka->getIvestaSeka() ?></p>

<!-- sukuriame forma kad vartotojas galetu ivesti skaiciu -->
<form action="/ketvirtas.php">
    <label for="nuo">nuo</label>
    <input type="text" id="nuo" name="nuo"><br><br>
    <label for="iki">iki</label>
    <input type="text" id="iki" name="iki"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>