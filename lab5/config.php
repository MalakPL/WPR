<?php
require_once 'vendor/autoload.php';
use MysqliDb as DB;

$db = new DB(array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'db'=> 'mojabaza',
    'port' => 3306
));


/*

CREATE DATABASE mojaBaza;

USE mojaBaza;

CREATE TABLE samochody (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marka VARCHAR(255),
    model VARCHAR(255),
    cena FLOAT,
    rok INT,
    opis VARCHAR(255)
);

INSERT INTO samochody (marka, model, cena, rok, opis)
VALUES
('Ford', 'Focus', 30000.0, 2018, 'Używany Ford Focus, dobrze utrzymany'),
('Audi', 'A4', 45000.0, 2017, 'Audi A4 w dobrym stanie'),
('BMW', 'X5', 55000.0, 2019, 'BMW X5, komfortowy i bezpieczny'),
('Mercedes', 'C-class', 50000.0, 2020, 'Elegancki Mercedes C-class'),
('Volkswagen', 'Golf', 35000.0, 2016, 'Niezawodny Volkswagen Golf'),
('Toyota', 'Corolla', 30000.0, 2019, 'Toyota Corolla, ekonomiczny i wytrzymały');

*/
