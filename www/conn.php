<?php
try {
    $pdo = new PDO("mysql:host=bd-php-app.mysql.database.azure.com;dbname=banco", "mazali", "ProxyONE001");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERRO:\n" . $e->getMessage());
}