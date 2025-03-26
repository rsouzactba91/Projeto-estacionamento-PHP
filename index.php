<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de estacionamento protótipo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="sidebar">
        <header class="text-center mb-4">
            <img src="logo_estacionamento.png" alt="Descrição da Imagem" style="width: 100%; height: auto;">
        </header>
        <form method="post">
            <div class="btn-group-vertical w-100">
                <button type="submit" name="botao" value="Registrar entrada" class="btn btn-primary mb-2">Registrar entrada manual</button>
                <button type="submit" name="botao" value="Exibir lista de pátio" class="btn btn-primary mb-2">Exibir lista de pátio</button>
                <button type="submit" name="botao" value="Cobrar estacionamento" class="btn btn-primary mb-2">Cobrar estacionamento</button>
                <button type="submit" name="botao" value="Acesso administrativo" class="btn btn-primary mb-2">Acesso administrativo</button>
                <button type="submit" name="botao" value="Sair" class="btn btn-primary">Sair</button>
            </div>
        </form>
    </div>

    <div class="content">
    <?php
    $iframeSrc = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["botao"])) {
        switch ($_POST["botao"]) {
            case "Registrar entrada":
                $iframeSrc = 'entrada/registrarentrada.php';
                break;
            case "Exibir lista de pátio":
                $iframeSrc = 'lista de pátio/listadepatio.php';
                break;
            case "Cobrar estacionamento":
                $iframeSrc = 'Registrar saida/pagarestacionamento.php';
                break;
            case "Acesso administrativo":
                header("location: acesso admin/acessoadmin.php");
                exit();
            case "Sair":
                header("Location: /estacionamento/login.php");
                exit();
        }
    }
    ?>
    <iframe id="conteudo" src="<?php echo htmlspecialchars($iframeSrc); ?>"></iframe>
</div>
</body>
</html>
