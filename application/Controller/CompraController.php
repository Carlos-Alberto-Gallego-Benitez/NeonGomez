<?php

namespace Mini\Controller;
use Mini\Model\Insumo;
use Mini\Model\Compra;
use Mini\Model\Proveedor;

class CompraController
{
  public function index(){
     $compra = new Compra();
     $compras = $compra->listarCompras();

     $objeto = new Insumo();
     $insumos = $objeto->listadoInsumosS(); 
    
     require APP . 'view/_templates/header.php';
     require APP . 'view/compra/index.php';
     require APP . 'view/_templates/footer.php';
  }

  public function registro(){

    $insumo = new Insumo();
    $insumos3 = $insumo->listadoInsumos();

    $proveedor = new Proveedor();
    $proveedores = $proveedor->listarProveedores();

    $objeto = new Insumo();
    $insumos = $objeto->listadoInsumosS(); 

    require APP . 'view/_templates/header.php';
    require APP . 'view/compra/registro.php';
    require APP . 'view/_templates/footer.php';
  }

  public function guardar(){
    
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
            
        }
    }
    header('location: ' . URL . 'compra/index');
  }

  public function editar($idcompra){
    $objeto = new Insumo();
    $insumos = $objeto->listadoInsumosS(); 

    if (isset($idcompra)) {

        $compra = new Compra();
        $insumo = new Insumo();
        $proveedor = new Proveedor();
        $lista = new Compra();

        
        
        $compras = $compra->obtenerCompra($idcompra);
        $insumos1 = $insumo->listadoInsumos();
        $proveedores = $proveedor->listarProveedores();
        $insumo = $lista->otenerInsumos($idcompra);

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
      $compra = new Compra();
      $compra->__SET("Fecha", $_POST['fecha']);     
      $compra->__SET("IDProveedor", $_POST['idproveedor']);      
      $compra->__SET("Estado", $_POST['estado']);
      $compra->actualizar();

      foreach ($_POST['id_insumo'] as $key => $value) {
            $detalle = new Compra();
            $detalle->__SET("IDCompra",$ultimo);
            $detalle->__SET("IDInsumo", $value);
            $detalle->__SET("Precio", $_POST["precio"][$key]);  
            $detalle->__SET("Cantidad", $_POST["cant"][$key]);                      
            $detalle->__SET("Subtotal", $_POST["subTotal"][$key]);
            $detalle->__SET("TotalCompra", $value);

        $detalle->registrarDetalle();
      }

  }



}

 ?>
