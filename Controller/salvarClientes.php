<?php
include_once "conexao.php";

$codigoCliente = filter_input(INPUT_GET, "codigoCliente", FILTER_VALIDATE_INT);
$nomeCliente = filter_input(INPUT_GET, "nomeCliente", FILTER_SANITIZE_SPECIAL_CHARS);
$cpfCliente = filter_input(INPUT_GET, "cpfCliente", FILTER_SANITIZE_SPECIAL_CHARS);
$enderecoCliente = filter_input(INPUT_GET, "enderecoCliente", FILTER_SANITIZE_SPECIAL_CHARS);
$telefoneCliente = filter_input(INPUT_GET, "telefoneCliente", FILTER_SANITIZE_SPECIAL_CHARS); 

if (!empty($telefoneCliente)) {
    if ($codigoCliente > 0) {
        $sql = "UPDATE cliente SET cliente_nome = ?, cliente_cpf = ?, cliente_endereco = ?, cliente_telefone = ? WHERE cliente_id = ?";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "sssii", $nomeCliente, $cpfCliente, $enderecoCliente, $telefoneCliente, $codigoCliente);
    } else {
        $sql = "INSERT INTO cliente (cliente_nome, cliente_cpf, cliente_endereco, cliente_telefone) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "ssss", $nomeCliente, $cpfCliente, $enderecoCliente, $telefoneCliente);
    }

    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        echo "
            <script>
                alert('Salvo com sucesso');
                window.location.href='../cadastrar.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Erro ao salvar');
                window.location.href='../cadastrar.php';
            </script>
        ";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else {

    echo "
        <script>
            alert('Número de telefone inválido');
            window.location.href='../cadastrar.php';
        </script>
    ";
}
?>
