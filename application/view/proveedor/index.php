<h1 class="text-center mt-4">Gestión de proveedores</h1>

<div class="container">
        <a href="<?php echo URL; ?>proveedor/registro" class="btn btn-info mb-2">Agregar</a>
        <a target="_blank" href="<?php echo URL; ?>proveedor/reportes" class="btn btn-secondary  mb-2">Reporte general</a>
        <table class="table table-striped border tablas">
            <thead >
            <tr>
                <td>IDProveedor</td>
                <td>Código</td>
                <td>Nombre</td>
                <td>Teléfono</td>
                <td>Dirección</td>
                <td>Correo</td>
                <td>Estado</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($proveedores as $proveedor) { ?>
                <tr>                
                    <td><?php if (isset($proveedor->IDProveedor)) echo htmlspecialchars($proveedor->IDProveedor, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($proveedor->Codigo)) echo htmlspecialchars($proveedor->Codigo, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($proveedor->Nombre)) echo htmlspecialchars($proveedor->Nombre, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($proveedor->Telefono)) echo htmlspecialchars($proveedor->Telefono, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($proveedor->Direccion)) echo htmlspecialchars($proveedor->Direccion, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($proveedor->Correo)) echo htmlspecialchars($proveedor->Correo, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                    <span data-key="usu" class="badge badge-danger"><?php if($proveedor->Estado=="Inactivo"){echo($proveedor->Estado);};?></span>
                    <span data-key="usu" class="badge badge-success"><?php if($proveedor->Estado=="Activo"){echo($proveedor->Estado);};?></span></td>
                    <td>
                    <td><a href="<?php echo URL . 'proveedor/editar/' . htmlspecialchars($proveedor->IDProveedor, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-info mx-md-n4">Editar</a></td>
                    <td><a target="_blank" href="<?php echo URL . 'proveedor/reportei/' . htmlspecialchars($proveedor->IDProveedor, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-secondary  ">Reporte</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>        
        
    </div>
</div>


</div>