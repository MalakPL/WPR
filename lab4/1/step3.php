<?php
session_start();

if (!isset($_SESSION['nrKarty']) || !isset($_SESSION['daneZamawiajacego']) || !isset($_SESSION['iloscOsob']) || !isset($_SESSION['daneOsob'])) {
    echo 'Brak zebranych danych.';
    exit;
}

$nrKarty = $_SESSION['nrKarty'];
$daneZamawiajacego = $_SESSION['daneZamawiajacego'];
$iloscOsob = $_SESSION['iloscOsob'];
$daneOsob = $_SESSION['daneOsob'];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Trzecia podstrona</title>
</head>
<body>
<h1>Trzecia podstrona</h1>
<h2>Podsumowanie danych:</h2>
<div>Numer karty: <?php echo $nrKarty; ?></div>
<div>Dane zamawiającego: <?php echo $daneZamawiajacego; ?></div>
<div>Ilość osób: <?php echo $iloscOsob; ?></div>
<h3>Dane osób:</h3>
<?php foreach ($daneOsob as $index => $osoba) { ?>
    <b>Osoba <?php echo $index + 1; ?>:</b>
    <div>Imię: <?php echo $osoba['imie']; ?></div>
    <div>Nazwisko: <?php echo $osoba['nazwisko']; ?></div>
    <br>
<?php } ?>
</body>
</html>
