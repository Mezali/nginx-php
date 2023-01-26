<?php
try {
    $pdo = new PDO("mysql:host=139.144.62.153;dbname=banco", "user", "ProxyONE001");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado";
} catch (PDOException $e) {
    die("ERRO:\n" . $e->getMessage());
}
