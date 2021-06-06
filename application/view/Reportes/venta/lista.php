<style>  

table {
border-collapse: collapse;
}
.table{
background-color:  rgb(187, 187, 187);
color:  rgb(5, 2, 2);
text-align: center;
margin-left:40;    
width:800px;
margin:20 ;
font-size:30;
}
.h2{

color: rgb(117, 115, 115);
text-align: center;
margin-left:40;    
width:800px;
margin:20 ;
font-size:30;
}
table{
text-align: center;
margin-left:40;    
width:800px;
margin:20 ;
}
thead{
background-color: #555;
}
tbody{
    background-color: #555;
}
td{
border: 1px solid #e2e2e2;
padding: 12px; 
max-width:520px;
word-wrap: break-word;
font-size: 14px;
}


</style>

    

<h2 class="h2">Reporte general de ventas</h2><hr><br>

<table class="">
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










