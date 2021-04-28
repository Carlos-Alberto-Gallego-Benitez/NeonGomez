<style>

h1{
    text-align: center;
}  

#tabla_c{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tabla_c td, #tabla_c th{
    border: 1px solid #ddd;
    padding: 8px;
    
}

#tabla_c tr:hover {background-color: #ddd;}

#tabla_c  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;  
  color: black;
}
</style>

    

<h1>Reporte de clientes</h1>

<br>
<table id="tabla_c">
    <thead >
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Telefono</th>
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










