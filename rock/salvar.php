<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require "conexao.php";

        $nome = trim($_POST["nome"]);
        $preco = $_POST["preco"];
        $quantidade = $_POST["quantidade"];
        $categoria = $_POST["categoria"];

        if (!empty($nome) && !empty($preco) && !empty($quantidade) && !empty($categoria)) {
            $sql = "INSERT INTO produtos (nome, preco, quantidade, categoria) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sdis", $nome, $preco, $quantidade, $categoria);

            if (mysqli_stmt_execute($stmt)) {
                echo "Produto cadastrado com sucesso.<br><a href='index.php'>Voltar</a>";
            } else {
                echo "Erro ao cadastrar produto.";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Preencha todos os campos.";
        }

        mysqli_close($conn);
    }
?>
