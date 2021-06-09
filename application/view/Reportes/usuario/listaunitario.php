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


<h1 class="h3">Reporte de usuario  <?= $usuarios->Nombre?> <?= $usuarios->Apellido?></h1> <hr> 

<form >
<div>
<div >
    <label for="ID">Documento:  </label>            
    <?php echo ($usuarios->Documento); ?>  
</div>
<br>
<div >
    <label for="nombre">Nombre:  </label>            
    <?php echo ($usuarios->Nombre); ?> 
</div>
<br>
<div >
    <label for="ID">Apellido:  </label>            
    <?php echo ($usuarios->Apellido); ?>
</div>
<br>
<div >
    <label for="ID">Correo:  </label>            
    <?php echo ($usuarios->Correo); ?>
</div>
<br>
<div >
    <label for="ID">Télefono:  </label>            
    <?php echo ($usuarios->Telefono); ?>
</div>
<br>
<div >
    <label for="ID">Rol:  </label>            
    <?php echo ($usuarios->Rol); ?>
</div>
<br>
<div >
    <label for="ID">Estado:  </label>            
    <?php echo ($usuarios->Estado); ?>
</div>
</div>
</form>
                  
                
               
            
            
     
</body>
</html>