<style>  

h1{
    text-align: center;
    margin-top: 20px;
}  

img{
    margin-bottom: -80px;
}

    #tabla {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #tabla td, #tabla th{
        border: 1px solid #ddd;
        padding: 8px;
        
    }

    body {
        background: blue;    
    }

    #tabla th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;  
    color: black;    
    }


</style>

    
<img src="D:\xampp\htdocs\NeonGomez_Proyecto_Final\public\img\login\logo.png" height=60 alt="">
<h1 class="h2">Reporte de insumos</h1> <hr> <br>

<table id="tabla">
    <thead >
        <tr class="table">
            <td>Código</td>
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











