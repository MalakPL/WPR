<?php
require_once('config.php');

if (!isAllowedIP())
{
    header('Location: index.php');
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
<h1>Super tajna strona www</h1>
</body>
</html>

