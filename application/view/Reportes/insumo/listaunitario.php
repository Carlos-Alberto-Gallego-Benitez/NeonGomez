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
   
<h1 >Reporte insumo <?= $insumos->Nombre?></h1>
    <hr>  
     
    <form >     
        <div>
            <div >
                <label for="ID">Código:  </label>            
                <?php echo ($IDInsumo); ?>       
                     
            </div>
            <br>  
            <div >
                <label for="Nombre">Nombre:  </label>
               <?php echo ($insumos->Nombre); ?>
            </div>
            <br>  
            <div>
            <label for="apellido">Cantidad:   </label>
            <?php echo ($insumos->Cantidad); ?>
            </div>    
            <br>  
            <div class="form-group col-4">
                <label for="correo">Estado:   </label>
                <?php echo ($insumos->Estado); ?>
            </div> 
            <br>  
                  
        </div>

    </form>               
       




          
                
            
            
  


</body>
</html>





