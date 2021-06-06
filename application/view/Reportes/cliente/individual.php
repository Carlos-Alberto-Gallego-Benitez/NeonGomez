<style>
h1{
    text-align: center;
}


</style>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="D:\xampp\htdocs\NeonGomez_Proyecto_Final\public\img\login\logo.png" height=60 alt="">
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
                <label for="contraseña">Dirección:   </label>
                <?php echo ($cliente->Direccion); ?>
            </div>
            <br>  
            <div>
                <label for="telefono">Teléfono:   </label>
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
</body>
</html>
    


    

