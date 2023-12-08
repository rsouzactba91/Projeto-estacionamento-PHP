<?php
$servername = "localhost:3306"; // Endereço do servidor MySQL.        // Conectar ao banco de dados (substitua essas informações pelos detalhes do seu banco)
$username = "root"; // Nome de usuário do MySQL.
$password = ""; // Senha do MySQL.
$database = "teste"; // Nome do banco de dados.
$mysqli = new mysqli($servername, $username, $password, $database);

// Verifica se houve erro na conexão
if ($mysqli->connect_error) {
    echo 'Falha Na Conexão :('; // Mensagem de erro se a conexão falhar.
} else {
    // Obter dados do formulário
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Consulta SQL para verificar o login
    $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($sql);

  // Verificar se o login foi bem-sucedido
if ($result->num_rows > 0) {
    
    // Redirecionar para inicial.php
    echo "Login bem-sucedido"; // Adicione esta linha para depuração
    header("Location: pagina_inicial.php");

    exit();
} else {
    if ($username == "admin" && $password == "admin") {
        echo "Login certo";
    } else {
        $login_error = "Usuário ou senha incorretos.";
       // echo "Falha no login"; // Adicione esta linha para depuração
    }
}


    $mysqli->close(); // Fechar a conexão após o uso.
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Projeto estacionamento web</title>
    <link rel="stylesheet" type="text/css" href="process_login.css"> <!-- Inclui o arquivo CSS para estilizar a página -->
</head>
<body>
    <div class="login-container">
        <img src="logo_estacionamento.png" alt="Sua Imagem de Login">
        <form action="index.php" method="post">
            <label for="username">Nome de usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Entrar">
        </form>
         </div>
</body>
</html>
