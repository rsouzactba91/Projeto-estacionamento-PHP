<?php
include 'connection.php'; // Inclui o arquivo de conexão com o banco de dados.

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id']; // Obtém o valor do parâmetro 'id' da consulta GET.

    // Excluir o veículo com base no ID
    $sql = "DELETE FROM carros WHERE id = $id"; // Cria uma consulta SQL para excluir o registro com o ID especificado.

    if ($mysqli->query($sql) === TRUE) {
        header('Location: listadepatio.php'); // Redireciona para 'index.php' após a exclusão bem-sucedida.
        exit; // Certifique-se de sair após o redirecionamento para evitar a execução adicional do código.
    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error; // Exibe uma mensagem de erro se a exclusão falhar.
    }
}
?>