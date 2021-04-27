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
	width: 100%;
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
  <h1>Neon Gomez - Reporte de proveedor con el ID # <?= $reportesi->IDProveedor?></h1>
  <hr>
  <div class="main-container">
    <table>
    <thead>
				<tr>
                <th>ID Proveedor</th><th>Codigo</th><th>Nombre</th><th>Telefono</th><th>Direccion</th><th>Correo</th><th>Estado</th>

				</tr>
			</thead>
    <tbody>
              <tr>                
                  <td><?php echo ($reportesi->IDProveedor); ?></td>
                  <td><?php echo ($reportesi->Codigo); ?></td>
                  <td><?php echo ($reportesi->Nombre); ?></td>
                  <td><?php echo ($reportesi->Telefono); ?></td>
                  <td><?php echo ($reportesi->Direccion); ?></td>
                  <td><?php echo ($reportesi->Correo); ?></td>
                  <td class="grand"><?php echo ($reportesi->Estado); ?></td>
              </tr>
    </tbody>
    </table>
  </div>
  <hr>
  <div class="footer">
     <p>Neon Gomez - <?php echo date("Y");?></p>
  </div>
</body>