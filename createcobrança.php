<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST["placa"];

    // Consultar o banco de dados para obter o tempo de entrada e saída
    $query_tempo = "SELECT entrada, saida FROM carros WHERE placa = '$placa'";
    $result_tempo = $mysqli->query($query_tempo);

    if ($result_tempo) {
        $row_tempo = $result_tempo->fetch_assoc();
        $entrada = $row_tempo["entrada"];
        $saida = $row_tempo["saida"];

        // Calcular o tempo de estadia em minutos
        $tempo_estadia = (strtotime($saida) - strtotime($entrada)) / 60;

        // Consultar o banco de dados para obter a faixa de valor com base no tempo de estadia
        $query_faixa = "SELECT faixadevalor FROM tabeladevalores WHERE $tempo_estadia BETWEEN tempo_de_estadia_inicial AND tempo_de_estadia_final";
        $result_faixa = $mysqli->query($query_faixa);

        if ($result_faixa) {
            $row_faixa = $result_faixa->fetch_assoc();
            $faixadevalor = $row_faixa["faixadevalor"];

            // Consultar a tabela 'tabeladevalores' para obter o valor associado à faixa
            $query_valor = "SELECT valor FROM tabeladevalores WHERE faixadevalor = '$faixadevalor'";
            $result_valor = $mysqli->query($query_valor);

            if ($result_valor) {
                $row_valor = $result_valor->fetch_assoc();
                $valor = $row_valor["valor"];

                // Agora você tem o valor associado à faixa de tempo, pode ser usado conforme necessário
                echo "O valor a ser cobrado para a placa $placa é: $valor";
            } else {
                echo "Erro na consulta de valor: " . $mysqli->error;
            }

            $result_valor->free_result();
        } else {
            echo "Erro na consulta de faixadevalor: " . $mysqli->error;
        }

        $result_faixa->free_result();
    } else {
        echo "Erro na consulta de tempo: " . $mysqli->error;
    }

    $result_tempo->free_result();
}
?>
