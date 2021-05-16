<h1 class="text-center mt-4">Editar insumo <?php echo($insumo1->Nombre);?></h1>
<div class="container">
    <hr>  
    <form action="<?php echo URL; ?>insumo/actualizar" id="editarInsumo" method="POST" > 
    <input type="hidden" name="idinsumo" value="<?php echo($insumo1->IDInsumo); ?>" />
        
    <form action="<?php echo URL; ?>insumo/guardar" method="POST" > 
        <div class="form-row mt-4">
            <div class="form-group col-md-4">
                <label for="codigo">Nombre</label>            
                <input type="text" class="form-control" id="nombre" value="<?php echo($insumo1->Nombre);?>" required name="nombre" >
            </div>

            <div class="form-group col-4">
                <label for="Nombre">Cantidad </label>
                <input type="text" class="form-control" id="cantidad" Value="<?php echo($insumo1->Cantidad);?>" name="cantidad">
            </div>

            <div class="form-group  col-md-4">
                <label for>Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option><?php echo($insumo1->Estado);?></option>
                    <option  value="Activo">Activo</option>
                    <option  value="Inactivo">Inactivo</option>
                </select>
            </div>
        </div>

        <input type="submit" name="agregarInsumo" class="btn btn-info mt-3" value="Actualizar"/>         
        <a class="btn btn-secondary ml-3 mt-3" href="<?php echo URL; ?>insumo/index"><i class="far fa-window-close"></i> Cancelar</a>
    </form>
</div> 