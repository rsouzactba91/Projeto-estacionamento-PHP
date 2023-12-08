<?php
// Inclua o arquivo de conexão ao banco de dados
include('connection.php');

// Adicione a lógica de processamento do formulário aqui
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar a entrada
    $capacidade_total = isset($_POST["capacidade_total"]) ? $_POST["capacidade_total"] : "";

    // Capturar a ação do formulário
    $acao = isset($_POST["acao"]) ? $_POST["acao"] : "";

    // Verificar se o ID já possui um valor
    $result = $mysqli->query("SELECT * FROM capacidade_estacionamento LIMIT 1");
    $temValor = $result->num_rows > 0;

    // Executa a ação correspondente
    switch ($acao) {
        case "inserir":
            if ($temValor) {
                // Se já existe um valor, realiza uma atualização
                $sql = "UPDATE capacidade_estacionamento SET capacidade_total='$capacidade_total'";
                $mensagem_acao = "Atualização";
            } else {
                // Caso contrário, realiza a inserção normalmente
                $sql = "INSERT INTO capacidade_estacionamento (capacidade_total) VALUES ('$capacidade_total')";
                $mensagem_acao = "Inserção";
            }
            break;

        case "alterar":
            $sql = "UPDATE capacidade_estacionamento SET capacidade_total='$capacidade_total'";
            $mensagem_acao = "Atualização";
            break;

        case "deletar":
            $sql = "DELETE FROM capacidade_estacionamento";
            $mensagem_acao = "Exclusão";
            break;

        default:
            $mensagem_acao = "Ação desconhecida";
            break;
    }

    // Verificar se a consulta SQL está correta antes de executá-la
    if (isset($sql) && !empty($sql)) {
        // Construir e executar a consulta SQL
        if ($result = $mysqli->query($sql)) {
            header('Location: definircapacidade.php'); // Redireciona após a execução bem-sucedida.
            exit;
        } else {
            echo "Erro ao executar a consulta. Detalhes: " . $mysqli->error . "<br>";
            echo "Consulta SQL: " . $sql; // Exibe a consulta SQL para fins de depuração.
        }
    } else {
        echo "A consulta SQL está vazia ou indefinida.";
    }

    $mysqli->close();
}
?>
