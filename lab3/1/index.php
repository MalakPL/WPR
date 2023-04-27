<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Odwróć wiersze w pliku tekstowym</title>
</head>
<body>
<h1>Odwróć wiersze w pliku tekstowym</h1>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <label for="file">Wybierz plik tekstowy:</label>
    <input type="file" name="file" id="file" required>
    <br><br>
    <input type="submit" value="Odwróć wiersze" name="submit">
</form>
<?php
if (isset($_FILES['file']) && $_FILES['file']['error'] == 0)
{
    $file = $_FILES['file'];

    $content = file_get_contents($file['tmp_name']);
    $lines = explode(PHP_EOL, $content);
    $reversed_lines = array_reverse($lines);
    $reversed_content = implode(PHP_EOL, $reversed_lines);

    $output_filename = 'reversed_' . $file['name'];
    file_put_contents($output_filename, $reversed_content);

    echo "<h3>Pomyślnie odwrócono kolejność wierszy w pliku. <a href='$output_filename' download>Pobierz plik</a></h3>";
}
?>
</body>
</html>
