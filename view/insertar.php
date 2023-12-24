<!-- Se hace el requerimiento de el template header-->
<?php require_once 'templates/header.php'; ?>
<?php require_once 'controller/productos_controller.php' ?>

<!-- Titulo--> 
<div class="titulo">
            <h2>Alta de Nuevo Producto</h2>
        </div>
<!-- formulario -->
<div class="contenedor-form">
    <form action="index.php?accion=salvar" method="POST">
        <div class="contenedor-input">
            <label for="nombre_pro">Nombre:</label>
            <input type="text" name="nombre_pro" id="nombre_pro">
        </div>
        <div class="contenedor-input">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" id="marca">
        </div>
        <div class="contenedor-input">
            <label for="fabricado">Fabricado en:</label>
            <input type="text" name="fabricado" id="fabricado">
        </div>
        <div class="contenedor-input">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio">
        </div>
        <div class="contenedor-input">            
            <input class="btn" type="submit" name="accion" value="Salvar">
        </div>        
    </form>
</div> 
<!-- Se hace el requerimiento de el template footer-->
<?php require_once 'templates/footer.php'; ?> 