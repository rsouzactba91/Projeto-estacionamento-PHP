<?php
include 'connection.php';

$sql = "SELECT * FROM carros";
$result = $mysqli->query($sql);

echo '<!DOCTYPE html>';
echo '<html lang="pt-br">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<title>Lista de Veículos no Pátio</title>';


echo '<style>';
// Muda a fonte do corpo
echo 'body { 
    font-family: Arial, sans-serif;
    color: #050340; /* Alterado de font-color para color */
    background-color: #fff;
    margin: 0;
    padding: 1px;
}';

// Muda a cor do h1
echo 'h1 { 
    color: #097efc;
    text-align:center;
}';

// Muda a cor do h2 (notei que você escreveu "mkuda", corrigi para "muda")
echo 'h2 {
    color: #097efc;
    text-align:center;
}';

// Estilos para a tabela
echo 'table {
    width: 65%;
    border-collapse: collapse;
    margin-top: 20px;
}';

// Estilos para as células da tabela
echo 'th, td {
    border: 1px solid #097efc;
    padding: 10px;
    text-align: left;
}';

// Preenchimento das primeiras colunas com títulos
echo 'th {
    background-color: #097efc;
    color: white;
}';

// Muda a cor interna das células
echo 'td {
    background-color: #fff;
}';

// Espaçamento dos botões
echo '.button-container {
    margin-top: 20px;
}';

// Estilos para os botões
echo '.button {
    display: inline-block;
    margin-right: 10px;
}';

// Muda cor da borda dos botões, muda a cor da borda interna dos botões 
echo '.botao-saida, .botao-editar, .botao-excluir {
    text-decoration: none;
    padding: 5px 10px;
    border: 1px solid #097efc;
    color: #097efc; 
    background-color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}';

// Muda a cor dos botões ao passar o mouse sobre eles
echo '.botao-saida:hover, .botao-editar:hover, .botao-excluir:hover {
    background-color: #097efc;
    color: #fff;
}';

// Estilos para o container
/* echo '.container {
    max-width: 400px;
    height: 300px;
    background-color: #097efc;
    padding: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}';

*/ 

//centraliza a tabela
echo 'table {
    width: 65%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
}';



echo '</style>';

echo '</head>';
echo '<body>';
echo '<h1>Lista de Veículos no Pátio</h1>';
echo '<h2>Veja abaixo a lista de veículos atualmente estacionados no pátio:</h2>';

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Placa do Veículo</th>';
    echo '<th>Entrada</th>';
    echo '<th>Saída</th>';
    //echo '<th>Ações</th>';
    echo '</tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['placa'] . '</td>';
        echo '<td>' . (isset($row['entrada']) ? $row['entrada'] : 'Não registrado') . '</td>';

        if (isset($row['saida'])) {
            echo '<td>' . $row['saida'] . '</td>';
            echo '<td><a href="delete.php?id=' . $row['id'] . '" class="botao-excluir">Excluir Veículo</a></td>';
        } else {
            echo '<td>Não saiu</td>';
           // echo '<td><a href="exit.php?id=' . $row['id'] . '" class="botao-saida">Marcar Saída</a> | ';
            //echo '<a href="edit.php?id=' . $row['id'] . '" class="botao-editar">Editar Veículo</a> | ';
            //echo '<a href="delete.php?id=' . $row['id'] . '" class="botao-excluir">Excluir Veículo</a></td>';
        }
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'Nenhum veículo estacionado.';
}

//echo '<div class="button-container">';
//echo '<div class="button">';
//echo '<a href="index.php" class="botao-voltar">Voltar</a>';
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>
