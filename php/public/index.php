<?php 
class DB {
    private $HOST = 'http://wagnerweinert.com.br/phpmyadmin/';
    private $USER = 'tads24_mariano';
    private $PASSWORD = 'tads24_mariano';
    private $DB = "tads24_mariano";
    private $PORT = 3306;
    private $CHARSET = "utf8mb4";
    private $conn;

    public function getConnection() {
        $this->conn = new PDO("mysql:host=$this->HOST;dbname=$this->DB;charset=$this->CHARSET;port=$this->PORT", $this->USER, $this->PASSWORD);
        return $this->conn;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP!!</title>
</head>
<body>
    <h1>Aula 2 PHP</h1>

    <!-- Formulário para cadastrar nova pessoa -->
    <form action="index.php" method="post">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="number" name="idade"><br>
        <button type="submit">Enviar</button>
    </form>

    <!-- Tabela para listar pessoas cadastradas -->
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php
            if (isset($pessoas) && is_array($pessoas)) {
                foreach($pessoas as $pessoa) {
                    echo "<tr>";
                    echo "<td>".$pessoa['nome']."</td>";
                    echo "<td>".$pessoa['idade']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Nenhuma pessoa cadastrada.</td></tr>";
            }
        ?>
    </table>
</body>
</html>
