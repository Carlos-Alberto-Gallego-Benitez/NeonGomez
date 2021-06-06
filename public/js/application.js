// ************* insumos del producto *********************
function cantidades(){
    var valor = $("#id_insumo").val();
    var stock =  $("#id_insumo [value='"+valor+"']").attr("stock");
    $("#stock").val(stock);
}

function agregarInsumos()
{
    let id_insumo = $("#id_insumo").val();
    let text_insumo = $("#id_insumo option:selected").text();
    let cantida = $("#cant").val(); 
    let stock = $("#stock").val(); 
    //console.log(stock); 

    if(parseInt(cantida) > parseInt(stock)){
        Swal.fire({
            icon: 'warning',
            title: 'Espera!',
            text: 'La cantidad seleccionada no esta disponible',            
        })
    }

    else if(cantida == '' || cantida <0 || cantida == 0 || text_insumo === 'Seleccione'){
        cantida == 0;
        Swal.fire({
            icon: 'warning',
            title: 'Espera!',
            text: 'La cantidad de insumos debe ser mayor a cero!',            
        }) 

        if(text_insumo === 'Seleccione'){
            Swal.fire({
                icon: 'warning',
                title: 'Espera!',
                text: 'Debe selecionar un insumo para poder continuar!',            
            })
        } 

        
    }else{            
            $("#tabla_insumos").append(
                "<tr id='tr"+id_insumo+"'> <input type='hidden' name='id_insumo[]' value='"+id_insumo+"'> <input type='hidden' name='cant[]' value='"+cantida+"'> <td>"+text_insumo+"</td><td>"+cantida+"</td><td><button type='button' onclick='$("+'"'+"#tr"+id_insumo+'"'+").remove()' class='btn btn-danger'>Eliminar</button></td><tr>"
            )
        }  
       
}


function eliminarDetalle(iddetalle)
{        
    $.ajax({
		dataType:'json',
		type:'post',
		url:url+"producto/eliminarDetalle/"+iddetalle,
		data:{iddetalle:iddetalle},
	})
    
    $('#tabla_insumos tr').click(function(){
        $(this).remove();
        return false;
    });
}
//********** fin gestion productos ************

// ******** venta **********

function agregarProductos()
{
    //let sub =0;   
    let id_producto = $("#idproducto").val();
    let text_producto = $("#idproducto option:selected").text();
    let precio = $("#precio").val();
    let cantida = $("#cantidad").val();
    
    let valorTotal;
    let subTotal = parseInt(precio)*parseInt(cantida); 
   
   
    $("#tabla_productos").append(
        "<tr id='tr"+id_producto+"'> <input type='hidden' name='id_producto[]' value='"+id_producto+"'> <input type='hidden' name='cantidad[]' value='"+cantida+"'> <td>"+text_producto+"</td><td>"+precio+"</td><td>"+cantida+"</td><td class='subtotal'>"+subTotal+"</td><td><button type='button' onclick='$("+'"'+"#tr"+id_producto+'"'+ ").remove()' class='btn btn-danger boton'>Eliminar</button></td><tr>"
    )   
    
   subtotal();
   
}

function subtotal()
{
    let total = 0;
    
    $('.subtotal').each(function(i, e){
        
        total += parseInt(e.innerHTML);
       
    })
    if('.boton' === true){        
        $('.subtotal').each(function(i, e){
            
        total -= parseInt(e.innerHTML);
         
        })        
    }
 
    $("#valorTotal").text(total);   
    
}
//******************* */

