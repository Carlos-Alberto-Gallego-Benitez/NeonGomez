<style>

h1{
    text-align: center;
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

<h1>Reporte de productos</h1>    
<br>    
        <table id="tabla_p">
            <thead >
                <tr>           
                    <th>Codig</th>
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
        
    


      
