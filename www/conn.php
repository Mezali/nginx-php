<?php
try {
    $pdo = new PDO("mysql:host=74.207.232.83;dbname=banco", "user", "ProxyONE001");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado";
} catch (PDOException $e) {
    die("ERRO:\n" . $e->getMessage());
}