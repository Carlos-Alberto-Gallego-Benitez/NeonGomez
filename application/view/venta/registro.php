<div class="container card mt-3" style="width: 68rem;">
    <h1 class="text-center mt-2">Registro de ventas</h1>
    <hr>

    <form action="<?php echo URL; ?>venta/guardar" method="POST"  id="registroVenta" enctype="multipart/form-data">

        <div class="form-row mt-3">    
            <div class="form-group col-4">
                <label for="nombre">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>

            <div class="form-group col-4">
                   <label for="insumos">Cliente</label>
                    <select class="form-control"  id="cliente" name="cliente"> 
                    <option value="">Seleccione</option>                      
                    <?php foreach ($clientes as $cliente): ?> 
                        <option value="<?= $cliente->IDCliente ?>"><?=$cliente->Nombre." ".$cliente->Apellido?></option>
                    <?php endforeach  ?>
                    </select>
                    </select> 
            </div>

                   
        </div> 

        <div class="form-row mt-5">    
            <div class="form-group col-4">
                   <label for="insumos">Producto</label>
                   <select class="form-control"  id="id_producto" name="id_producto" onchange="ponerPrecio()"> 
                    <option>Seleccione</option>                      
                    <?php foreach ($productos as $producto): ?>                         
                        <option cantida2="<?= $producto->Cantidad ?>" precio="<?= $producto->Precio ?>" value="<?= $producto->IDProducto ?>"><?=$producto->Nombre?></option>
                    <?php endforeach  ?>
                    </select>
                    </select> 
            </div>

            <input type="hidden" name="" value="0" id="cantidad3">

            <div class="form-group col-4">
              <label for="">Precio</label>
               <input id="precio" type="text" class="form-control" name="precio" value="0" readonly> 
               
            </div>

            <div class="form-group col-4">
              <label for="cantidad">Cantidad</label>
              <input type="number" class="form-control" id="canti" name="canti">
            </div>

      
        </div>  



        <button class="btn btn-info mb-2 mt-3" type="button" onclick="agregarVenta()">Agregar Producto</button> 

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

                                </tbody>
                            </table>   
                            <p><b>Total Venta: </b><span name="total" id="valorTotal"></span></p>  
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

    <script>


        $(document).ready(function(){

            var form = $("#formulario");

  
            form.submit(function(){


                var fecha = ($("#fecha").val());
                var cliente  = ($("#cliente").val());
                var estado = ($("#estado").val());
                

                var falsa="";
                var mensaje="";

                if (cliente == "Seleccione" || estado == "Seleccione" || fecha == "") {
                    falsa=false;

                    Swal.fire({
                      icon: 'warning',
                      text: 'Complete todos los campos',            
                    })
                    $("#cliente").focus();
                    
                }
              
               

                return falsa ;

            });


        });

    </script>