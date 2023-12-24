<?php
//? requerido el archivo ya que tiene las constantes de conexión
require_once "config/bd_config.php";

//? clase conexion a la base de datos
class ConexionDB{
    //? atributos de la clase
    //? variables que reciben los varoles de conexión desde config 
    //? de este proyecto
    private $servidor = HOST;
    private $usuario = USER;
    private $contrasenia = PASSWORD;
    private $dbname = DBNAME;
    //? variable privada que almacenara el objeto de conexión a la base de datos.
    private $conexion;
    //? metodo contructor de la clase se ejecuta cada vez que se cree un nuevo objeto
    public function __construct() {
        //? variable dsn parametro de conexion que guarda los parametros de las constantes del servidor
        //? y de la base de datos
        $dsn = "mysql:host=" . $this->servidor . ";dbname=" . $this->dbname . ";";
        //? Metodo try cacth para tratar las distintas exepciones
        try {
            //? variable conexion que guarda el nuevo obejo de conexion a la base datos
            $this->conexion = new PDO($dsn, $this->usuario, $this->contrasenia);
            //? configuracion de los valores de los atributos para el manejo de errores 
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //? desactiva la emulacion de preparacion de consultas los errores son capturados
            //? por el bloque cacth
            $this->conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            throw new Exception("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }
    //? metodo de la clase para conectarse
    public function get_ObtenerConexion(){
        return $this->conexion;
    }
    //? metodo de la clase para cerrar la conexion
    public function set_CerrarConexion() {
        $this->conexion = null;
    }
}

?>