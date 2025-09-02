<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <a href="../index.php" class="btn-back">← Voltar ao Menu</a>
        <h1>Cadastrar Novo Produto</h1>

        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'error') {
            echo "<p class='message error'>Ocorreu um erro ao cadastrar o produto. Tente novamente.</p>";
        }
        ?>

        <form action="../controller/ProdutoController.php?action=cadastrar" method="POST">
            <div class="form-group">
                <label for="codigo">Código do Produto:</label>
                <input type="text" id="codigo" name="codigo" required>
            </div>
            <div class="form-group">
                <label for="produto">Nome do Produto:</label>
                <input type="text" id="produto" name="produto" required>
            </div>
            <div class="form-group">
                <label for="data_validade">Data de Validade (dd/mm/aaaa):</label>
                <input type="text" id="data_validade" name="data_validade" placeholder="DD/MM/AAAA" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço (R$):</label>
                <input type="number" step="0.01" id="preco" name="preco" placeholder="19.99" required>
            </div>
            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</body>

</html>