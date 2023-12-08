<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de estacionamento protótipo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="./normalize.css">
</head>
<body>
  
<div class="option-container">
    <div id="app">
        <div class="image-container">
            <img class="entry-image" src="logo_estacionamento.png" alt="Descrição da Imagem">
        </div>

        <form method="post">
            <div class="button-container">
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Verifica qual botão foi pressionado
                    switch ($_POST["botao"])
                     {
                        case "Definir capacidade":
                            header("Location: definircapacidade.php");
                            exit();
                            case "Definir tabela":
                            header("Location: definirtabela.php");
                            exit();
                           case "Definir fração":
                            header("Location: definirfracao.php");
                            exit();
                           case "Voltar":
                                    header("Location: index.php");
                                    exit();
                                    case "Sair":
                                        header("Location: index_old.php");
                                        exit();
                            break;
                    }
                }
                ?>

                <div class="button"><input type="submit" name="botao" value="Definir capacidade"></div>
                <div class="button"><input type="submit" name="botao" value="Definir tabela"></div>
                <div class="button"><input type="submit" name="botao" value="Definir fração"></div>
                <div class="button"><input type="submit" name="botao" value="Voltar"></div>
                <div class="button"><input type="submit" name="botao" value="Sair"></div>
                </form>
            </div>
</body>
</html>
