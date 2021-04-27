<h1 class="text-center">Gestión de clientes</h1>

<div class="container">
        <a href="<?php echo URL; ?>cliente/registro" class="btn btn-info mb-2">Agregar</a>
        <a href="<?php echo URL; ?>cliente/reportes" class="btn btn-danger mb-2">Reporte</a>
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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>                
                        <td><?php if (isset($cliente->Documento)) echo htmlspecialchars($cliente->Documento, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php if (isset($cliente->Nombre)) echo htmlspecialchars($cliente->Nombre, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php if (isset($cliente->Apellido)) echo htmlspecialchars($cliente->Apellido, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php if (isset($cliente->Correo)) echo htmlspecialchars($cliente->Correo, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php if (isset($cliente->Direccion)) echo htmlspecialchars($cliente->Direccion, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php if (isset($cliente->Telefono)) echo htmlspecialchars($cliente->Telefono, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td>
                        <span data-key="usu" class="badge badge-danger"><?php if($cliente->Estado=="Inactivo"){echo($cliente->Estado);};?></span>
                        <span data-key="usu" class="badge badge-success"><?php if($cliente->Estado=="Activo"){echo($cliente->Estado);};?></span>
                        </td>       
                        <td><a href="<?php echo URL . 'cliente/editar/' . htmlspecialchars($cliente->IDCliente, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-info">editar</a></td>
                    
                    </tr>
                <?php } ?>
            </tbody>
        </table>        
        
    </div>
</div>     

</div>    

