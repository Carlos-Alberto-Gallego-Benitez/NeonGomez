<div class="container card mt-3" style="width: 68rem;">
<h1 class="text-center mt-3">Editar venta <?php echo($ventas->IDVenta);?></h1>

    <hr>

    <form action="<?php echo URL; ?>venta/actualizar" method="POST"  id="editarVenta" enctype="multipart/form-data">
   <input type="hidden" value = "<?php echo($ventas->IDVenta);?>" name="idventa" id = "idventa">
        <div class="form-row mt-3">    
            <div class="form-group col-4">
                <label for="nombre">Fecha</label>
                <input type="date" class="form-control" id="fecha" value="<?php echo($ventas->Fecha);?>" name="fecha">
            </div>

            <div class="form-group col-4">
                   <label for="insumos">Cliente</label>
                    <select class="form-control"  id="cliente" name="cliente"> 
                    <option value="<?php echo($ventas->IDCliente);?>"><?php echo($ventas->Nombre." ");?><?php echo($ventas->Apellido);?></option>                      
                    <?php foreach ($clientes as $cliente): ?> 
                        <option value="<?= $cliente->IDCliente ?>"><?=$cliente->Nombre." ".$cliente->Apellido?></option>
                    <?php endforeach  ?>
                    </select>
                    </select> 
            </div>

            <div class="form-group col-4">
                <label for>Estado</label>
                <select name="estado" class="form-control" id="estado">
                    <option value="<?php echo($ventas->Estado);?>"><?php echo($ventas->Estado);?></option>
                    <?php if($ventas->Estado=="Activo"){?> 

                        <option  value="Inactivo">Inactivo</option>
                        
                    
                     <?php }?>
                     <?php if($ventas->Estado=="Inactivo"){?> 

                        
                        <option  value="Activo">Activo</option>
                    
                     <?php }?>
                    
                    
                </select>   
            
            </div>       
        </div> 

        <div class="form-row mt-5">    
            <div class="form-group col-4">
                   <label for="insumos">Producto</label>
                   <select class="form-control"  id="id_producto" name="id_producto" onchange="ponerPrecio()"> 
                    <option>Seleccione</option>                      
                    <?php foreach ($productos as $producto): ?>                         
                        <option precio="<?= $producto->Precio ?>" value="<?= $producto->IDProducto ?>"><?=$producto->Nombre?></option>
                    <?php endforeach  ?>
                    </select>
                    </select> 
            </div>

            <div class="form-group col-4">
              <label for="">Precio</label>
               <input id="precio" type="text" class="form-control" name="precio" value="0" readonly> 
               
            </div>

            <div class="form-group col-4">
              <label for="cantidad">Cantidad</label>
              <input type="number" class="form-control" id="canti" name="canti">
            </div>

      
        </div>  


        <button class="btn btn-info mb-2 mt-3" type="button" onclick="EditarVenta()">Agregar Producto</button> 

           <div class="row">
               
                <div class="col-md-4 mt-4 ml-2 mb-2 card">
                    <div class="widget">
                        <div class="widget-content">
                            <table id="tabla_venta" class="table ">
                                <thead>
                                    <tr>                                        
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                                             
                                <tr>
                                    <?php foreach ($ventasdetalle as $datos){ ?>
                                        <tr id=<?= $datos->IDDetalle ?>>                
                                            <td><?= $datos->Nombre?> </td>                                        
                                            <td><?= $datos->Precio ?></td>  
                                            <td><?= $datos->Cantidad?></td>  
                                            <td><?= $datos->Subtotal ?></td>
                                           
                                            
                                                                       
                                              
                                            <td><input class="btn btn-danger" value="Eliminar" type="button" onclick='eliminarDetalle2("<?php echo ($datos->IDDetalle); ?>")'></td>
                                        </tr>
                                    <?php } ?>   
                                </tr>                                  
                                    <?php foreach($ventasdetalle as $datos) {

                                            if($datos->ValorTotal <= 0){
                                               $acum = "sin total";
                                            }
                                            if($datos->ValorTotal > 0){
                                                $acum = $datos->ValorTotal;
                                            }

                                    }?>

                                </tbody>
                            </table>   
                            <input type="hidden" disabled name="acumulado" id="acumulado"value="<?php echo $acumulado?>" id="">
                            <p><b>Total Venta: </b><span id="valorTotal"><?php echo $acumulado?></span></p>
                        </div>
                    </div> 
                </div>
            </div>  

     
          
        <button  type="submit" name="nuevaVenta"class="btn btn-info mt-3 mb-3">Guardar</button> 
        <a class="btn btn-secondary mt-3 ml-3 mb-3" href="<?php echo URL; ?>venta/index"> <i class="far fa-window-close"></i> Cancelar</a>
        </div> 
     
        </div>
        
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> 
<script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script> 
