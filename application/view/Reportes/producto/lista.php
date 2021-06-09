<style>

h1{
    text-align: center;
}  

img{
    margin-bottom: -80px;
}

#tabla_p{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tabla_p td, #tabla_p th{
    border: 1px solid #ddd;
    padding: 8px;
    
}

#tabla_p tr:hover {background-color: #ddd;}

#tabla_p  th {
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
<h1>Reporte de productos</h1>  
<hr>  
<br>    
        <table id="tabla_p">
            <thead >
                <tr>           
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                    <th>Estado</th>                 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                    <tr>                
                    <td><?php echo ($producto->IDProducto); ?></td>
                    <td><?php echo ($producto->Nombre); ?></td>
                    <td><?php echo ($producto->Cantidad); ?></td>
                    <td><?php echo ($producto->Precio); ?></td>
                    <td><?php echo ($producto->Tipo); ?></td>
                    <td><?php echo ($producto->Estado); ?></td>   



                    
                    
                    </tr>
                <?php } ?>
            </tbody>
        </table>        
        
    </body>
</html>   


      
