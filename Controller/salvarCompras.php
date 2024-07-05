<?php 
    include_once "conexao.php";

    $codigoCompra = filter_input(INPUT_GET, "codigoCompra", FILTER_VALIDATE_INT);

    $nomeCompra = filter_input(INPUT_GET, "nomeCompra", FILTER_SANITIZE_SPECIAL_CHARS);

    $valorCompra = str_replace(",", ".", filter_input(INPUT_GET, "valorCompra", FILTER_SANITIZE_SPECIAL_CHARS));

    $categoriaCompra = filter_input(INPUT_GET, "categoriaCompra", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "INSERT INTO compra values (null, '$nomeCompra', $valorCompra, '$categoriaCompra')";

    echo $sql;

    $inserir = mysqli_query($link, $sql);
    if ($inserir) {
        echo "
            <script>
                alert('Salvo com sucesso');
                window.location.href='../caixa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Erro ao salvar')!
                window.location.href='../caixa.php';
            </script>
        ";
    }
?>