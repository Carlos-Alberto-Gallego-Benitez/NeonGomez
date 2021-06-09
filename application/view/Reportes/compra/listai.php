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

<h1>Reporte de compra <?= $compras->IDCompra?></h1>
<hr>

<form >
    
        <div class="form-row">  
            <div class="form-group col-4">
                <label for="nombre">Código:  </label>
                <?php echo ($compras->IDCompra); ?>
            </div>
            <br>  
            <div class="form-group col-4">
                <label for="nombre">Fecha:  </label>
                <?php echo ($compras->Fecha); ?>
            </div>
            <br>
            <div class="form-group col-4">
            <label for="apellido">Proveedor:   </label>
            <?php echo ($compras->Nombre); ?>
            </div> 
            <br>
            <div class="form-group col-4">
                <label for="precio">Estado:   </label>
                <?php echo ($compras->Estado); ?>
            </div>
        </div>    
        <br>   
        
        <div class="form-row " > 
            
            <br>
            <h4>Insumos</h4>
                <table id="tabla" >
                
                    <thead>                    
                        <tr>
                            <th>Insumo</th>
                            <th>Cantidad</th> 
                            <th>Precio</th> 
                            <th>Sub total</th>                                                                           
                        </tr>
                    </thead>
                    <tbody>                              
                    
                        <?php foreach ($reporteI as $datos){ ?>
                            <tr>                
                            <td><?= $datos->Nombre ?> </td>                                     
                              <td><?= $datos->Cantidad ?></td> 
                              <td><?= $datos->Precio ?></td>  
                              <td><?= $datos->Subtotal ?></td>
                                                                 
                                
                            </tr>
                            
                        <?php } ?>   
                                                  
                        
                    </tbody>
                    
                </table>   
               
                <p>Total Compra: <?=  ($datos->TotalCompra) ?></p>
                
                </div>    
        

    </form>



  
  </body>
</html>   
