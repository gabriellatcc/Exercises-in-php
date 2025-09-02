<?php
require_once '../config/Database.php';
require_once '../model/Produto.php';

$database = new Database();
$db = $database->getConnection();

$produtoModel = new Produto($db);

$stmt = $produtoModel->listarTodos();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Produtos</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <a href="../index.php" class="btn-back">← Voltar ao Menu</a>
        <h1>Produtos Cadastrados</h1>

        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo "<p class='message success'>Produto cadastrado com sucesso!</p>";
        }
        ?>

        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Produto</th>
                    <th>Data de Validade</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($codigo) . "</td>";
                        echo "<td>" . htmlspecialchars($produto) . "</td>";
                        echo "<td>" . htmlspecialchars($data_validade) . "</td>";
                        echo "<td>R$ " . number_format($preco, 2, ',', '.') . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Nenhum produto cadastrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>