<?php
$servername = "localhost:3306"; // Endereço do servidor MySQL.
$username = "root"; // Nome de usuário do MySQL.
$password = ""; // Senha do MySQL.
$database = "teste"; // Nome do banco de dados.
$mysqli = new mysqli($servername, $username, $password, $database);

// Verifica se houve erro na conexão
if ($mysqli->connect_error) {
    echo 'Falha Na Conexão :('; // Mensagem de erro se a conexão falhar.
} else {
  //  echo 'Conectado Com Sucesso! :)'; // Mensagem de sucesso se a conexão for bem-sucedida.
}

/* try {
    // Consulta SQL
    $sql = "SELECT placa, entrada, saida, created_at, updated_at FROM carros";

    // Executa a consulta
    $result = $mysqli->query($sql);

    // Verifica se a consulta foi bem-sucedida
    if ($result) {
        // Obtém os resultados como um array associativo
        $listaPatio = $result->fetch_all(MYSQLI_ASSOC);
        echo 'Consulta bem-sucedida!';
    } else {
        echo "Erro na consulta: " . $mysqli->error;
    }
} catch (Exception $e) {
    echo "Erro na consulta: " . $e->getMessage();
}

// Feche a conexão após usar
$mysqli->close();*/
?>
