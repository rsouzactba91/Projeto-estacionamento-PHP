<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Efetuar baixa do veiculo </title>
    <link rel="stylesheet" type="text/css" href="entrada.css"> <!-- Inclui o arquivo CSS para estilizar a página -->
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Inputmask library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    </head>
<body>

<div class="container">
    <div class="header">
        <img class="entry-image" src="logo_estacionamento.png" alt="Descrição da Imagem">
        
        <div class="form-container">


        <div class="texto-cadastro">
            <h1>efetuar cobrança do estacionamento</h1> <!-- Use h1 for the main title -->
            </div>

            <form action="createcobrança.php" method="POST"> <!-- Formulário para cadastrar veículo -->
           
            <p> <label for="placa">Placa do Veículo (exemplo: ABC-1234):</p></label> <!-- Rótulo do campo de entrada de placa -->

                <input type="text" id="placa" name="placa" required> <!-- Campo de entrada de placa -->
                <button type="submit">Verificar</button> <!-- Botão para enviar o formulário de cadastro -->
                </div>
            </form>
       </div>
    </div>

     
    <div class="button-container">
           
    
    <div class="button">
                <a href="index.php">Voltar</a>
            </div>


            <div class="button">
                <a href="listadepatio.php">Exibir Lista de Pátio</a>

<script>
        // Aplicar a máscara à entrada da placa (ABC-1234)
        $(document).ready(function() {
           $('#placa').inputmask('AAA-9999', {
                placeholder: ' '
            });
        });
    </script>
</div>

</body>
</html>
