<?php 
    include_once "conexao.php";

    $codigoCompra = filter_input(INPUT_GET, "codigoCompra", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "DELETE FROM compra WHERE compra_id = ?";

    $stmt = mysqli_prepare($link, $sql);

    mysqli_stmt_bind_param($stmt, "i", $codigoCompra);

    $inserir = mysqli_stmt_execute($stmt);

    if ($inserir) {
        echo "
            <script>
                alert('Registro excluído com sucesso');
            window.location.href = '../historico.php?refresh=' + Math.random();
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Erro ao excluir registro');
            window.location.href = '../historico.php?refresh=' + Math.random();
            </script>
        ";
    }
    

    mysqli_stmt_close($stmt);
    mysqli_close($link);
?>
