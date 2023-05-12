<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$nrKarty = $_POST['nrKarty'] ?? null;
$daneZamawiajacego = $_POST['daneZamawiajacego'] ?? null;
$iloscOsob = $_POST['iloscOsob'] ?? null;


$_SESSION['nrKarty'] = $nrKarty;
$_SESSION['daneZamawiajacego'] = $daneZamawiajacego;
$_SESSION['iloscOsob'] = $iloscOsob;


header('Location: step2.php');
exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Pierwsza podstrona</title>
</head>
<body>
<h1>Pierwsza podstrona</h1>
<form method="POST">
    <label>Numer karty: <input type="text" name="nrKarty" required></label><br>
    <label>Dane zamawiającego: <input type="text" name="daneZamawiajacego" required></label><br>
    <label>Ilość osób: <input type="number" name="iloscOsob" required></label><br>
    <input type="submit" value="Przejdź do drugiej podstrony">
</form>
</body>
</html>
