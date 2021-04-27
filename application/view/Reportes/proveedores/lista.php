<head>
  <meta charset="utf-8">
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
}

th, td{
	padding: 10px;
}

thead{
	border-bottom: solid 5px #0F362D;
}

  </style>
</head>
<body>
  <hr>
  <h1>Neon Gomez - Reporte de proveedores</h1>
  <hr>
  <div class="main-container">
    <table>
    <thead>
				<tr>
					<th>ID Proveedor</th><th>Codigo</th><th>Nombre</th><th>Telefono</th><th>Direccion</th><th>Correo</th><th>Estado</th>
				</tr>
			</thead>
    <tbody>
        <?php foreach ($reportes as $datos) { ?>
              <tr>                
                  <td><?php echo ($datos->IDProveedor); ?></td>
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

  <hr>
  <div class="footer">
     <p>Neon Gomez - <?php echo date("Y");?></p>
  </div>
</body>