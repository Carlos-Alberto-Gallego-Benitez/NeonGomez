<style>

h1{
    text-align: center;
}  

img{
    margin-bottom: -80px;
}

#tabla{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;    
}
 



#tabla td, #tabla th{
    border: 1px solid #ddd;
    padding: 8px;
    
}

#tabla tr:hover {background-color: #ddd;}

#tabla  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;  
  color: black;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="D:\xampp\htdocs\NeonGomez_Proyecto_Final\public\img\login\logo.png" height=60 alt="">

<h1>Reporte producto <?= $producto->Nombre?></h1>

<hr>
<br>
    <form >
    
        <div class="form-row">  
            <div class="form-group col-4">
                <label for="nombre">Código:  </label>
                <?php echo ($producto->IDProducto); ?>
            </div>
            <br>  
            <div class="form-group col-4">
                <label for="nombre">Nombre:  </label>
                <?php echo ($producto->Nombre); ?>
            </div>
            <br>
            <div class="form-group col-4">
            <label for="apellido">Cantidad:   </label>
            <?php echo ($producto->Cantidad); ?>
            </div> 
            <br>
            <div class="form-group col-4">
                <label for="precio">Precio:   </label>
                <?php echo ($producto->Precio); ?>
            </div>
        </div>    
        <br>    
        <div class="form-row">                
            <div class="form-group col-md-4">
                <label>Tipo De Aviso:   </label>                
                <?php echo ($producto->Tipo); ?></option>                   
                
            </div>  
            <br>
            <div class="form-group col-md-4">
                <label for>Estado:   </label>                     
                <?php echo ($producto->Estado); ?>   
            </div>  
            
             <!-- <div class="mt-4" id="tabla"> -->
                        
                <!-- <img width="450" src="data:image/jpeg;base64,<?php echo base64_encode($producto->Foto);?>">         -->
            <!-- </div>      -->
        </div> 


        <div class="form-row " > 
            
            <br>
            <h4>Insumos gastados</h4>
                <table id="tabla" >
                
                    <thead>                    
                        <tr>
                            <th>Insumo</th>
                            <th>Cantidad</th>                                                                           
                        </tr>
                    </thead>
                    <tbody>                              
                    
                        <?php foreach ($lista as $datos){ ?>
                            <tr>                
                                <td><?= $datos->Nombre ?> </td>                                        
                                <td><?= $datos->Cantidadi ?></td>                                        
                                
                            </tr>
                        <?php } ?>   
                                                    
                        
                    </tbody>
                </table>   
        
                </div>    
        
        

    </form>
    </body>
</html>   
