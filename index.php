<?php
// archivo raiz del proyecto
require_once "config/config.php";
require_once "controller/productos_controller.php";  
//? si existe una peticion get con clave accion se debe chequear mediante la funcion
//? metodo existe si hay en la clase AccionController un metodo y este metodo va a tener el nombre de la valor
//? que le estemos pasando en el get y va a ejecutar ese metodo si no entonces va a quedarse en el vista index y 
//?si no existe metodo get tambien estará en el vista index ya que en el controlador hay un metodo index.
if(isset($_GET['accion'])){
    method_exists("AccionController",$_GET['accion'])? AccionController::{$_GET['accion']}():AccionController::index();      
} else{AccionController::index();}    

?>




