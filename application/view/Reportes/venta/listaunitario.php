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
td{
border: 1px solid #e2e2e2;
padding: 12px; 
max-width:520px;
word-wrap: break-word;
font-size: 14px;
}

</style>
   
<?php if($ventas != null){?>
<h2 class="h2"> Reporte de venta numero <?php echo($IDVenta);?></h2><hr> <br> <br>
<?php }?>
<?php if($ventas == null){?>
<h1 class="h2"> La venta <?php echo($IDVenta);?> no cuenta con productos asociados</h1>
<?php }?>

<table>
    <thead>
        <tr class="table">
            <td>IDVenta</td>
            <td>Fecha</td>
            <td>Cliente</td>
            <td>Producto</td>
            <td>Cantidad</td>
            <td>Subtotal</td>
            <td>ValorTotal</td>
            <td>Estado</td>   
                         
        </tr>
    </thead>    
    <tbody>    
        <?php foreach ($ventas as $venta) { ?>
            <tr>
                <td><?php echo ($venta->IDVenta); ?></td>                
                <td><?php echo ($venta->Fecha); ?></td>
                <td><?php echo ($venta->Nombre." ".$venta->Apellido); ?></td>
                <td><?php echo ($venta->nombre);?></td>
                <td><?php echo ($venta->Cantidad);?></td>
                <td><?php echo ($venta->Subtotal); ?></td>
                <td><?php echo ($venta->ValorTotal); ?></td>
                <td><?php echo ($venta->Estado); ?></td>
                      
            
            </tr>
            <?php } ?>
        </tbody>
</table>        









