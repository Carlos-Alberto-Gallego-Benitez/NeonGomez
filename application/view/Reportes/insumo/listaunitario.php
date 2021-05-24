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
}
thead{
    margin:110 ;
background-color: #555;
}
tbody{
    background-color: #555;
}
td{
border: 1px solid #e2e2e2;
padding: 18px; 
max-width:520px;
word-wrap: break-word;
font-size: 24px;
}

</style>



<h1 class="h2">Reporte del insumo numero <?php echo($IDInsumo);?></h1> <hr> <br>

<table>
    <thead >
        <tr class="table">
            <td>Código</td>
            <td>Nombre</td>
            <td>Cantidad</td>
            <td>Estado</td>
             
        </tr>
    </thead>    
    <tbody>    
        
            <tr>
                <td><?php echo ($IDInsumo); ?></td>                
                <td><?php echo ($insumos->Nombre); ?></td>
                <td><?php echo ($insumos->Cantidad); ?></td>
                <td><?php echo ($insumos->Estado); ?></td>
            
            </tr>
            
        </tbody>
</table> 
  








