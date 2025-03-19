<?php
ob_start(); // Adiciona esta linha no início do arquivo

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conexão com o banco de dados estabelecida com sucesso! <br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $forma_empresarial = $_POST['forma_empresarial'];
    $origem = "formulário do site";
    $estagio_lead = "Contato inicial";

    echo "Nome recebido: " . $nome . "<br>";
    echo "Telefone recebido: " . $telefone . "<br>";
    echo "Email recebido: " . $email . "<br>";
    echo "Forma Empresarial recebida: " . $forma_empresarial . "<br>";
    echo "Origem recebida: " . $origem . "<br>";
    echo "Estágio Lead recebido: " . $estagio_lead . "<br>";

    if (empty($nome) || empty($telefone) || empty($email)) {
        echo "Erro: Preencha todos os campos obrigatórios.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Erro: Endereço de e-mail inválido.";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO leads (nome, telefone, email, forma_empresarial, origem, estagio_lead) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nome, $telefone, $email, $forma_empresarial, $origem, $estagio_lead);

    if ($stmt->execute() === TRUE) {
        echo "Novo registro criado com sucesso";
        header("Location: ../Front/index.html"); // Redireciona para a página inicial
        exit; // Encerra a execução do script
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

ob_end_flush(); // Adiciona esta linha no final do arquivo
?>
