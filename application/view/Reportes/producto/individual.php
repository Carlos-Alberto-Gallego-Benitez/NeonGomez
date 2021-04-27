<style>

h1{
    text-align: center;
}  

#tabla_insumos{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tabla_insumos td, #tabla_insumos th{
    border: 1px solid #ddd;
    padding: 8px;
    
}

#tabla_insumos tr:hover {background-color: #ddd;}

#tabla_insumos  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;  
  color: black;
}
</style>


<h1>Reporte producto <?= $producto->Nombre?></h1>

<hr>
<br>
    <form >
    
        <div class="form-row">    
            <div>
                <label for="nombre">Nombre:  </label>
                <?php echo ($producto->Nombre); ?>
            </div>
            <br>
            <div class="form-group col-4">
            <label for="apellido">Cantidad:   </label>
            <?php echo ($producto->Cantidad); ?>
            </div> 
            <br>
            <div class="form-group col-4">
                <label for="precio">Precio:   </label>
                <?php echo ($producto->Precio); ?>
            </div>
        </div>    
        <br>    
        <div>                
            <div class="form-group col-md-4">
                <label>Tipo De Aviso:   </label>                
                <?php echo ($producto->Tipo); ?></option>                   
                
            </div>  
            <br>
            <div class="form-group col-md-4">
                <label for>Estado:   </label>                     
                <?php echo ($producto->Estado); ?>   
            </div>       
        </div>        
        <br>
        <div class="mt-4">
            <label for="foto">Imagen</label>           
            <img width="30" src="data:image/jpeg;base64,<?php echo base64_encode($producto->Foto);?>">        
        </div>
        <br>
        <br>
            <table id="tabla_insumos" >
                <thead>
                    <tr>
                        <th>Insumo</th>
                        <th>Cantidad</th>                                                                           
                    </tr>
                </thead>
                <tbody>                              
                
                    <?php foreach ($lista as $datos){ ?>
                        <tr>                
                            <td><?= $datos->Nombre ?> </td>                                        
                            <td><?= $datos->Cantidadi ?></td>                                        
                            
                        </tr>
                    <?php } ?>   
                                                
                    
                </tbody>
            </table>   
              
            
        
        

    </form>
