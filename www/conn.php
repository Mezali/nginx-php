<?php
try {
    $pdo = new PDO("mysql:host=bd-php-app.mysql.database.azure.com;dbname=banco", "mazali", "ProxyONE001");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("PHP é uma bosta: o banco deu pau, vai lá resolver isso seu merda" . $e->getMessage());
}
// bosta de php, odeio php, não gosto de php