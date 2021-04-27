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
margin:110 ;
}
thead{
background-color: #555;
}
tbody{
    background-color: #555;
}
td{
border: 2px solid #e2e2e2;
padding: 15px; 
max-width:520px;
word-wrap: break-word;
font-size: 19px;
}


</style>

    

<h1 class="h2">Reporte de insumos</h1> <hr> <br>

<table>
    <thead >
        <tr class="table">
            <td>IDInsumo</td>
            <td>Nombre</td>
            <td>Cantidad</td>
            <td>Estado</td>
             
        </tr>
    </thead>    
    <tbody>    
        <?php foreach ($insumos as $insumo) { ?>
            <tr>   
                <td><?php echo ($insumo->IDInsumo); ?></td>             
                <td><?php echo ($insumo->Nombre); ?></td>
                <td><?php echo ($insumo->Cantidad); ?></td>
                <td><?php echo ($insumo->Estado); ?></td>
            
            </tr>
            <?php } ?>
        </tbody>
</table> 











