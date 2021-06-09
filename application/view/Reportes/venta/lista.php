<style>  

h1{
    text-align: center;
    margin-top: 20px;
}  

img{
    margin-bottom: -80px;
}

    #tabla {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #tabla td, #tabla th{
        border: 1px solid #ddd;
        padding: 8px;
        
    }

    body {
        background: blue;    
    }

    #tabla th {
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

<h1>Reporte de ventas</h1><hr><br>

<table id="tabla">
    <thead class="">
        <tr class="table">
            <td>Código</td>
            <td>Fecha</td>
            <td>Cliente</td>
            <td>Precio</td> 
            <td>Estado</td>
            
                         
        </tr>
    </thead>    
    <tbody class="">    
        <?php foreach ($ventas as $venta) { ?>
            <tr>
                <td><?php echo ($venta->IDVenta); ?></td>                
                <td><?php echo ($venta->Fecha); ?></td>
                <td><?php echo ($venta->Nombre." ".$venta->Apellido); ?></td>
                
               
                <td><?php echo ($venta->ValorTotal); ?></td>
                <td><?php echo ($venta->Estado); ?></td>
           
                      
            
            </tr>
            <?php } ?>
        </tbody>
</table>        



</body>
</html>






