<h1 class="text-center">Gestión de clientes</h1>
<!-- hbfhbfhrehj -->
<div class="container">
        <a href="<?php echo URL; ?>cliente/registro" class="btn btn-info mb-2">Agregar</a>
        <a href="<?php echo URL; ?>cliente/reportes" class="btn btn-secondary mb-2">Reporte</a>
        <table class="table table-striped border tablas">
            <thead >
                <tr>
                    <td>Documento</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Correo</td>
                    <td>Direccion</td>
                    <td>Telefono</td>
                    <td>Estado</td>
                    <td></td>
                    <td></td>
                            
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>                
                        <td><?php echo ($cliente->Documento); ?></td>
                        <td><?php echo ($cliente->Nombre); ?></td>
                        <td><?php echo ($cliente->Apellido); ?></td>
                        <td><?php echo ($cliente->Correo); ?></td>
                        <td><?php echo ($cliente->Direccion); ?></td>
                        <td><?php echo ($cliente->Telefono); ?></td>
                        <td>
                        <span data-key="usu" class="badge badge-danger"><?php if($cliente->Estado=="Inactivo"){echo($cliente->Estado);};?></span>
                        <span data-key="usu" class="badge badge-success"><?php if($cliente->Estado=="Activo"){echo($cliente->Estado);};?></span>
                        </td>
                        <td><a href="<?php echo URL . 'cliente/editar/' .($cliente->IDCliente); ?>" class="btn btn-info mx-md-n4">Editar</a></td>                        
                        <td><a href="<?php /*fff*/ echo URL . 'cliente/reporte/' .($cliente->IDCliente); ?>" class="btn btn-secondary ">Reporte</a></td>
                            
                       
                    </tr>
                <?php } ?>
            </tbody>
        </table>        
        
    </div>
</div>     

</div>    

