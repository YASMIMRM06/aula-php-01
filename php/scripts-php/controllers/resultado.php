<?php
require_once '/var/www/scripts/database/config.php';

$database = new DB();

// Inserir nova pessoa (POST)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $conn = $database->getConnection();
    $query = "INSERT INTO pessoas (nome, idade) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $idade);
    $result = $stmt->execute();

    echo $result;
}

// Listar pessoas (GET)
$conn = $database->getConnection();
$query = "SELECT * FROM pessoas";
$stmt = $conn->query($query);
$pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>