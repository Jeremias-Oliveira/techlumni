<?php
// Configurações do banco de dados
$host = 'localhost';       // ou o IP do servidor MySQL
$usuario = 'root';         // substitua pelo nome de usuário do banco
$senha = 'bdjmf';          // substitua pela senha do banco
$banco = 'techlumni_bd';   // substitua pelo nome do banco de dados

// Criar conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
} else {
    echo "Conectado com sucesso!";
}

// Definir charset
$conn->set_charset("utf8");
?>
