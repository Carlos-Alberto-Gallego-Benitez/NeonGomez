<?php

namespace Mini\Controller;
use Mini\Model\Insumo;
use Mini\Model\Compra;
use Mini\Model\Proveedor;

class CompraController
{
  public function index(){
    
    $objeto = new Insumo();
    $insumos = $objeto->listadoInsumosS(); 

     $compra = new Compra();
     $compras = $compra->listarCompras();
     $ayudas = $compra->listarMensajes();

     require APP . 'view/_templates/header.php';
     require APP . 'view/compra/index.php';
     require APP . 'view/_templates/footer.php';
  }


    public function agregarMensaje($mensaje)
    {
        
        $objeto = new Usuario();
        $entrada = $objeto->registrarMensaje($mensaje);
    }

  public function registro(){
    
    $objeto = new Insumo();
    $insumos = $objeto->listadoInsumosS(); 

    $insumo = new Insumo();
    $insumos = $insumo->listadoInsumos();

    $proveedor = new Proveedor();
    $proveedores = $proveedor->listarProveedores2();

    $insumo = new Insumo();
    $insumos3 = $insumo->listadoInsumos();

    require APP . 'view/_templates/header.php';
    require APP . 'view/compra/registro.php';
    require APP . 'view/_templates/footer.php';
  }


  public function buscar($idcompra)
    {      
        $acumulado1 = 0; 

        if (isset($idcompra)) {
            
            $compra = new Compra(); 
            $insumo = new Insumo();
            $proveedor = new Proveedor();           
            $compras = $compra->obtenerCompra($idcompra);
            $comprasdetalle = $compra->obtenerInsumos($idcompra);
            
            foreach($comprasdetalle as  $valor){

                $acumulado1 += $valor->Subtotal;

            }


            $compras = $compra->obtenerCompra($idcompra);
            $insumos = $insumo->listadoInsumos();
            $proveedores = $proveedor->listarProveedores2();
    
             require APP . 'view/_templates/header.php';
             require APP . 'view/compra/editar.php';
             require APP . 'view/_templates/footer.php';

        } else {
            
            header('location: ' . URL . 'cliente/index');
        }
    }
    
    public function guardar(){
    
      session_start();
      $compra = new Compra();
      $compra->__SET("Fecha",$_POST['fecha']);    
      $compra->__SET("IDProveedor",$_POST['idproveedor']);    
      $compra->__SET("Estado",$_POST['estado']);
      $respuesta = $compra->registrar();
      
  
      if ($respuesta != false) {
          $ultimo = $respuesta->id;
  
          $total = 0;
          foreach ($_POST['id_insumo'] as $key => $value) {
                $total += $_POST['subTotal'][$key]; 
          }
  
          foreach($_POST["id_insumo"] as $key => $value){
  
              $detalle = new Compra();
              $detalle->__SET("IDCompra",$ultimo);
              $detalle->__SET("IDInsumo", $value);
              $detalle->__SET("Precio", $_POST["precio"][$key]);  
              $detalle->__SET("Cantidad", $_POST["cant"][$key]);                      
              $detalle->__SET("Subtotal", $_POST["subTotal"][$key]);
              $detalle->__SET("TotalCompra", $total);
              $detalle->registrarDetalle();
  
              //aumentar insumos
              $ins = $value;
              $cantidad = $_POST["cant"][$key];
              $insumo = new Compra();
              $insumo->aumentar($ins, $cantidad);
              
              try{
                if($detalle = true){
                    $_SESSION["registro"] = "Registro exitoso";
                }else{
                  $_SESSION["registro"] = "Error de registro";
                }
              }catch(\Excepetion $e){
                $_SESSION["registro"] = $e->getMessage();
              } 
              
          }
      }
      header('location: ' . URL . 'compra/index');
    }


  public function eliminarDetalle($iddetalle){
    $acumulador = 0;
    $detalle = new Compra();
    $consulta = $detalle->TraerDetalle($iddetalle);
    $comprasdetalle = $detalle->obtenerInsumos($consulta->IDCompra);
            
            foreach($comprasdetalle as  $valor){

                $acumulador += $valor->Subtotal;

            }
    $resta = $acumulador - $consulta->Subtotal;
    $consulta2 = $detalle->actualizarDetalle($resta,$consulta->IDCompra);
    $detalle = $detalle->eliminarDetalle($iddetalle);

  }


  public function actualizar(){

    session_start();
    $compra = new Compra();
    $compra->__SET("Fecha", $_POST['fecha']);     
    $compra->__SET("IDProveedor", $_POST['idproveedor']);      
    $compra->__SET("Estado", $_POST['estado']);
    $compra->__SET("IDCompra", $_POST['idcompra']);
    $respuesta = $compra->actualizar();


      $comprasDetalle = $compra->obtenerInsumos($_POST['idcompra']);
      $acumulado1 = 0;
      $total1 = 0;

      foreach ($comprasDetalle as $valor) {
          $acumulado1 += $valor->Subtotal;
      }

      foreach ($_POST['id_insumo'] as $key => $value) {
            $total1 += $_POST['subTotal'][$key]; 
      }
      $final = $acumulado1 + $total1;

      if($total1 > 0){

      foreach($_POST["id_insumo"] as $key => $value){

          $detalle = new Compra();
          $detalle->__SET("IDCompra",$_POST["idcompra"]);
          $detalle->__SET("IDInsumo", $value);
          $detalle->__SET("Precio", $_POST["precio"][$key]);  
          $detalle->__SET("Cantidad", $_POST["cant"][$key]);                      
          $detalle->__SET("Subtotal", $_POST["subTotal"][$key]);
          $detalle->__SET("TotalCompra", $final);
          $detalle->registrarDetalle();

      }
      $detalle1 = new Compra();
      $detalle1 -> actualizarDetalle($final, $_POST['idcompra']);

    }
      try{
        if($detalle = true){
            $_SESSION["editar"] = "Datos actualizados correctamente";
        }else{
          $_SESSION["editar"] = "Error de de actualizacion";
        }
      }catch(\Excepetion $e){
        $_SESSION["editar"] = $e->getMessage();
      }

      header("location: " . URL . "compra/index");
  }

  public function reportes(){
    $reporte = new Compra();
    $reportes = $reporte->listarCompras();
    require APP . 'view/reportes/compra/reporte.php';
  }


  public function reporteI($idcompra){
    $reporteI = new Compra();
    $reporteI = $reporteI->obtenerCompra($idcompra);
    require APP . 'view/reportes/compra/reportei.php';
  }






}

 ?>