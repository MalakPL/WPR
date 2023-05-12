<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $daneOsob = array();
    for ($i = 1; $i <= $_SESSION['iloscOsob']; $i++) {
        $osoba = array(
            'imie' => $_POST['imie_' . $i],
            'nazwisko' => $_POST['nazwisko_' . $i],
        );
        $daneOsob[] = $osoba;
    }

    $_SESSION['daneOsob'] = $daneOsob;

    header('Location: step3.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Druga podstrona</title>
</head>
<body>
<h1>Druga podstrona</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php for ($i = 1; $i <= $_SESSION['iloscOsob']; $i++) { ?>
        <h3>Osoba <?php echo $i; ?></h3>
        <label>Imię: <input type="text" name="imie_<?php echo $i; ?>"></label><br>
        <label>Nazwisko: <input type="text" name="nazwisko_<?php echo $i; ?>"></label><br>
    <?php } ?>
    <input type="submit" value="Zapisz dane i przejdź do trzeciej podstrony">
</form>
</body>
</html>
