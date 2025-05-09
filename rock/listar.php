<?php
    require "conexao.php";

    $resultado = mysqli_query($conn, "SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>

    <h2>Produtos Cadastrados</h2>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço (R$)</th>
            <th>Quantidade</th>
            <th>Categoria</th>
        </tr>

        <?php while ($linha = mysqli_fetch_assoc($resultado)): ?>

        <tr>
            <td><?= $linha['id'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= number_format($linha['preco'], 2, ',', '.') ?></td>
            <td><?= $linha['quantidade'] ?></td>
            <td><?= $linha['categoria'] ?></td>
        </tr>

        <?php endwhile; ?>

    </table>

    <br><a href="index.php">Cadastrar Novo Produto</a>
    
</body>
</html>

<?php mysqli_close($conn); ?>
