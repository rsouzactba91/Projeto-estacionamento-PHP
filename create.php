<?php
// Inclua o arquivo de conexão ao banco de dados
include('connection.php');

// Adicione a lógica de processamento do formulário aqui
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar a entrada e adicionar o veículo ao banco de dados
    $placa = $_POST["placa"];
    $horarioEntrada = date("Y-m-d H:i:s"); // Obter data e hora atual

    $sql = "INSERT INTO carros (placa, entrada) VALUES ('$placa', NOW())";

    if ($mysqli->query($sql) === TRUE) {
        header('Location: registrarentrada.php'); // Redireciona para 'index.php' após a inserção bem-sucedida.
        exit;
    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error; // Exibe uma mensagem de erro se a inserção falhar.
    }
}
?>