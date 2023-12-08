<?php
include 'connection.php'; // Inclui o arquivo de conexão com o banco de dados.

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['placa'])) {
    $placa = $_GET['placa']; // Obtém o valor do parâmetro 'id' da consulta GET.

    // Excluir o veículo com base na placa
    $sql = "DELETE FROM carros WHERE placa = '$placa'"; // Cria uma consulta SQL para excluir o registro com a placa especificada.

    if ($mysqli->query($sql) === TRUE) {
        header('Location: registrarsaida.php'); // Redireciona para 'index.php' após a exclusão bem-sucedida.
        exit; // Certifique-se de sair após o redirecionamento para evitar a execução adicional do código.
    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error; // Exibe uma mensagem de erro se a exclusão falhar.
    }
}
?>
