<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Prosty kalkulator</title>
</head>
<body>
<form method="post">
    <label for="number1">Liczba 1:</label>
    <input type="number" id="number1" name="number1" required>
    <br>
    <label for="number2">Liczba 2:</label>
    <input type="number" id="number2" name="number2" required>
    <br>
    <label for="operation">Działanie:</label>
    <select id="operation" name="operation" required>
        <option value="">Wybierz działanie</option>
        <option value="add">Dodawanie</option>
        <option value="subtract">Odejmowanie</option>
        <option value="multiply">Mnożenie</option>
        <option value="divide">Dzielenie</option>
    </select>
    <br>
    <input type="submit" value="Oblicz">
</form>

<?php
if ($_POST)
{
    $number1 = $_POST["number1"] ?? 0;
    $number2 = $_POST["number2"] ?? 0;
    $operation = $_POST["operation"] ?? null;

    switch ($operation)
    {
        case "add":
            $result = $number1 + $number2;
            echo "<p>Wynik dodawania: $result</p>";
            break;
        case "subtract":
            $result = $number1 - $number2;
            echo "<p>Wynik odejmowania: $result</p>";
            break;
        case "multiply":
            $result = $number1 * $number2;
            echo "<p>Wynik mnożenia: $result</p>";
            break;
        case "divide":
            if ($number2 == 0) {
                echo "<p>Błąd: nie można dzielić przez zero</p>";
            } else {
                $result = $number1 / $number2;
                echo "<p>Wynik dzielenia: $result</p>";
            }
            break;
        default:
            echo "<p>Błąd: nie wybrano działania</p>";
            break;
    }
}
?>
</body>
</html>
