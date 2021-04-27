<style>  

table {
border-collapse: collapse;
}
.table{
background-color:  rgb(187, 187, 187);
color:  rgb(5, 2, 2);
text-align: center;
margin-left:;    
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
width:800px;
margin:-1%;
}
thead{
background-color: #555;
}
tbody{
    background-color: #555;
}
td{
border: 2px solid #e2e2e2;
padding: 9px; 
max-width:520px;
word-wrap: break-word;
font-size: 14px;
}

</style>


<h1 class="h2">Reporte de usuarios</h1> <hr> <br>

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
        <?php foreach ($usuarios as $usuario) { ?>
            <tr>                
                <td><?php echo ($usuario->Documento); ?></td>
                <td><?php echo ($usuario->Nombre); ?></td>
                <td><?php echo ($usuario->Apellido); ?></td>
                <td><?php echo ($usuario->Correo); ?></td>
                <td><?php echo ($usuario->Telefono); ?></td>
                <td><?php echo ($usuario->Rol); ?></td>
                <td><?php echo ($usuario->Estado); ?></td>
               
            
            </tr>
            <?php } ?>
        </tbody>
</table>        










