<?php

$ini = parse_ini_file('app.ini',true);

$host = $ini["database"]["host"];
$db   = $ini["database"]["db"];
$user = $ini["database"]["user"];
$pass = $ini["database"]["pass"];
$charset = $ini["database"]["charset"];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
