<!DOCTYPE html>
<html>

<head>
    <title>Exibir capacidade atual</title>
    <link rel="stylesheet" type="text/css" href="definirtabela.css">
</head>

<body>

    <div class="container">
        <div class="header">
            <img class="entry-image" src="logo_estacionamento.png" alt="Descrição da Imagem">
            <form action="createcapacidade.php" method="POST">
                              
            <p><label for="capacidade_total">Defina a capacidade:</label></p>
            <input type="text" id="capacidade_total" name="capacidade_total" required>

                <button type="submit" name="acao" value="inserir">Inserir</button>
                <button type="submit" name="acao" value="alterar">Alterar</button>
                <button type="submit" name="acao" value="deletar">Deletar</button>
               
            </form>
        </div>
    </div>

    <h1>Exibir capacidade atual</h1>
     <ul>
        <table>
            <?php include 'readcapacidade.php'; ?>
        </table>
    </ul>

</body>

</html>
