<?php 

namespace Mini\Controller;

use Mini\Model\Insumo;

class Insumocontroller{

    public function index(){

        $insumo = new Insumo();
        $insumos1 = $insumo->listadoInsumos2();

        $insumo8 = new Insumo();
        $insumos = $insumo8->listadoInsumosS();
       

        require APP . 'view/_templates/header.php';
        require APP . 'view/insumo/index.php';
        
        require APP . 'view/_templates/footer.php';
    }


    public function registro()
    {
        $objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

        require APP . 'view/_templates/header.php';
        require APP . 'view/insumo/registro.php';
        require APP . 'view/_templates/footer.php';
    }

    public function guardar(){
        session_start();
        if (isset($_POST['agregarInsumo'])){

            $nombre = $_POST['nombre'];
            $cantidad = $_POST['cantidad'];            

            $insumo = new Insumo();
            $respuesta = $insumo->AgregarInsumo($nombre, $cantidad); 
            
            try{
                if($respuesta =  true){
                    $_SESSION["registro"] = "Registro exitoso";
                }else{
                  $_SESSION["registro"] = "Error de registro";
                }
              }catch(\Excepetion $e){
                $_SESSION["registro"] = $e->getMessage();
            } 
         

            header('location: ' . URL . 'insumo/index');
        }
    }

    public function reportes(){

        $insumo = new Insumo();
        $insumos = $insumo->listadoInsumos2();        
        
        require APP . 'view/reportes/insumo/reporte.php';
        
       
       
    }

    public function reporteUnitario($IDInsumo){

        $insumo = new Insumo();
        $insumos = $insumo->obtenerInsumo($IDInsumo);        
        
        require APP . 'view/reportes/insumo/reporteunitario.php';
        
       
       
    }
   

    public function buscar($IDInsumo){
        $inst1 = new Insumo();
        
        $insumos = $inst1->listadoInsumosS(); 

        if (isset($IDInsumo)) {

        $inst = new Insumo();
        $insumo1 = $inst->obtenerInsumo($IDInsumo);

        
        
        

        require APP . 'view/_templates/header.php';
        require APP . 'view/insumo/editar.php';
        require APP . 'view/_templates/footer.php';

        }else {
            
            header('location: ' . URL . 'insumo/index');
        }
    }

    public function actualizar(){
        
        session_start();
        if (isset($_POST['agregarInsumo'])) {
            
           $objeto = new Insumo();
           $objeto->actualizar($_POST['nombre'], $_POST['cantidad'], $_POST['estado'], $_POST['idinsumo']);

           try{
            if($objeto = true){
                $_SESSION["editar"] = "Datos actualizados correctamente";
            }else{
              $_SESSION["editar"] = "Error de actualización";
            }
          }catch(\Excepetion $e){
            $_SESSION["editar"] = $e->getMessage();
          }

           header('location: ' . URL . 'insumo/index');
        }

    }

  
}

?>