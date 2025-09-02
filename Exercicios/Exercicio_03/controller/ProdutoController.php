<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../config/Database.php';
require_once '../model/Produto.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

$database = new Database();
$db = $database->getConnection();

$produto = new Produto($db);

switch ($action) {
    case 'cadastrar':
        if ($_POST) {
            $produto->codigo = $_POST['codigo'];
            $produto->produto = $_POST['produto'];
            $produto->data_validade = $_POST['data_validade'];
            $produto->preco = $_POST['preco'];

            if ($produto->cadastrar()) {
                header("Location: ../view/consulta.php?status=success");
            } else {
                header("Location: ../view/cadastro.php?status=error");
            }
        }
        break;

    default:
        header("Location: ../index.php");
        break;
}
