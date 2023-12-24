<?php
//? requiere el modelo siguiente
require_once "model/Producto_model.php";
//? clase accion controller que es requerida por el index del proyecto
class AccionController{
    //? definimos variable privada
    private $accion; 
    //? constructor de la clase   
    public function __construct(){
        $this->accion = new Producto();
    }
    //? metodos estaticos mostrar
    public static function index(){
        $producto = new Producto();
        $resultados = $producto->get_Productos();
        require_once "view/index.php";
    }
    //? metodo insertar 
    public static function insertar(){
        require_once "view/insertar.php";
    }
    public static function salvar(){
        if(isset($_POST['accion'])&&$_POST['accion']=='Salvar'){            
            $nombre = $_REQUEST['nombre_pro'];
            $marca = $_REQUEST['marca'];
            $fabricado = $_REQUEST['fabricado'];
            $precio = $_REQUEST['precio'];            
            $producto = new Producto();
            $resultados = $producto->set_CrearProducto($nombre,$marca,$fabricado,$precio);
            header("Location:".URLSITE);
            exit;
        }else{echo "Datos de producto faltantes o inválidos";}

    }
    //? metodo editar
    public static function editar(){
        if(isset($_GET['accion'])&& $_GET['accion']=='editar')
        {$id = $_GET['id'];
        $producto = new Producto();
        $resultados = $producto->get_ProductosById($id);
        require_once "view/editar.php";}
    }

    //? metodo actualizar
    public static function actualizar(){
        if(isset($_POST['accion'])&& $_POST['accion']=='Editar'){
            $id = $_POST['id'];
            $nombre = $_POST['nombre_pro'];
            $marca = $_POST['marca'];
            $fabricado = $_POST['fabricado'];
            $precio = $_POST['precio'];            
            $producto = new Producto();
            $resultados = $producto->set_ProductosById($id, $nombre, $marca, $fabricado, $precio);
            header("Location:".URLSITE);
            exit;
        }else{echo "Datos de producto faltantes o inválidos";}

    }
    //? metodo eliminar
    public static function eliminar(){
        if(isset($_GET['accion'])&& $_GET['accion']=='eliminar'){
            $id = $_GET['id'];  
            $producto = new Producto();
            $resultados = $producto->delete_ProductosById($id);
            header("Location:".URLSITE);
            exit;
        }else{echo "Datos de producto faltantes o inválidos";}

    }
}