<?php
include_once "Controller/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Compras</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>

    <header class="header1">
        <nav>
            <ul>
                <div class="navegacao">
               <li> <a href="cadastrar.php" class="link">Cadastro</a> </li> 
                </div>

               <div class="navegacao">
               <li> <a href="" class="link">Caixa</a> </li> 
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
            <form method="GET" action="Controller/salvarCompras.php">

                <label for="codigoCompra">Código Da Compra</label> <br>
                <input placeholder="Código" type="number" name="codigoCompra" id="codigoCompra" readonly> <br><br>

                <label for="nomeCompra">Nome Do Produto</label> <br>
                <input placeholder="Nome" type="text" name="nomeCompra" id="nomeCompra"> <br><br>

                <label for="valorCompra">Valor Do Produto</label> <br>
                <input placeholder="Valor" type="text" name="valorCompra" id="valorCompra" pattern="[0-9]+([,.][0-9]+)?"> <br><br>


                <label for="categoriaCompra">Categoria Do Produto</label> <br>
                <input placeholder="Categoria" type="text" name="categoriaCompra" id="categoriaCompra"> <br><br>

                <button type="submit">Salvar</button>
            </form>
        </div> <!-- DIV FORMULÁRIO -->
    </div> <!-- FINALIZANDO A DIV PAI -->
</body>

</html>