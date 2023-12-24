<?php
require_once "ConexionDB_model.php";

class Producto
{
    private $identificador;
    private $nombre;
    private $marca;
    private $fabricado;
    private $precio;
    private $accion;
    private $pdo;
    public function __construct()
    {
        $this->accion = array();
        $this->pdo = new ConexionDB;
    }
    public function get_Productos()
    {
        $query = $this->pdo->get_ObtenerConexion();
        $stmt = $query->prepare("SELECT * FROM productos");
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return  $resultados;
    }

    public function set_CrearProducto($nombre, $marca, $fabricado, $precio)
    {
        $query = $this->pdo->get_ObtenerConexion();
        $stmt = $query->prepare("INSERT INTO productos(nombre_pro,marca,fabricado,precio) VALUES(:nombre,:marca,:fabricado,:precio)");
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":marca", $marca);
        $stmt->bindParam(":fabricado", $fabricado);
        $stmt->bindParam(":precio", $precio);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return  $resultados;
    }
    public function get_ProductosById($id)
    {
        $query = $this->pdo->get_ObtenerConexion();
        $stmt = $query->prepare("SELECT * FROM productos WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return  $resultados;
    }
    public function set_ProductosById($id, $nombre, $marca, $fabricado, $precio)
    {
        $query = $this->pdo->get_ObtenerConexion();
        $stmt = $query->prepare("UPDATE productos SET nombre_pro=:nombre,marca=:marca,fabricado=:fabricado,precio=:precio WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":marca", $marca);
        $stmt->bindParam(":fabricado", $fabricado);
        $stmt->bindParam(":precio", $precio);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return  $resultados;
    }
    public function delete_ProductosById($id)
    {
        $query = $this->pdo->get_ObtenerConexion();
        $stmt = $query->prepare("DELETE FROM productos WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return  $resultados;
    }
}
