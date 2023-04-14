<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Sprawdzenie liczby pierwszej</title>
</head>
<body>
<h1>Sprawdź, czy liczba jest pierwsza</h1>
<form method="post">
    <label for="number">Podaj liczbę całkowitą dodatnią:</label>
    <input type="number" min="1" step="1" id="number" name="number" required>
    <button type="submit">Sprawdź</button>
</form>

<?php

if ($_POST) {
    $number = (int)$_POST["number"];

    if ($number <= 0)
    {
        echo "Podana liczba musi być dotatnia";
    }
    else
    {
        $isPrime = isPrime($number);

        if ($isPrime['result'])
        {
            echo "$number jest liczbą pierwszą. Iteracje: " . $isPrime['iterations'];
        }
        else
        {
            echo "$number nie jest liczbą pierwszą. Iteracje: " . $isPrime['iterations'];
        }
    }
}

function isPrime($number)
{
    $iterations = 1;
    if ($number < 2)
    {
        return ["result" => false, "iterations" => $iterations];
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        $iterations++;
        if ($number % $i == 0) {
            return ["result" => false, "iterations" => $iterations];
        }
    }

    return ["result" => true, "iterations" => $iterations];
}

?>
</body>
</html>
