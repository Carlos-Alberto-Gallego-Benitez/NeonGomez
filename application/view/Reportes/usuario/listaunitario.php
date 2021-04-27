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
margin-left:;    
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
padding: 9px; 
max-width:520px;
word-wrap: break-word;
font-size: 14px;
}
</style>

    

<h1 class="h2">Reporte de de usuario numero <?php echo($IDUsuario);?></h1> <hr> <br> <br>

<table class="">
    <thead class="">
        <tr class="table">
            <td>Documento</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Telefono</td>
            <td>Rol</td>
            <td>Estado</td>
            
                         
        </tr>
    </thead>    
    <tbody>     
            <tr>                
                <td><?php echo ($usuarios->Documento); ?></td>
                <td><?php echo ($usuarios->Nombre); ?></td>
                <td><?php echo ($usuarios->Apellido); ?></td>
                <td><?php echo ($usuarios->Correo); ?></td>
                <td><?php echo ($usuarios->Telefono); ?></td>
                <td><?php echo ($usuarios->Rol); ?></td>
                <td><?php echo ($usuarios->Estado); ?></td>
               
            
            </tr>
        </tbody>
</table>        
