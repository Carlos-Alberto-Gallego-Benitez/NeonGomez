<style>

h1{
    text-align: center;
    margin-top: 20px;
}  

img{
    margin-bottom: -80px;
}

    #tabla_c {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #tabla_c td, #tabla_c th{
        border: 1px solid #ddd;
        padding: 8px;
        
    }

    body {
        background: blue;    
    }

    #tabla_c  th {
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


<div class="body">

<img src="D:\xampp\htdocs\NeonGomez_Proyecto_Final\public\img\login\logo.png" height=60 alt="">
<h1>Reporte de clientes</h1>

<br>
    <table id="tabla_c">
        <thead >
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Estado</th>
            </tr>
        </thead>    
        <tbody>    
            <?php foreach ($clientes as $cliente) { ?>
                <tr>                
                    <td><?php echo ($cliente->Documento); ?></td>
                    <td><?php echo ($cliente->Nombre); ?></td>
                    <td><?php echo ($cliente->Apellido); ?></td>
                    <td><?php echo ($cliente->Correo); ?></td>
                    <td><?php echo ($cliente->Direccion); ?></td>
                    <td><?php echo ($cliente->Telefono); ?></td>
                    <td><?php echo ($cliente->Estado); ?></td>
                        
                
                </tr>
            <?php } ?>
        </tbody>
    </table>        
</div>
</body>
</html>


    











