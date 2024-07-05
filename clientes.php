<?php
include_once "Controller/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Cadastrados</title>
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
               <li> <a href="" class="link">Clientes</a> </li> 

                </div>
               <div class="navegacao">
               <li> <a href="historico.php" class="link">Histórico</a> </li> 
               </div>
            </ul>
        </nav>
    </header>

    <div> <!-- DIV PAI -->
        <div> <!-- DIV TABELAS -->

            <table border="1px">
                <thead>
                    <tr>
                        <th>Código Do Cliente</th>
                        <th>Nome Do Cliente</th>
                        <th>CPF Do Cliente</th>
                        <th>Endereço Do Cliente</th>
                        <th>Telefone Do Cliente</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "Select * from cliente";
                    $pesquisar = mysqli_query($link, $sql);
                    while ($linha = $pesquisar->fetch_assoc()) {
                        echo "<tr>
                                        <td>" . $linha['cliente_id'] . "</td>
                                        <td>" . $linha['cliente_nome'] . "</td>
                                        <td>" . $linha['cliente_cpf'] . "</td>
                                        <td>" . $linha['cliente_endereco'] . "</td>
                                        <td>" . $linha['cliente_telefone'] . "</td>
                                        <td>
                                            <a href='editar.php?codigoCliente=" . $linha['cliente_id'] . "&nomeCliente=" . $linha['cliente_nome'] . "&cpfCliente=" . $linha['cliente_cpf'] . "&enderecoCliente=" . $linha['cliente_endereco'] . "&telefoneCliente=" . $linha['cliente_telefone'] . "'>
                                                <img src='Imagens/editar.png' class='imgTabela'>
                                            </a>
                                            </td>
                                            <td>
                                            <a href='Controller/excluirClientes.php?codigoCliente=" . $linha['cliente_id'] . "'>
                                                <img src='Imagens/excluir.png' class='imgTabela'>
                                            </a>
                                        </td>
                                      </tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div> <!-- DIV TABELAS -->
    </div> <!-- FINALIZANDO A DIV PAI -->
</body>

</html>