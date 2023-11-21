<?php

$host = 'host:door'; //Host e Porta do servidor de dados
$base = 'database'; //Nome do banco de dados
$user = 'username'; //usuário do banco de dados
$pass = 'password'; //senha do usuario

try {
    $pdo = new PDO("mysql:host=$host;dbname=$base", $user, $pass);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}