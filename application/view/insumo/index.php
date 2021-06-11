<h1 class="text-center mt-4">Gestión de insumos</h1>

<div class="container">
        <a href="<?php echo URL; ?>insumo/registro" class="btn btn-info mb-2">Agregar</a>
        <a target="_blank" href="<?php echo URL; ?>insumo/reportes" class="btn btn-secondary  mb-2 ml-2">Reporte general</a>
        <table class="table table-striped border tablas">
            <thead >
            <tr>
                <td>Código</td>
                <td>Nombre</td>
                <td>Cantidad</td>
                <td>Estado</td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($insumos1 as $insumo2) { ?>
                <tr> 
                    <td><?php echo ($insumo2->IDInsumo); ?></td>               
                    <td><?php echo ($insumo2->Nombre); ?></td>
                    <td><?php echo ($insumo2->Cantidad); ?></td>
                    

                    <td>
                    
                        
                        <span data-key="usu" class="badge badge-danger"><?php if($insumo2->Estado=="Inactivo"){echo($insumo2->Estado);};?></span>
                        <span data-key="usu" class="badge badge-success"><?php if($insumo2->Estado=="Activo"){echo($insumo2->Estado);};?></span>
                       
                    </td>
                                       
                    <td><a href="<?php echo URL . 'insumo/buscar/' . ($insumo2->IDInsumo); ?>" class="btn btn-info  mx-md-n4">Editar</a></td>
                    <td><a target="_blank" href="<?php echo URL . 'insumo/reporteUnitario/' . htmlspecialchars($insumo2->IDInsumo, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-secondary  mx-md-n5">Reporte</a></td>              
                </tr>
            <?php } ?>
            </tbody>
        </table>        
        
    </div>
</div>


</div>