<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Formularz rezerwacji</title>
</head>
<body>
<h1>Formularz rezerwacji</h1>
<form method="post">
    <label for="ilosc_osob">Ilość osób:</label>
    <select id="ilosc_osob" name="ilosc_osob" required>
        <option value="">Wybierz ilość osób</option>
        <option value="1">1 osoba</option>
        <option value="2">2 osoby</option>
        <option value="3">3 osoby</option>
        <option value="4">4 osoby</option>
    </select>
    <br><br>
    <label for="imie">Imię:</label>
    <input type="text" id="imie" name="imie" required>
    <br><br>
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" id="nazwisko" name="nazwisko" required>
    <br><br>
    <label for="adres">Adres:</label>
    <input type="text" id="adres" name="adres" required>
    <br><br>
    <label for="karta_kredytowa">Numer karty kredytowej:</label>
    <input type="text" id="karta_kredytowa" name="karta_kredytowa" required>
    <br><br>
    <label for="email">Adres e-mail:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="data_pobytu">Data pobytu:</label>
    <input type="date" id="data_pobytu" name="data_pobytu" required>
    <br><br>
    <label for="godzina_przyjazdu">Godzina przyjazdu:</label>
    <input type="time" id="godzina_przyjazdu" name="godzina_przyjazdu" required>
    <br><br>
    <label for="dostawka_dla_dziecka">Dostawka dla dziecka:</label>
    <input type="checkbox" id="dostawka_dla_dziecka" name="dostawka_dla_dziecka">
    <br><br>
    <label for="udogodnienia">Udogodnienia:</label>
    <select id="udogodnienia" name="udogodnienia[]" multiple>
        <option value="klimatyzacja">Klimatyzacja</option>
        <option value="popielniczka">Popielniczka dla palacza</option>
    </select>
    <br><br>
    <input type="submit" value="Wyślij">
</form>

<?php

if($_POST) {
// odbieramy dane z formularza
    $ilosc_osob = $_POST['ilosc_osob'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $karta_kredytowa = $_POST['karta_kredytowa'];
    $email = $_POST['email'];
    $data_pobytu = $_POST['data_pobytu'];
    $godzina_przyjazdu = $_POST['godzina_przyjazdu'];
    $dostawka_dla_dziecka = isset($_POST['dostawka_dla_dziecka']) ? 'Tak' : 'Nie';
    $udogodnienia = isset($_POST['udogodnienia']) ? implode(', ', $_POST['udogodnienia']) : 'Brak';

    echo "<p>Ilość osób: $ilosc_osob</p>";
    echo "<p>Imię i nazwisko: $imie $nazwisko</p>";
    echo "<p>Adres: $adres</p>";
    echo "<p>Numer karty kredytowej: $karta_kredytowa</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Data pobytu: $data_pobytu</p>";
    echo "<p>Godzina przyjazdu: $godzina_przyjazdu</p>";
    echo "<p>Dostawka dla dziecka: $dostawka_dla_dziecka</p>";
    echo "<p>Udogodnienia: $udogodnienia</p>";
}
?>

</body>
</html>
