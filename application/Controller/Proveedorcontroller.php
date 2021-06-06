<?php

namespace Mini\Controller;

use Mini\Model\Proveedor;
use Mini\Model\Insumo;

class ProveedorController{

	public function index(){

		$proveedor = new Proveedor();
		$proveedores = $proveedor->listarProveedores();
		

		$objeto = new Insumo();
        $insumos = $objeto->listadoInsumosS(); 

		 require APP . 'view/_templates/header.php';
		 require APP . 'view/proveedor/index.php';
		 
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

		 require APP . 'view/_templates/header.php';
		 require APP . 'view/proveedor/registro.php';
		 require APP . 'view/_templates/footer.php';
	}

	public function guardar()
	{
			session_start();
			if (isset($_POST['agregarProveedor'])) {
				$proveedor = new Proveedor();
				$proveedor->registrar($_POST['codigo'],$_POST['nombre'],$_POST['telefono'],$_POST['direccion'],$_POST['correo'],$_POST['estado']);

				try{
					if($proveedor = true){
						$_SESSION["registro"] = "Registro exitoso";
					}else{
					  $_SESSION["registro"] = "Error de registro";
					}
				  }catch(\Excepetion $e){
					$_SESSION["registro"] = $e->getMessage();
				}
			}
			header('location: ' . URL . 'proveedor/index');
	}

	public function editar($idproveedor)
	{
		if (isset($idproveedor)) {
			$proveedor = new Proveedor();
			$proveedor = $proveedor->obtenerProveedor($idproveedor);

			$objeto = new Insumo();
			$insumos = $objeto->listadoInsumosS(); 

			require APP . 'view/_templates/header.php';
            require APP . 'view/proveedor/editar.php';
            require APP . 'view/_templates/footer.php';
		} else {

				header('location: ' . URL . 'proveedor/index');
			}
	}

	public function actualizar()
	{
		session_start();
		if (isset($_POST['editarProveedor'])) {
			$proveedor = new Proveedor();
			$proveedor->actualizar($_POST['codigo'],$_POST['nombre'],$_POST['telefono'],$_POST['direccion'],$_POST['correo'],$_POST['estado'],$_POST['idproveedor']);

			try{
				if($proveedor = true){
					$_SESSION["editar"] = "Datos actualizados correctamente";
				}else{
				  $_SESSION["editar"] = "Error de de actualizacion";
				}
			  }catch(\Excepetion $e){
				$_SESSION["editar"] = $e->getMessage();
			  }
		}
		header('location: ' . URL . 'proveedor/index');
	}

	public function reportes(){
		$reporte = new Proveedor();
		$reportes = $reporte->listarProveedores();
		require APP . 'view/reportes/proveedores/reporte.php';
	}

	public function reportei($idproveedor){
		$reportei = new Proveedor();
		$reportesi = $reportei->obtenerProveedor($idproveedor);
		require APP . 'view/reportes/proveedores/reportei.php';
	}


}


 ?>
