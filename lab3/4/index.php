<?php
require_once('config.php');

if (isAllowedIP())
{
    header('Location: panel.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>IP</title>
</head>
<body>
<h1>Zwykła strona</h1>
</body>
</html>
