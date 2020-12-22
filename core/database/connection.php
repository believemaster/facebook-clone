<?php

$hostDetails = 'mysql:127.0.0.1; dbname = facebook_clone; charset = utf8mb4';
$userAdmin = 'root';
$password = '';

try {
    $pdo = new PDO($hostDetails, $userAdmin, $password);
} catch (PDOException $e) {
    echo 'Connection error!' . $e->getMessage();
}
