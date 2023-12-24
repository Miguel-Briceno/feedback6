<!-- Se hace el requerimiento de el template header-->
<?php require_once 'templates/header.php'; ?>

<?php require_once 'controller/productos_controller.php' ?>
<!-- Titulo--> 
<div class="titulo">
            <h2>Listado de Productos la Base de datos</h2>
        </div>
<!-- enlace para crear un nuevo producto-->
        <div class="crear">
            <a href="index.php?accion=insertar">Crear Nuevo Producto</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Fabricado</th>
                    <th>Precio</th>
                    <th>**Acciones**</th>
                </tr>
            </thead>
            <tbody>
                <!-- Si existen productos en la bbdd se presenta en la siguiente
            tabla, con un foreach-->
                <?php if(!empty($resultados)): ?>                
                <?php foreach($resultados as $resultado=>$valor): ?>
                    
                        <tr>
                            <td><?php echo $valor['id'] ?></td>
                            <td><?php echo $valor['nombre_pro'] ?></td>
                            <td><?php echo $valor['marca'] ?></td>
                            <td><?php echo $valor['fabricado'] ?></td>
                            <td><?php echo $valor['precio'] ?></td>
                            <td>
                                <!-- Enlaces para realizar las siguientes acciones, se pasan los valores de la accion y el ID-->
                                <a class="btn" href="index.php?accion=editar&&id=<?php echo $valor['id'] ?>">Editar</a>
                                <a class="btn" href="index.php?accion=eliminar&&id=<?php echo $valor['id'] ?>"  onClick="return confirm('Estas seguro de eliminar el producto.'); false">Eliminar</a>
                            </td> 
                        </tr>
                    
                <?php endforeach; ?>
                <!-- Si no existen productos en la bbdd se muestra el mensaje -->
                <?php else: ?>
                    <tr>
                        <td colspan="6">"No hay productos"</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table> 
<!-- Se hace el requerimiento de el template footer-->
<?php require_once 'templates/footer.php'; ?> 