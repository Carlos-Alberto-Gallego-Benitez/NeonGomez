<h1 class="text-center ">Gestión de compras</h1>

<div class="container">
        <a href="<?php echo URL; ?>compra/registro " class="btn btn-info mb-2">Agregar</a>
        <table class="table table-striped border tablas">
            <thead >
                <tr>                    
                    <td>Fecha</td>  
                    <td>Proveedor</td>
                    <td>Estado</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($compras as $compra) { ?>
                    <tr>
                    <td><?php echo ($compra->Fecha); ?></td>                     
                    <td><?php echo ($compra->Estado); ?></td> 
                    <td><span data-key="usu" class="badge badge-danger"><?php if($compra->Estado=="Inactivo"){echo($compra->Estado);};?></span>
                        <span data-key="usu" class="badge badge-success"><?php if($compra->Estado=="Activo"){echo($compra->Estado);};?></span></td>
                    <td><a href="<?php echo URL . 'compra/editar/' . ($compra->IDCompra); ?>" class="btn btn-info">editar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>



</div>