// *******   insumos compra ***************** 
function agregarInsumosc()
{
    let id_insumo = $("#id_insumo").val();
    let text_insumo = $("#id_insumo option:selected").text();
    let cantida = $("#cant").val();
    let precio = $("#precio").val();
    let subTotal = parseInt(precio)*parseInt(cantida);
    


    if (id_insumo == null || id_insumo == "Seleccione" || cantida == "" || precio == null) {

        Swal.fire({
            icon: 'error',
            text: 'Complete todos los campos',            
        })
        
    }
    else if(cantida < 0){
        Swal.fire({
            icon: 'error',
            text: 'la cantidad debe ser mayor a 0',            
        })
        
    }else{
        $("#tabla_insumos").append(
            "<tr id='tr"+id_insumo+"'> <input type='hidden' name='id_insumo[]' value='"+id_insumo+"'>  <input type='hidden' name='cant[]' value='"+cantida+"'> <input type='hidden' name='precio[]' value='"+precio+"'> <input type='hidden' name='subTotal[]' value='"+subTotal+"'> <td>"+text_insumo+"</td><td>"+cantida+"</td><td>"+precio+"</td><td class='subtotal'>"+subTotal+"</td><td><button type='button' onclick='eliminar_insumo("+id_insumo+","+subTotal+")' class='btn btn-danger boton'>Eliminar</button></td><tr>"
        )
        let precioTotal = $("#valorTotal").text() || 0;
        $("#valorTotal").text(parseInt(precioTotal) + (parseInt(subTotal))); 
        //subtotalc();
    }
}

function editarCompra(){ 

    
    let id_insumo = $("#id_insumo").val();
    let text_insumo = $("#id_insumo option:selected").text();
    let cantida = $("#cant").val();  
    let precio = $("#precio").val();  
    let subTotal = parseInt(precio)*parseInt(cantida);
      

    if (id_insumo == null || text_insumo == "Seleccione" || cantida == "" || precio == null) {

        Swal.fire({
            icon: 'error',
            text: 'Complete todos los campos',            
        })
        
    }
    else if(cantida < 0 || cantida == 0){
        Swal.fire({
            icon: 'error',
            text: 'la cantidad debe ser mayor a 0',            
        })
        
    }
    else{

        let precioTotal = $("#valorTotal").text() || 0;
        $("#valorTotal").text(parseInt(precioTotal) + (parseInt(subTotal)));
      
        $("#tabla_insumos").append("<tr id='tr"+id_insumo+"'><input type='hidden' name='id_insumo[]' value='"+id_insumo+"'><input type='hidden' name='cant[]' value='"+cantida+"'><input type='hidden' name='precio[]' value='"+precio+"'><input type='hidden' name='subTotal[]' value='"+subTotal+"'><td>"+text_insumo+"</td><td>"+precio+"</td><td>"+cantida+"</td><td id='sub' class='subtotal'>"+subTotal+"</td><td><button type='button' onclick='eliminar_insumo("+id_insumo+","+subTotal+")' class='btn btn-danger'>Eliminar</button></td></tr>")
        
    }

}

function eliminar_insumo(id_insumo,subtotal){
    $("tr"+id_insumo).remove();
    // console.log($("tr"+id_insumo))
    let precio_total = $("#valorTotal").text() || 0;
    $("#valorTotal").text(parseInt(precio_total) - parseInt(subtotal));

    $('#tabla_insumos tr').click(function(){
        $(this).remove();
        return false;
    });
}





function eliminarDetallec(iddetalle)
{        
    $.ajax({
		dataType:'json',
		type:'post',
		url:url+"compra/eliminarDetalle/"+iddetalle,
		data:{iddetalle:iddetalle},
	})
    
    $('#tabla_insumos tr').click(function(){
        $(this).remove();
        return false;
    });
}

// *******************************ventas

function ponerPrecio(){
    var valor = $("#id_producto").val();
    var precio =  $("#id_producto [value='"+valor+"']").attr("precio"); 
    var canti =  $("#id_producto [value='"+valor+"']").attr("cantida2");    
    $("#precio").val(precio)
    $("#cantidad3").val(canti)
}


function suma(){

    var valor1 = $("#valor1").attr(); 
    var valor2 = $("#valor1").attr();  

    $("#final").val(parseInt(valor1)+parseInt(valor2))

}

