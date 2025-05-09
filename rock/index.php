<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
</head>
<body>

    <h2>Cadastro de Produtos de Rock</h2>

    <form action="salvar.php" method="post">

        Nome: <input type="text" name="nome" required><br><br>
        Preço: <input type="number" step="0.01" name="preco" required><br><br>
        Quantidade: <input type="number" name="quantidade" required><br><br>
        Categoria:  <select name="categoria" required>

            <option value="Instrumento">Instrumento</option>
            <option value="Roupa">Roupa</option>
            <option value="Acessório">Acessório</option>

        </select><br><br>

        <input type="submit" value="Cadastrar">

    </form>

    <br>

    <a href="listar.php">Ver Produtos Cadastrados</a>


</body>
</html>
