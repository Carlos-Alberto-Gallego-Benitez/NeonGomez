$("#formularioClientes").validate({  
    
    rules: {
        documento: {        
        required: true,
        minlength: 8
    },
    nombre:{
        required: true,        
        minlength: 3
    },
    apellido:{
        required: true,        
        minlength: 3
    },
    correo:{
        required: true,        
        email: true
    },
    direccion:{
        required: true,        
        minlength: 5
    },
    telefono:{
        required: true,        
        minlength: 7,
        number: true
    },
    estado:{
        required: true
    }
},
/*messages:{
    documento: {        
        
        //minlength: 'El documento minimo debe tener 8 caracteres'
    },
}*/
});



$("#formularioproductos").validate({ 

    rules: {
        nombre: {
        
        required: true,
        
    },
    cantidad:{
        required: true,        
        //minlength: 3
    },
    precio:{
        required: true,
        minlength: 4
    },
    tipo:{
        required: true,
    },
    estado:{
        required: true,
    },
    foto:{
        required: true,
    },
    id_insumo:{
        required: true,
    },
    cant:{
        required: true,
        minlength: 1
    }
}
});

$("#editarproductos").validate({ 

    rules: {
        nombre: {
        
        required: true,
        
    },
    cantidad:{
        required: true,        
        //minlength: 3
    },
    precio:{
        required: true,
        minlength: 4
    },
    tipo:{
        required: true,
    },
    estado:{
        required: true,
    },
   
   
}
});

//validacio modulo usuarios

$("#registroUsuarios").validate({ 

    rules: {
    documento: {
        
        required: true,
        minlength: 8,
        
    },
    nombre:{
        required: true     
        //minlength: 3
    },
    apellido:{
        required: true
        
    },
    correo:{
        required: true
    },
    contra:{
        required: true,
        minlength: 6
    },
    rol:{
        required: true
    },
    telefono:{
        required: true,
        minlength: 4
    },
    estado:{
        required: true
    },
   
   
    }
});

$("#editarUsuario").validate({ 

    rules: {
    documento: {
        
        required: true,
        minlength: 8 
        
    },
    nombre:{
        required: true     
        //minlength: 3
    },
    apellido:{
        required: true
        
    },
    correo:{
        required: true
    },
    contra:{
        required: true,
        minlength: 6
    },
    rol:{
        required: true
    },
    telefono:{
        required: true,
        minlength: 4
    },
    estado:{
        required: true
    },
   
   
    }
});

//validaciones insumos

$("#registrarInsumo").validate({ 

    rules: {
    nombre:{
        required: true     
        //minlength: 3
    },
    cantidad:{
        required: true
        
    },
    estado:{
        required: true
    },
 
    }
});

$("#editarInsumo").validate({ 

    rules: {
    nombre:{
        required: true     
        //minlength: 3
    },
    cantidad:{
        required: true
        
    },
    estado:{
        required: true
    },
 
    }
});


// validacion ventas

$("#registroVenta").validate({ 

    rules: {
    canti:{
        required: true,   
        
    },
    cliente:{
        required: true,
        
    },
    precio:{
        required: true,
    },
    fecha:{
        required: true,
        
    },
    id_producto:{
        required: true,
    },
    estado:{
        required: true,
    },
   
   
    }
});

$("#editarVenta").validate({ 

    rules: {
    cliente:{
        required: true,
        
    },
    fecha:{
        required: true,
        
    },
    estado:{
        required: true,
    },
   
   
    }
});


//Validaciones Compra
$("#registroCompra").validate({
    rules: {
        fecha: {
        required: true
    },
    idproveedor:{
        required: true       
    },
    estado:{
        required: true
    },
    id_insumos:{
        required: true,  
        number: true    
    },
    cant:{
        required: true,
        number: true
    },
    id_insumo:{
        required: true
    },
    precio:{
        required: true,        
        number: true
    }
}
});

$("#editarCompra").validate({
    rules: {
        fecha: {
        required: true
    },
    idproveedor:{
        required: true       
    },
    estado:{
        required: true
    },
    id_insumos:{
        required: true,  
        number: true    
    }
}
});

//validaciones proveedores
$("#registroProveedores").validate({
    rules: {
        codigo: {
        required: true,
        minlength: 4
    },
    nombre:{
        required: true,        
        minlength: 1
    },
    telefono:{
        required: true,
        minlength: 4,
        number: true
    },
    direccion:{
        required: true,  
        minlength: 5  
    },
    correo:{
        required: true,
        email: true
    },
    estado:{
      required: true
    }
}
});

$("#editarProveedores").validate({
    rules: {
        codigo: {
        required: true,
        minlength: 4
    },
    nombre:{
        required: true,        
        minlength: 1
    },
    telefono:{
        required: true,
        minlength: 4,
        number: true
    },
    direccion:{
        required: true,  
        minlength: 5  
    },
    correo:{
        required: true,
        email: true
    },
    estado:{
      required: true
    }
}
});

//validaciones perfil, cambio de contraseña

$("#formContra").validate({ 

    rules: {
    contrasena1:{
        required: true,
        
        
    },
    contrasena2:{
        required: true,

    }
  
   
    }
});


