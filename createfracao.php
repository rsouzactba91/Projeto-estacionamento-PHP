<?php
// Inclua o arquivo de conexão ao banco de dados
include('connection.php');

// Adicione a lógica de processamento do formulário aqui
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar a entrada e adicionar o veículo ao banco de dados
    $faixadevalor = isset($_POST["faixadevalor"]) ? $_POST["faixadevalor"] : "";
    $valor = isset($_POST["valor"]) ? $_POST["valor"] : "";

    // Determinar a ID correspondente à faixa
    switch ($faixadevalor) {
        case 'faixa1':
            $idfaixa = 1;
            break;
        case 'faixa2':
            $idfaixa = 2;
            break;
        case 'faixa3':
            $idfaixa = 3;
            break;
        case 'faixa4':
            $idfaixa = 4;
            break;
        case 'faixa5':
            $idfaixa = 5;
            break;
        default:
            // Lidar com faixa desconhecida (opcional)
            break;
    }

    // Capturar a ação do formulário
    $acao = isset($_POST["acao"]) ? $_POST["acao"] : "";

    // Executa a ação correspondente
    switch ($acao) {
        case "inserir":
            $sql = "INSERT INTO fracao (idFaixa, valor) VALUES ('$idfaixa', '$valor')";
            $mensagem_acao = "Inserção";
            break;

        case "alterar":
            $sql = "UPDATE fracao SET valor='$valor' WHERE idfaixa='$idfaixa'";
            $mensagem_acao = "Atualização";
            break;

        case "deletar":
            $sql = "DELETE FROM fracao WHERE idfaixa='$idfaixa'";
            $mensagem_acao = "Exclusão";
            break;

        default:
            $mensagem_acao = "Ação desconhecida";
            break;
    }

    // Verificar se a consulta SQL está correta antes de executá-la
    if (isset($sql) && !empty($sql)) {
        // Construir e executar a consulta SQL de atualização
        if ($mysqli->query($sql) === TRUE) {
            header('Location: definirfracao.php'); // Redireciona para 'definirfracao.php' após a execução bem-sucedida.
            exit;
        } else {
            echo "Erro ao executar a consulta. Detalhes: " . $mysqli->error . "<br>";
            echo "Consulta SQL: " . $sql; // Exibe a consulta SQL para fins de depuração.
        }
    }
    
    $mysqli->close();
}
?>
