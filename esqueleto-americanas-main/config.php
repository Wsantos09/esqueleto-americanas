<?php
$servidor = "localhost";
$usuario = "root";
$senha = "root";
$banco = "americanas";

try {
    $pdo = new PDO("mysql:host={$servidor}; dbname={$banco}; port=8889; charset=utf8;", $usuario, $senha);
} catch (\Exception $e) {
    echo "<p> Eroo ao se conectar ao banco<p/>";
    echo $e->getMessage();
}
