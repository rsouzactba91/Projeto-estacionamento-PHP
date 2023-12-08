<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de estacionamento protótipo</title>
    <style>
        
    </style>

    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Inclui o arquivo CSS para estilizar a página -->
    <link rel="stylesheet" href="normalize.css"> <!-- Normaliza o comportamento de estilos em navegadores diferentes. -->
</head>
<body>

    <div class="option-container">
        <div id="app">
            <div class="image-container">
                <img class="entry-image" src="logo_estacionamento.png" alt="Descrição da Imagem">
            </div>



            <div class="button-container">
            <form method="post"> 
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Verifica qual botão foi pressionado
                        switch ($_POST["botao"]) {
                            case "Registrar entrada":
                                header("Location: registrarentrada.php");
                                exit();
                                break;                           
                            case "Exibir lista de patio":
                                header("Location: listadepatio.php"); // Substitua com o nome correto do arquivo
                                exit();
                                break;
                           case "Cobrar estacionamento":
                                header("Location: pagarestacionamento.php"); // Substitua com o nome correto do arquivo
                                exit();
                                break;
                          /*  case "Consultar placa":
                                header("Location: consultarplaca.php"); // Substitua com o nome correto do arquivo
                                exit();
                                break;*/
                            case "Acesso administrativo":
                                header("Location: acessoadmin.php"); // Substitua com o nome correto do arquivo
                                exit();
                                break;
                               /* case "Limpeza de pátio":
                                    header("Location: registrarsaida.php");
                                    exit();
                                    break;*/
                            case "Sair":
                                header("Location: index_old.php"); // Substitua com o nome correto do arquivo
                                exit();
                                break;
                              }
                    }
                    ?>
                    <div class="button"><input type="submit" name="botao" value="Registrar entrada"></div>                   
                    <div class="button"><input type="submit" name="botao" value="Exibir lista de patio"></div>
                    <div class="button"><input type="submit" name="botao" value="Cobrar estacionamento"></div>
                   <!-- <div class="button"><input type="submit" name="botao" value="Consultar placa"></div>
                   <div class="button"><input type="submit" name="botao" value="Limpeza de pátio"></div>-->
                    <div class="button"><input type="submit" name="botao" value="Acesso administrativo"></div>                    
                    <div class="button"><input type="submit" name="botao" value="Sair"></div>
            </form>
                </div>
                    
        </div>
    </div>

</body>
</html>
