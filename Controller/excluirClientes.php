<?php 
    include_once "conexao.php";

    $codigoCliente = filter_input(INPUT_GET, "codigoCliente", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "DELETE FROM cliente WHERE cliente_id = ?";

    $stmt = mysqli_prepare($link, $sql);

    mysqli_stmt_bind_param($stmt, "i", $codigoCliente);

    $inserir = mysqli_stmt_execute($stmt);

    if ($inserir) {
        echo "
            <script>
                alert('Registro excluído com sucesso');
                window.location.href = '../clientes.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Erro ao excluir registro');
                window.location.href = '../clientes.php';
            </script>
        ";
    }
    

    mysqli_stmt_close($stmt);
    mysqli_close($link);
?>