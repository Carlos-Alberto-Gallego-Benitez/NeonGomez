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
    
     require APP . 'view/_templates/header.php';
     require APP . 'view/compra/index.php';
     require APP . 'view/_templates/footer.php';
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

  public function guardar(){
    
    session_start();
    $compra = new Compra();
    $compra->__SET("Fecha",$_POST['fecha']);    
    $compra->__SET("IDProveedor",$_POST['idproveedor']);    
    $compra->__SET("Estado",$_POST['estado']);
    $respuesta = $compra->registrar();
    

    if ($respuesta != false) {
        $ultimo = $respuesta->id;

        foreach($_POST["id_insumo"] as $key => $value){

            $detalle = new Compra();
            $detalle->__SET("IDCompra",$ultimo);
            $detalle->__SET("IDInsumo", $value);
            $detalle->__SET("Precio", $_POST["precio"][$key]);  
            $detalle->__SET("Cantidad", $_POST["cant"][$key]);                      
            $detalle->__SET("Subtotal", $_POST["subTotal"][$key]);
            $detalle->__SET("TotalCompra", $value);
            $detalle->registrarDetalle();

            //aumentar insumos
            /*$ins = $value;
            $cantidad = $_POST["cant"][$key];
            $insumo = new Insumo();
            $insumo->aumentar($ins, $cantidad);*/
            
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

  public function editar($idcompra){
    if (isset($idcompra)) {

        $compra = new Compra();
        $insumo = new Insumo();
        $proveedor = new Proveedor();
        $lista = new Compra();
        
        $compras = $compra->obtenerCompra($idcompra);
        $insumos = $insumo->listadoInsumos();
        $proveedores = $proveedor->listarProveedores2();
        $lista = $lista->otenerInsumos($idcompra);

         require APP . 'view/_templates/header.php';
         require APP . 'view/compra/editar.php';
         require APP . 'view/_templates/footer.php';

    }else{
        header("location: " . URL . "compra/index");
    }
  }

  public function eliminarDetalle($iddetalle){
    $detalle = new Compra();
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

      foreach($_POST["id_insumo"] as $key => $value){

          $detalle = new Compra();
          $detalle->__SET("IDCompra",$_POST["idcompra"]);
          $detalle->__SET("IDInsumo", $value);
          $detalle->__SET("Precio", $_POST["precio"][$key]);  
          $detalle->__SET("Cantidad", $_POST["cant"][$key]);                      
          $detalle->__SET("Subtotal", $_POST["subTotal"][$key]);
          $detalle->__SET("TotalCompra", $_POST["valorTotal"][$key]);
          $detalle->registrarDetalle();

          //descontar insumos
          /*$ins = $value;
          $cantidad = $_POST["cant"][$key];
          $insumo = new Insumo();
          $insumo->descontar($ins, $cantidad);*/
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
