<?php

function isAllowedIP() : bool
{
    $allowed_ips_file = 'allowed_ips.txt';
    $allowed_ips = @file($allowed_ips_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) or die("Nie można odczytać pliku");

    return in_array($_SERVER['REMOTE_ADDR'], $allowed_ips);
}
