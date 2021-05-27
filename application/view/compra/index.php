<h1 class="text-center ">Gestión de compras</h1>

<div class="container">
        <a href="<?php echo URL; ?>compra/registro " class="btn btn-info mb-2">Agregar</a>
        <a target="_blank" href="<?php echo URL; ?>compra/reportes" class="btn btn-secondary  mb-2">Reporte general</a>
        <table class="table table-striped border tablas">
            <thead >
                <tr>
                    <td>Código</td>                    
                    <td>Fecha</td>  
                    <td>Proveedor</td>
                    <td>Estado</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($compras as $compra) { ?>
                    <tr>
                    <td><?php echo($compra->IDCompra)?></td>
                    <td><?php echo ($compra->Fecha); ?></td>                     
                    <td><?php echo ($compra->Nombre); ?></td> 
                    <td><span data-key="usu" class="badge badge-danger"><?php if($compra->Estado=="Inactivo"){echo($compra->Estado);};?></span>
                        <span data-key="usu" class="badge badge-success"><?php if($compra->Estado=="Activo"){echo($compra->Estado);};?></span></td>
                    <td><a href="<?php echo URL . 'compra/buscar/' . ($compra->IDCompra); ?>" class="btn btn-info mx-md-n4 ml-4">Editar</a></td>
                    <td><a target="_blank" href="<?php echo URL . 'compra/reporteI/' . ($compra->IDCompra); ?>" class="btn btn-secondary  ">Reporte</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>



</div>
