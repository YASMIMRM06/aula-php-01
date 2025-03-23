<?php

class Pessoa
{
    protected $table = 'pessoas';
    protected $fillable = ['nome', 'email'];

    // Método para buscar todas as pessoas
    public static function all()
    {
        // Conecta ao banco de dados
        $pdo = require 'config.php';

        // Busca todas as pessoas
        $stmt = $pdo->query("SELECT * FROM pessoas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}