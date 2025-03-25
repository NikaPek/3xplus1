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

if (empty($_POST['skaicius1'])) {
    $ivestasSkaicius = empty($_GET['skaicius']) ? 0 : $_GET['skaicius']; // ternary operatorius kaip csharp
} else {
    $ivestasSkaicius = $_POST['skaicius1']; // ternary operatorius kaip csharp
}

?>

<!DOCTYPE html>
<html>
<body>

<!-- Kvieciama funkcija su vartotojo ivestu parametru -->
<h1><?php isvestiSeka($ivestasSkaicius); ?></h1>

<!-- Atvaizduojama koks yra ivestas kintamasis -->
<p>Ivestas kintamasis yra: <?php echo $ivestasSkaicius ?>.</p>

<!-- sukuriame forma kad vartotojas galetu ivesti skaiciu -->
<form action="/pirmas.php">
    <label for="skaicius">skaicius GET</label>
    <input type="number" id="skaicius" name="skaicius" required><br><br>

    <input type="submit" value="Submit">
</form>

<form action="/pirmas.php" method="post">
    <label for="skaicius1">skaicius POST</label>
    <input type="number" id="skaicius1" name="skaicius1" required><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>