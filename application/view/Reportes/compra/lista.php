<style>
h1 {
  color: #5D6975;
  width: 100%;
  height: 30px;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center
}

.footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  
  bottom: 0;
  padding: 8px 0;
  text-align: center;
}


table{
	text-align: center;
  border: 1px;
	border-collapse: collapse;
	width: 100%;
}

th, td{
	padding: 40px;
}

thead{
	border-bottom: solid 5px #0F362D;
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
  <h1>Reporte de compras</h1>  
  <div class="tabla_c">
    <table>
      <thead>
          <tr>
            <th>Código</th><th>Fecha</th><th>Proveedor</th><th>Estado</th>
          </tr>
        </thead>
      <tbody>
          <?php foreach ($reportes as $datos) { ?>
                <tr>                
                    <td><?php echo ($datos->IDCompra); ?></td>
                    <td><?php echo ($datos->Fecha); ?></td>
                    <td><?php echo ($datos->Nombre); ?></td>
                    <td class="grand"><?php echo ($datos->Estado); ?></td>
                </tr>
                <?php } ?>
      </tbody>
    </table>
  </div>

  <hr>
  <div class="footer">
     <p>Neon Gomez - <?php echo date("Y");?></p>
  </div>
</body>
</html>