<style>
h1{
    text-align: center;
}
</style>

<h1>Reporte cliente <?= $cliente->Nombre?></h1>
    <hr>  
    <br>  
    <form >     
        <div>
            <div >
                <label for="ID">Documento:  </label>            
                <?php echo ($cliente->Documento); ?>       
                     
            </div>
            <br>  
            <div >
                <label for="Nombre">Nombre:  </label>
               <?php echo ($cliente->Nombre); ?>
            </div>
            <br>  
            <div>
            <label for="apellido">Apellido:   </label>
            <?php echo ($cliente->Apellido); ?>
            </div>    
            <br>           
        </div>

        <div>              
        <div class="form-group col-4">
                <label for="correo">Correo:   </label>
                <?php echo ($cliente->Correo); ?>
            </div> 
            <br>  
            <div>
                <label for="contraseña">Direccion:   </label>
                <?php echo ($cliente->Direccion); ?>
            </div>
            <br>  
            <div>
                <label for="telefono">Telefono:   </label>
                <?php echo ($cliente->Telefono); ?>
            </div> 
        </div>        
        <br>  
        <div>  
            <div>
                <label for>Estado:   </label>                
                <?php echo ($cliente->Estado); ?>                    
            </div>
        </div>
    
    </form>



