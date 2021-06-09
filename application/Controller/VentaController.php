<?php 

namespace Mini\Controller;

use Mini\Model\Venta;
use Mini\Model\Cliente;
use Mini\Model\Producto;
use Mini\Model\Insumo;


class Ventacontroller{
    
    public function index(){       

        $venta = new Venta();
        $ventas = $venta->listarVentas();           
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

        require APP . 'view/_templates/header.php';
        require APP . 'view/venta/index.php';        
        require APP . 'view/_templates/footer.php';
    }   
    

    public function registro()
    {
        $cliente = new Cliente();
        $producto = new Producto();

        $productos = $producto->listaractivos();
        $clientes = $cliente->listaractivos();
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 


        require APP . 'view/_templates/header.php';
        require APP . 'view/venta/registro.php';
        require APP . 'view/_templates/footer.php';
    }

    public function guardar()
    {   
        session_start();
        if (isset($_POST["nuevaVenta"])) {
            $venta = new Venta();
            $venta->__SET("Fecha", $_POST["fecha"]);
            $venta->__SET("IDCliente", $_POST["cliente"]);
            
            $respuesta = $venta->registrar();

            if ($respuesta != false) {

                $ultimo = $respuesta->id;
                $total = 0;

                //para acumular el total
                foreach($_POST["id_producto"] as $key => $value){

                    $total += $_POST['SubTotal'][$key];

                }
        
                foreach($_POST["id_producto"] as $key => $value){
                    
                    $detalle = new Venta();
                    $detalle->__SET("IDVenta",$ultimo);
                    $detalle->__SET("IDProducto", $value);
                    $detalle->__SET("Precio", $_POST["precio"][$key]);  
                    $detalle->__SET("Cantida", $_POST["canti"][$key]);                      
                    $detalle->__SET("Subtotal", $_POST['SubTotal'][$key]);
                    $detalle->__SET("ValorTotal", $total);
                    
                    $detalle->registrarDetalle();  
                }
            }

            try{
                if($respuesta =  true){
                    $_SESSION["registro"] = "Registro exitoso";
                }else{
                  $_SESSION["registro"] = "Error de registro";
                }
              }catch(\Excepetion $e){
                $_SESSION["registro"] = $e->getMessage();
            } 
         
        }    
        header('location: ' . URL . 'venta  /index');
    }

    public function reportes(){

        $venta = new Venta();
        $ventas = $venta->listarVentasr();        
        
        require APP . 'view/reportes/venta/reporte.php';
        
       
    }

    public function reportesUnitario($IDVenta){

        $venta = new Venta();
        $lista = new Venta();


        $lista = $lista->obtenerVenta($IDVenta);
        $ventas = $venta->listarVentasr1($IDVenta);        
        
        require APP . 'view/reportes/venta/reporteunitario.php';       
       
    }
     

    public function buscar($IDVenta)
    {      
        $acumulado = 0; 

        if (isset($IDVenta)) {
            
            $venta = new Venta(); 
            $producto = new Producto();
            $cliente = new Cliente();           
            $ventas = $venta->obtenerVenta($IDVenta);
            $ventasdetalle = $venta->obtenerDetalleVenta($IDVenta);
            
            foreach($ventasdetalle as  $valor){

                $acumulado += $valor->Subtotal;

            }

            $productos = $producto->listaractivos();
            $clientes = $cliente->listaractivos();
            $objeto = new Insumo();
            $insumos = $objeto->listadoInsumosS(); 
           
            require APP . 'view/_templates/header.php';
            require APP . 'view/venta/editar.php';
            require APP . 'view/_templates/footer.php';

        } else {
            
            header('location: ' . URL . 'venta/index');
        }
    }

    public function eliminarDetalle($iddetalle)
    {
       $detalle = new Venta();
        
       $traida = $detalle->TraerDetalle($iddetalle);

       $ventasdetalle = $detalle->obtenerDetalleVenta($traida->IDVenta);
        $acumulado1 = 0;
                

        foreach($ventasdetalle as  $valor){

            $acumulado1 += $valor->Subtotal;

        }

        $totalborrar = $acumulado1 - $traida->Subtotal;

        
        $detalle->actualizarDetalle($totalborrar, $traida->IDVenta);
    
 
       $detalle = $detalle->eliminarDetalle($iddetalle);

    }

    public function actualizar()
    {
    session_start();
    $venta = new Venta();
    $venta->__SET("Fecha", $_POST["fecha"]);
    $venta->__SET("IDCliente", $_POST["cliente"]);
    $venta->__SET("Estado", $_POST["estado"]);
    $venta->__SET("IDVenta", $_POST["idventa"]);

    $respuesta = $venta->actualizar();
    
        $ventasdetalle = $venta->obtenerDetalleVenta($_POST["idventa"]);
        $acumulado0 = 0;
        $total0 = 0;

        foreach($ventasdetalle as  $valor){

            $acumulado0 += $valor->Subtotal;
        }

        foreach($_POST["id_producto"] as $key => $value){
            
            $total0 += $_POST['SubTotal'][$key];
        }

        $final = $acumulado0 + $total0;
        //para registrar un producto nuevo*/
        if($total0 >0){
            
            foreach($_POST["id_producto"] as $key => $value){

                $detalle = new Venta();
                $detalle->__SET("IDVenta", $_POST['idventa']);
                $detalle->__SET("IDProducto", $value);
                $detalle->__SET("Precio", $_POST["precio"][$key]);  
                $detalle->__SET("Cantida", $_POST["canti"][$key]);                      
                $detalle->__SET("Subtotal", $_POST['SubTotal'][$key]);
                $detalle->__SET("ValorTotal", $final);
                
                $detalle->registrarDetalle();                        
                
                
            }            

            $detalle0 = new Venta();
            $detalle0->actualizarDetalle($final, $_POST['idventa']);

        }

        try{
            if($respuesta = true){
                $_SESSION["editar"] = "Datos actualizados correctamente";
            }else{
              $_SESSION["editar"] = "Error de actualización";
            }
        }catch(\Excepetion $e){
            $_SESSION["editar"] = $e->getMessage();
        }
        
        
        header('location: ' . URL . 'venta/index');
    }
}

?>