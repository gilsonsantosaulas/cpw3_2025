<?php
function getConnection() {
    $host_db = 'localhost';
    $nome_db = 'sistema_vendas';
    $usuario_db = 'root';
    $senha_db = '';

    try {
        return new PDO("mysql:host=$host_db;dbname=$nome_db;charset=utf8", $usuario_db, $senha_db);
    } catch (PDOException $e) {
        die("Erro de conexão: " . $e->getMessage());
    }
}

