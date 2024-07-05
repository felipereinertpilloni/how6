<?php
include_once "Controller/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Clientes</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>

    <header class="header1">
        <nav>
            <ul>
                <div class="navegacao">
               <li> <a href="" class="link">Cadastro</a> </li> 
                </div>

               <div class="navegacao">
               <li> <a href="caixa.php" class="link">Caixa</a> </li> 
                </div>

                <div class="navegacao">
               <li> <a href="clientes.php" class="link">Clientes</a> </li> 

                </div>
               <div class="navegacao">
               <li> <a href="historico.php" class="link">Histórico</a> </li> 
               </div>
            </ul>
        </nav>
    </header>

    <div> <!-- DIV PAI -->
        <div class="formulario"> <!-- DIV FORMULÁRIO -->
            <form method="GET" action="Controller/salvarClientes.php">

            <label for="codigoCliente">Código Do Cliente</label> <br>
                <input placeholder="Código" type="number" name="codigoCliente" id="codigoCliente" readonly> <br><br>

                <label for="nomeCliente">Nome Do Cliente</label> <br>
                <input placeholder="Nome" type="text" name="nomeCliente" id="nomeCliente"> <br><br>

                <label for="cpfCliente">CPF Do Cliente</label> <br>
                <input placeholder="CPF" type="number" name="cpfCliente" id="cpfCliente"> <br><br>

                <label for="enderecoCliente">Endereço Do Cliente</label> <br>
                <input placeholder="Endereço" type="text" name="enderecoCliente" id="enderecoCliente"> <br><br>

                <label for="telefoneCliente">Telefone Do Cliente</label> <br>
                <input placeholder="Telefone" type="number" name="telefoneCliente" id="telefoneCliente"> <br><br>

                <button type="submit">Salvar</button>
            </form>
        </div> <!-- DIV FORMULÁRIO -->
    </div> <!-- FINALIZANDO A DIV PAI -->
</body>

</html>