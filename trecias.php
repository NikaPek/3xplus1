<?php
function isvestiSeka($n)
{
    $itSkaicius = 0;

    if ($n <= 0)
    {
        return false;
    }

    while ($n != 1)
    {
        $itSkaicius++;


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
        echo $n." ";
    }

    echo "</br> iteraciju skaicius: " . $itSkaicius . ".";
}

?>

<?php
if (!empty($_POST['skaicius1'])) {
    $ivestasSkaicius = $_POST['skaicius1'];
} else {
    $ivestasSkaicius = empty($_GET['skaicius']) ? 0 : $_GET['skaicius'];
}

?>

<!DOCTYPE html>
<html>
<body>

<!-- Kvieciama funkcija su vartotojo ivestu parametru -->
<h1><?php isvestiSeka($ivestasSkaicius); ?></h1>

<!-- Atvaizduojama koks yra ivestas kintamasis -->
<p>Ivestas kintamasis yra: <?php echo $ivestasSkaicius ?>.</p>

<p>GET Forma</p>
<!-- sukuriame forma kad vartotojas galetu ivesti skaiciu -->
<form action="/trecias.php">
    <label for="skaicius">skaicius</label>
    <input type="text" id="skaicius" name="skaicius">
    <br><br>

    <input type="submit" value="Submit">
</form>

<p>POST Forma</p>
<!-- sukuriame forma kad vartotojas galetu ivesti skaiciu -->
<form action="/trecias.php" method="post">
    <label for="skaicius1">skaicius</label>
    <input type="text" id="skaicius1" name="skaicius1">
    <br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
