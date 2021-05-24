
<h1 class="text-center mt-4">Gestión de usuarios</h1>

<div class="container">
        <a href="<?php  echo URL; ?>usuario/registro" class="btn btn-info mb-2">Agregar</a>
        <a href="<?php echo URL; ?>usuario/reportes" class="btn btn-secondary  ml-2 mb-2">Reporte general</a>
        <table class="table table-striped border tablas">
            <thead >
            <tr>
                <td>Documento</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Correo</td>
                <td>Teléfono</td>
                <td>Rol</td>
                <td>Estado</td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>                
                    <td><?php if (isset($usuario->Documento)) echo htmlspecialchars($usuario->Documento, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($usuario->Nombre)) echo htmlspecialchars($usuario->Nombre, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($usuario->Apellido)) echo htmlspecialchars($usuario->Apellido, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($usuario->Correo)) echo htmlspecialchars($usuario->Correo, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($usuario->Telefono)) echo htmlspecialchars($usuario->Telefono, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($usuario->Estado)) echo htmlspecialchars($usuario->Rol, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                    
                        
                        <span data-key="usu" class="badge badge-danger"><?php if($usuario->Estado=="Inactivo"){echo($usuario->Estado);};?></span>
                        <span data-key="usu" class="badge badge-success"><?php if($usuario->Estado=="Activo"){echo($usuario->Estado);};?></span>
                       
                    </td>
                   
                    
                    <td><a href="<?php echo URL . 'usuario/editar/' . htmlspecialchars($usuario->IDUsuario, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-info mx-md-n4">Editar</a></td>
                    <td><a href="<?php echo URL . 'usuario/reporteUnitario/' . htmlspecialchars($usuario->IDUsuario, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-secondary  ml-1">Reporte</a></td>
             

                </tr>
            <?php } ?>
            </tbody>
        </table>        
        
    </div>
</div>

      

</div>

<script>
 
 swal({
  icon: "success",
  title: "Actualización exitosa",
}).then(function (result) {

  window.location = "http://localhost/neonGomez/usuario/index";

})

</script>