<div class="container card mt-3"style="width: 68rem;">
    <h1 class="text-center mt-4">Registro de proveedores</h1>
    <hr>

    <form action="<?php echo URL; ?>proveedor/guardar" method="POST" id="registroProveedores"> 
        <div class="form-row mt-3">
            <div class="form-group col-md-4">
                <label for="codigo">Código</label>            
                <input type="text" class="form-control" id="codigo" name="codigo" >
            </div>

            <div class="form-group col-4">
                <label for="Nombre">Nombre </label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <div class="form-group col-4">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="form-group col-4">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" >
            </div>
           
            <div class="form-group col-md-4">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo">
            </div>

            

           
        </div>


        

        <input type="submit" name="agregarProveedor" class="btn btn-info mt-3 mb-3" value="Registrar "/>         
        <a class="btn btn-secondary " href="<?php echo URL; ?>proveedor/index"> Cancelar</a>
    </form>
</div>  
