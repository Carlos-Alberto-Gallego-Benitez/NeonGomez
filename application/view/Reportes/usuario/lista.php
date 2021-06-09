<style>  
h1{
    text-align: center;
    
}

img{
    margin-bottom: -80px;
}

#tabla{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tabla td, #tabla th{
    border: 1px solid #ddd;
    padding: 8px;
    
}

#tabla tr:hover {background-color: #ddd;}

#tabla  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;  
  color: black;
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

<h1>Reporte de usuarios</h1> <hr> <br>

<table id="tabla">
    <thead class="">
        <tr >
            <td>Documento</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Teléfono</td>
            <td>Rol</td>
            <td>Estado</td>
            
                         
        </tr>
    </thead>    
    <tbody>    
        <?php foreach ($usuarios as $usuario) { ?>
            <tr>                
                <td><?php echo ($usuario->Documento); ?></td>
                <td><?php echo ($usuario->Nombre); ?></td>
                <td><?php echo ($usuario->Apellido); ?></td>
                <td><?php echo ($usuario->Correo); ?></td>
                <td><?php echo ($usuario->Telefono); ?></td>
                <td><?php echo ($usuario->Rol); ?></td>
                <td><?php echo ($usuario->Estado); ?></td>
               
            
            </tr>
            <?php } ?>
        </tbody>
</table>        


</body>
</html>







