<?php
$file = @fopen("links.txt", "r") or die("Nie można otworzyć pliku!");

echo "<ul>";

while (!feof($file)) {
    $line = fgets($file);
    if (!empty(trim($line))) {

        $parts = explode(";", $line);
        $url = trim($parts[0]);
        $description = trim($parts[1]);

        echo "<li><a href=\"$url\">$description</a></li>";
    }
}

echo "</ul>";

fclose($file);
