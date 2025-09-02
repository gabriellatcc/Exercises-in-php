<?php
class Produto
{
    private $conn;
    private $table_name = "produtos";

    public $codigo;
    public $produto;
    public $data_validade;
    public $preco;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function cadastrar()
    {
        $query = "INSERT INTO " . $this->table_name . "
                  SET
                    codigo=:codigo,
                    produto=:produto,
                    data_validade=:data_validade,
                    preco=:preco";

        $stmt = $this->conn->prepare($query);

        $this->codigo = htmlspecialchars(strip_tags($this->codigo));
        $this->produto = htmlspecialchars(strip_tags($this->produto));
        $this->data_validade = htmlspecialchars(strip_tags($this->data_validade));
        $this->preco = htmlspecialchars(strip_tags($this->preco));

        $stmt->bindParam(":codigo", $this->codigo);
        $stmt->bindParam(":produto", $this->produto);
        $stmt->bindParam(":data_validade", $this->data_validade);
        $stmt->bindParam(":preco", $this->preco);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function listarTodos()
    {
        $query = "SELECT codigo, produto, data_validade, preco FROM " . $this->table_name . " ORDER BY produto ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
