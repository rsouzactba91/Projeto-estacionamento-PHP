<?php
$servername = "localhost:3306"; // Endereço do servidor MySQL.
$username = "root"; // Nome de usuário do MySQL.
$password = ""; // Senha do MySQL.
$database = "sistema_de_chamados"; // Nome do banco de dados.
$mysqli = new mysqli($servername, $username, $password, $database);

// Verifica se houve erro na conexão
if ($mysqli->connect_error) {
    echo 'Falha Na Conexão :('; // Mensagem de erro se a conexão falhar.
} else {
  //  echo 'Conectado Com Sucesso! :)'; // Mensagem de sucesso se a conexão for bem-sucedida.
}



?>
