<?php
include_once "Controller/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico De Compra</title>
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
               <li> <a href="caixa.php" class="link">Caixa</a> </li> 
                </div>

                <div class="navegacao">
               <li> <a href="clientes.php" class="link">Clientes</a> </li> 

                </div>
               <div class="navegacao">
               <li> <a href="" class="link">Histórico</a> </li> 
               </div>
            </ul>
        </nav>
    </header>

    <div> <!-- DIV PAI -->
        <div> <!-- DIV TABELAS -->
            <table border="1px">
                <thead>
                    <tr>
                        <th>Código Do Produto</th>
                        <th>Nome Do Produto</th>
                        <th>Valor Do Produto</th>
                        <th>Categoria Do Produto</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "Select * from compra";
                    $pesquisar = mysqli_query($link, $sql);
                    while ($linha = $pesquisar->fetch_assoc()) {
                        echo "<tr>
                                        <td>" . $linha['compra_id'] . "</td>
                                        <td>" . $linha['compra_nome'] . "</td>
                                        <td>" . $linha['compra_valor'] . "</td>
                                        <td>" . $linha['compra_categoria'] . "</td>
                                        <td>
                                            <a href='editar.php?codigoCompra=" . $linha['compra_id'] . "&nomeCompra=" . $linha['compra_nome'] . "&compraValor=" . $linha['compra_valor'] . "&categoriaCompra=" . $linha['compra_categoria'] . "'>
                                                <img src='Imagens/editar.png' class='imgTabela'>
                                            </a>
                                            </td>
                                            <td>
                                            <a href='Controller/excluirCompras.php?codigoCompra=" . $linha['compra_id'] . "'>
                                                <img src='Imagens/excluir.png' class='imgTabela'>
                                            </a>
                                        </td>
                                      </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div> <!-- FINALIZANDO DIV TABELAS -->
                <div> <!-- FINALIZANDO DIV PAI -->
</body>

</html>