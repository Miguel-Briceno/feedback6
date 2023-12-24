<!-- Se hace el requerimiento de el template header-->
<?php require_once 'templates/header.php'; ?>
<?php require_once 'controller/productos_controller.php' ?>

<!-- Titulo--> 
<div class="titulo">
            <h2>Estamos Editando un Producto</h2>
        </div>
<!-- formulario -->
<div class="contenedor-form">
<?php if(!empty($resultados)): ?>                
    <?php foreach($resultados as $resultado=>$valor): ?>
    <form action="index.php?accion=actualizar" method="POST">
        <div class="contenedor-input">
            <label for="id">Id:</label>
            <input type="text" name="id" id="id" value="<?= $valor['id'] ?>">
        </div>
        <div class="contenedor-input">
            <label for="nombre_pro">Nombre:</label>
            <input type="text" name="nombre_pro" id="nombre_pro" value="<?= $valor['nombre_pro'] ?>" >
        </div>
        <div class="contenedor-input">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" id="marca" value="<?= $valor['marca'] ?>" >
        </div>
        <div class="contenedor-input">
            <label for="fabricado">Fabricado en:</label>
            <input type="text" name="fabricado" id="fabricado" value="<?= $valor['fabricado'] ?>" >
        </div>
        <div class="contenedor-input">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" value="<?= $valor['precio']?>" >
        </div>
        <div class="contenedor-input">            
            <input type="submit" name="accion" value="Editar">
        </div>        
    </form>
    <?php endforeach; ?>
        <!-- Si no existen productos en la bbdd se muestra el mensaje -->
        <?php else: ?>
            <tr>
                <td colspan="6">"No hay productos"</td>
            </tr>
        <?php endif; ?>
</div> 
<!-- Se hace el requerimiento de el template footer-->
<?php require_once 'templates/footer.php'; ?> 