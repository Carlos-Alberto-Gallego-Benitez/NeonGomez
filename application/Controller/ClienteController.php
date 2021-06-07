<?php 

namespace Mini\Controller;

use Mini\Model\Cliente;
use Mini\Model\Insumo;

class Clientecontroller{

    public function index(){

        $cliente = new Cliente();
        $clientes = $cliente->listarClientes();
        
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

        require APP . 'view/_templates/header.php';
        require APP . 'view/cliente/index.php';
        
        require APP . 'view/_templates/footer.php';
    }

    public function agregarMensaje($mensaje)
    {
        
        $objeto = new Usuario();
        $entrada = $objeto->registrarMensaje($mensaje);
    }

    public function registro()
    {
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/cliente/registro.php';
        require APP . 'view/_templates/footer.php';
    }

    public function guardar()
    {
        session_start();
        $documento = $_POST["documento"];
        $datos = new Cliente();
        $resp = $datos->consultar($documento);

        if($resp != null){
            $_SESSION["error"] = "El documento ingresado ya se enceuntra registrado";
        }        

        $cliente = new Cliente();
        $cliente->__SET("Documento", $_POST["documento"]);
        $cliente->__SET("Nombre", $_POST["nombre"]);
        $cliente->__SET("Apellido", $_POST["apellido"]);
        $cliente->__SET("Correo", $_POST["correo"]);
        $cliente->__SET("Direccion", $_POST["direccion"]);
        $cliente->__SET("Telefono", $_POST["telefono"]);        
        $respuesta = $cliente->registrar();
        
        if($respuesta != null){
            $_SESSION["registro"] = "Registro fallido! ";
        }else {
            $_SESSION["registro"] = "Registro exitoso";
        }

        header('location: ' . URL . 'cliente/index');
    }
    public function editar($idcliente)
    {        
        if (isset($idcliente)) {
            
            $cliente = new Cliente();            
            $cliente = $cliente->obtenerCliente($idcliente);
            
            $objeto = new Insumo();
            $insumos = $objeto->listadoInsumosS(); 
           
            require APP . 'view/_templates/header.php';
            require APP . 'view/cliente/editar.php';
            require APP . 'view/_templates/footer.php';
        }else{
            
            header('location: ' . URL . 'cliente/index');
        }        
    }
    
    public function actualizar()
    {
        session_start();
        /*$documento = $_POST["documento"];
        $datos = new Cliente();
        $resp = $datos->consultar($documento);

        if($resp == true){
            $_SESSION["error"] = "Datos ";
        }*/

        $cliente = new Cliente();
        $cliente->__SET("Documento", $_POST["documento"]);
        $cliente->__SET("Nombre", $_POST["nombre"]);
        $cliente->__SET("Apellido", $_POST["apellido"]);
        $cliente->__SET("Correo", $_POST["correo"]);
        $cliente->__SET("Direccion", $_POST["direccion"]);
        $cliente->__SET("Telefono", $_POST["telefono"]);
        $cliente->__SET("Estado", $_POST["estado"]);  
        $cliente->__SET("IDCliente", $_POST["idcliente"]); 
        $respuesta = $cliente->actualizar();

        try{
            if($respuesta = true){
                $_SESSION["editar"] = "Datos actualizados correctamente";
            }else{
              $_SESSION["editar"] = "Error de actualizacion";
            }
        }catch(\Excepetion $e){
            $_SESSION["editar"] = $e->getMessage();
        }
 

        header('location: ' . URL . 'cliente/index');
    }


    public function reportes(){

        $cliente = new Cliente();
        $clientes = $cliente->listarClientes();        
        
        require APP . 'view/reportes/cliente/reporte.php';      
              
    }

    public function reporte($idcliente)
    {        
        if (isset($idcliente)) {
            
            $cliente = new Cliente();            
            $cliente = $cliente->obtenerCliente($idcliente);       
            
            require APP . 'view/reportes/cliente/reportei.php';
            
        }else{
            
            header('location: ' . URL . 'cliente/index');
        }        
    }
}

?>