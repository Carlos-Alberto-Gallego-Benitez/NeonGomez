<style>

h1{
    text-align: center;
    
}

img{
    margin-bottom: -80px;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<img src="D:\xampp\htdocs\NeonGomez_Proyecto_Final\public\img\login\logo.png" height=60 alt="">

  <h1>Reporte de proveedor <?= $reportesi->Nombre?></h1>
  <hr>

  <form >     
        <div>
            <div >
                <label for="ID">Código:  </label>            
                <?php echo ($reportesi->Codigo); ?>       
                     
            </div>
            <br>  
            <div >
                <label for="Nombre">Nombre:  </label>
               <?php echo ($reportesi->Nombre); ?>
            </div>
            <br>  
            <div>
            <label for="apellido">Télefono:   </label>
            <?php echo ($reportesi->Telefono); ?>
            </div>    
            <br>           
        </div>

        <div>              
        <div class="form-group col-4">
                <label for="correo">Dirección:   </label>
                <?php echo ($reportesi->Direccion); ?>
            </div> 
            <br>  
            <div>
                <label for="contraseña">Correo:   </label>
                <?php echo ($reportesi->Correo); ?>
            </div>
            <br>  
            <div>
                <label for="telefono">Estado:   </label>
                <?php echo ($reportesi->Estado); ?>
            </div> 
        </div>        
         
       
    
    </form>
  
              
   
  </body>
</html>