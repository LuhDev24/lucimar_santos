<?php
$servername = getenv('DB_SERVERNAME');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');
$port = getenv('DB_PORT');

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
