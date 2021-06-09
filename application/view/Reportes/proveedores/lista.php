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

  <h1>Reporte de proveedores</h1>
  <hr>
  <div class="main-container">
    <table id="tabla">
    <thead>
				<tr>
					<th>Código</th><th>Nombre</th><th>Teléfono</th><th>Dirección</th><th>Correo</th><th>Estado</th>
				</tr>
			</thead>
    <tbody>
        <?php foreach ($reportes as $datos) { ?>
              <tr> 
                  <td><?php echo ($datos->Codigo); ?></td>
                  <td><?php echo ($datos->Nombre); ?></td>
                  <td><?php echo ($datos->Telefono); ?></td>
                  <td><?php echo ($datos->Direccion); ?></td>
                  <td><?php echo ($datos->Correo); ?></td>
                  <td class="grand"><?php echo ($datos->Estado); ?></td>
              </tr>
              <?php } ?>
    </tbody>
    </table>
  </div>


  
  </body>
</html>