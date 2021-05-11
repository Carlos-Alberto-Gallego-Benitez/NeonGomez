// ************* insumos del producto *********************
function agregarInsumos()
{
    let id_insumo = $("#id_insumo").val();
    let text_insumo = $("#id_insumo option:selected").text();
    let cantida = $("#cant").val();  

    if(cantida == '' || cantida <0 || cantida == 0 || text_insumo === 'Seleccione'){
        cantida == 0;
        Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'La cantidad de insumos debe ser mayor a cero!',            
        }) 

        if(text_insumo === 'Seleccione'){
            Swal.fire({
                icon: 'error',
                title: 'Error...',
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

    $("#tabla_insumos").append(
        "<tr id='tr"+id_insumo+"'> <input type='hidden' name='id_insumo[]' value='"+id_insumo+"'>  <input type='hidden' name='cant[]' value='"+cantida+"'> <input type='hidden' name='precio[]' value='"+precio+"'> <input type='hidden' name='subTotal[]' value='"+subTotal+"'> <td>"+text_insumo+"</td><td>"+cantida+"</td><td>"+precio+"</td><td class='subtotal'>"+subTotal+"</td><td><button type='button' onclick='eliminar_insumo("+id_insumo+","+subTotal+")' class='btn btn-danger boton'>Eliminar</button></td><tr>"
    )
    let precioTotal = $("#valorTotal").text() || 0;
    $("#valorTotal").text(parseInt(precioTotal) + (parseInt(subTotal))); 
    //subtotalc();
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
    $("#precio").val(precio)
}




function agregarVenta(){ 

    
    let id_producto = $("#id_producto").val();
    let producto = $("#id_producto option:selected").text();
    let cantida = $("#canti").val();  
    let precio = $("#precio").val();  
    let subTotal = parseInt(precio)*parseInt(cantida);
        

    if (id_producto == null || producto == "Seleccione" || cantida == "" || precio == null) {

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

                $("#tabla_venta").append("<tr id='tr"+id_producto+"'><input type='hidden' name='id_producto[]' value='"+id_producto+"'><input type='hidden' name='canti[]' value='"+cantida+"'><input type='hidden' name='precio[]' value='"+precio+"'><input type='hidden' name='SubTotal[]' value='"+subTotal+"'><td>"+producto+"</td><td>"+precio+"</td><td>"+cantida+"</td><td id='sub' class='subtotal'>"+subTotal+"</td><td><button type='button' onclick='eliminar_producto("+id_producto+","+subTotal+")' class='btn btn-danger'>Eliminar</button></td></tr>")
        
        let precioTotal = $("#valorTotal").text() || 0;
        
        $("#valorTotal").text(parseInt(precioTotal) + (parseInt(subTotal)));

     
        $("#total").text(total);
         
      
        
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
            url:url+"usuario/agregarMensaje/"+ mensaje,
    
        })
        Swal.fire({
            icon: 'success',
            text: 'Duda registrada (refresh)',            
        })

    }
    
}



