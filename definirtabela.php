<!DOCTYPE html>
<html>

<head>
    <title>Exibir Tabela de Valores</title>
    <link rel="stylesheet" type="text/css" href="definirtabela.css">
</head>

<body>

    <div class="container">
        <div class="header">
            <img class="entry-image" src="logo_estacionamento.png" alt="Descrição da Imagem">
            <form action="alterartabela.php" method="POST">
                              
                <p><label for="valor">Altere ou delete o valor:</label></p>
                <input type="text" id="valor" name="valor" required>

                <label for="faixa">Selecione a faixa:</label>
                <select id="faixa" name="faixadevalor" required>
                    <option value="faixa1">Faixa 1</option>
                    <option value="faixa2">Faixa 2</option>
                    <option value="faixa3">Faixa 3</option>
                    <option value="faixa4">Faixa 4</option>
                    <option value="faixa5">Faixa 5</option>
                </select>
                <button type="submit" name="acao" value="inserir">Inserir</button>
                <button type="submit" name="acao" value="alterar">Alterar</button>
                <button type="submit" name="acao" value="deletar">Deletar</button>
               
            </form>
        </div>
    </div>

    <h1>Exibir Tabela de Valores</h1>
    <h2>Tabela de valores atualmente configurada:</h2>
    <ul>
        <table>
            <?php include 'readtabela.php'; ?>
        </table>
    </ul>

</body>

</html>
