<h1 class="text-center mt-4">Gestión de productos</h1>

<div class="container">
        <a href="<?php echo URL; ?>producto/registro" class="btn btn-info mb-2">Agregar</a>
        <a href="<?php echo URL; ?>producto/reportes" class="btn btn-secondary mb-2">Reporte general</a>
        <table class="table table-striped border tablas">
            <thead >
                <tr>           
                    <td>ID Producto</td>
                    <td>Nombre</td>
                    <td>Cantidad</td>
                    <td>Precio</td>
                    <td>Tipo</td>
                    <td>Estado</td>
                    <td>Foto</td>
                    <td></td>
                    <td></td>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                    <tr>                
                    <td><?php echo ($producto->IDProducto); ?></td>
                    <td><?php echo ($producto->Nombre); ?></td>
                    <td><?php echo ($producto->Cantidad); ?></td>
                    <td><?php echo ($producto->Precio); ?></td>
                    <td><?php echo ($producto->Tipo); ?></td>                   
                    <td>
                        <span data-key="usu" class="badge badge-danger"><?php if($producto->Estado=="Inactivo"){echo($producto->Estado);};?></span>
                        <span data-key="usu" class="badge badge-success"><?php if($producto->Estado=="Activo"){echo($producto->Estado);};?></span>
                    </td>    
                    <td><img width="30" src="data:image/jpeg;base64,<?php echo base64_encode($producto->Foto);?>"</td>
                    
                    <td><a href="<?php echo URL . 'producto/editar/' . ($producto->IDProducto); ?>" class="btn btn-info mx-md-n4">Editar</a></td>
                    <td><a href="<?php echo URL . 'producto/reporte/' .($producto->IDProducto); ?>" class="btn btn-secondary mx-md-n2 " >Reporte</a></td>
                        
                   

                    </tr>
                <?php } ?>
            </tbody>
        </table>        
        
    </div>
</div >

      

</div>





