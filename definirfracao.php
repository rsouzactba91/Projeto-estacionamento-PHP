<!DOCTYPE html>
<html>
<head>
    <title>Definir valor da fração</title>
</head>
<link rel="stylesheet" type="text/css" href="definirfracao.css"> <!-- Inclui o arquivo CSS para estilizar a página -->
<body>

<div class="container">
    <div class="header">
        <img class="entry-image" src="logo_estacionamento.png" alt="Descrição da Imagem">
        <form action="createfracao.php" method="POST">
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
      
             
               </div>
           </form>
      </div>
   </div>



    <h1>Exibir fração</h1>
    <h2><p>Fração atualmente configurada:</h2></p>
    <ul>
    <table>
            <?php include 'readfracao.php'; ?> <!-- Inclui o código PHP para exibir os veículos estacionados na tabela -->
        </table>
    </ul>
</body>
</html>