function agregarVenta(){ 

    
    let id_producto = $("#id_producto").val();
    let producto = $("#id_producto option:selected").text();
    let cantida = $("#canti").val();  
    let precio = $("#precio").val();  
    let stock = $("#cantidad3").val();  
    let subTotal = parseInt(precio)*parseInt(cantida);

    if(parseInt(cantida) > parseInt(stock)){

        Swal.fire({
            icon: 'warning',
            text: 'la cantidad ingresada es mayor a la del producto',            
        })

    }
    else if (id_producto == null || producto == "Seleccione" || cantida == "" || precio == null) {

        Swal.fire({
            icon: 'warning',
            text: 'Complete todos los campos',            
        })
        
    }
    else if(cantida < 0 || cantida == 0){
        Swal.fire({
            icon: 'warning',
            text: 'la cantidad debe ser mayor a 0',            
        })
        
    }
    else{
        

        let precioTotal = $("#valorTotal").text() || 0;
        $("#valorTotal").text(parseInt(precioTotal) + (parseInt(subTotal)));

        $("#tabla_venta").append("<tr id='tr"+id_producto+"'><input type='hidden' name='id_producto[]' value='"+id_producto+"'><input type='hidden' name='canti[]' value='"+cantida+"'><input type='hidden' name='precio[]' value='"+precio+"'><input type='hidden' name='SubTotal[]' value='"+subTotal+"'><td>"+producto+"</td><td>"+precio+"</td><td>"+cantida+"</td><td id='sub' class='subtotal'>"+subTotal+"</td><td><button type='button' onclick='eliminar_producto("+id_producto+","+subTotal+")' class='btn btn-danger'>Eliminar</button></td></tr>")
               
       
    }

    
    
        
    
}
// **********************************************
function EditarVenta(){ 

    
    let id_producto = $("#id_producto").val();
    let producto = $("#id_producto option:selected").text();
    let cantida = $("#canti").val();  
    let precio = $("#precio").val();  
    let stock = $("#cantidad3").val(); 
    let subTotal = parseInt(precio)*parseInt(cantida);
      
    if(parseInt(cantida) > parseInt(stock)){

        Swal.fire({
            icon: 'warning',
            text: 'la cantidad ingresada no esta disponible',            
        })

    }
    else if (id_producto == null || producto == "Seleccione" || cantida == "" || precio == null) {

        Swal.fire({
            icon: 'warning',
            text: 'Complete todos los campos!',            
        })
        
    }
    else if(cantida < 0 || cantida == 0){
        Swal.fire({
            icon: 'warning',
            text: 'la cantidad debe ser mayor a 0',            
        })
        
    }
    else{

        let precioTotal = $("#valorTotal").text() || 0;
        $("#valorTotal").text(parseInt(precioTotal) + (parseInt(subTotal)));

        $("#tabla_venta").append("<tr id='tr"+id_producto+"'><input type='hidden' name='id_producto[]' value='"+id_producto+"'><input type='hidden' name='canti[]' value='"+cantida+"'><input type='hidden' name='precio[]' value='"+precio+"'><input type='hidden' name='SubTotal[]' value='"+subTotal+"'><td>"+producto+"</td><td>"+precio+"</td><td>"+cantida+"</td><td id='sub' class='subtotal'>"+subTotal+"</td><td><button type='button' onclick='eliminar_producto("+id_producto+","+subTotal+")' class='btn btn-danger'>Eliminar</button></td></tr>")
        
    }
}

function eliminar_producto(id_producto,subtotal){
    $("tr"+id_producto).remove();
    let total = $("#valorTotal").text() || 0;
    $("#valorTotal").text(parseInt(total) - parseInt(subtotal));
    
    $('#tabla_venta tr').click(function(){
        $(this).remove();
        return false;
    });
}

function eliminarDetalle2(iddetalle)
{        
    $.ajax({
		dataType:'json',
		type:'post',
		url:url+"venta/eliminarDetalle/"+iddetalle,
		data:{iddetalle:iddetalle},
	})
    
    $('#tabla_venta tr').click(function(){
        $(this).remove();
        return false;
    });
}

//mensaje de ayuda online

function ayudaOnline()
{        
    let mensaje = $("#mensaje").val();  
    let doc = $("#doc").val();  
    
    if (mensaje == "") {
        $('#res').text("¡Completa este campo!");
    }
    else{

        $.ajax({
            dataType:'json',
            type:'post',
            url:url+"usuario/agregarMensaje",
            data:{mensaje:mensaje_add, doc:doc_add},
    
        })
        Swal.fire({
            icon: 'success',
            text: 'Duda registrada (refresh)',            
        })

    }
    
}