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
    header("Location: <estacionamento>index.php");

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
<div class="container mt-5">
<div class="header">
<img class="entry-image" src="/estacionamento/logo_estacionamento.png" alt="Descrição da Imagem">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="username">Nome de usuário:</label>
                <input type="text" id="username" name="username" class="form-control" required placeholder="usuário">
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" class="form-control" required placeholder="senha">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </form>
    </div>
</body>
</html>
