<?php

namespace Mini\Model;

use Mini\Core\Model;
use Mini\Libs\Helper;

class Compra extends Model
{

  private $IDCompra;
  private $Fecha;
  private $Precio;
  private $Cantidad;
  private $IDProveedor;
  private $IDInsumo;
  private $Estado;
  private $TotalCompra;
  private $IDDetalle;
  private $Subtotal;


  public function __SET($attr, $val){
    $this->$attr = $val;
  }

  public function __GET($attr){
    return $this->$attr;
  }

  public function listarCompras(){
    $sql = "SELECT c.IDCompra, c.Fecha, c.Estado, p.Nombre FROM compra c JOIN proveedor p ON p.IDProveedor = c.IDProveedor ORDER BY C.Fecha desc ";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }

  public function aumentar($ins,$cantidad)
  {
      $sql = "UPDATE insumo SET Cantidad = Cantidad + $cantidad WHERE IDInsumo = $ins";
      $stm= $this->db->prepare($sql);
      $stm->execute();       
  
  }

  public function listadoCompras(){
    $sql = "SELECT * FROM compra WHERE Estado = 'Activo' ORDER by IDCompra DESC";
    $stm = $this->db->prepare($sql);
    $stm->execute;
    return $stm->fetchAll();
  }

  public function ultimo(){
    $sql = "SELECT max(IDCompra) as id FROM compra";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetch();
  }

  public function registrar(){
    $sql = "INSERT INTO compra (Fecha, IDProveedor, Estado) VALUES (?,?,?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1,$this->Fecha);    
    $stm->bindParam(2,$this->IDProveedor);
    $stm->bindParam(3,$this->Estado);
    if ($stm->execute()) {
      return $this->ultimo();
    }else {
      return false;
    }

  }

  public function registrarDetalle(){
    $sql = "INSERT INTO detalle_compra (IDCompra, IDInsumo, Precio, Cantidad, Subtotal, TotalCompra) VALUES (?,?,?,?,?,?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->IDCompra);
    $stm->bindParam(2, $this->IDInsumo);
    $stm->bindParam(3, $this->Precio);
    $stm->bindParam(4, $this->Cantidad);
    $stm->bindParam(5, $this->Subtotal);
    $stm->bindParam(6, $this->TotalCompra);
    $stm->execute();   
  }

  public function obtenerCompra($idcompra){
        $sql = "SELECT c.Fecha, c.Estado, c.IDCompra, p.Nombre, p.IDProveedor FROM compra c JOIN proveedor p ON p.IDProveedor = c.IDProveedor WHERE C.IDCompra = $idcompra";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetch();
  }

  public function obtenerInsumos($idcompra){
    $sql = "SELECT compra.Fecha, compra.IDProveedor, compra.Estado,detalle_compra.IDDetalle ,detalle_compra.IDCompra,
    detalle_compra.IDInsumo, detalle_compra.TotalCompra, detalle_compra.Cantidad, detalle_compra.Subtotal, detalle_compra.Precio,detalle_compra.TotalCompra, insumo.IDInsumo, insumo.Nombre
    FROM detalle_compra 
    INNER JOIN compra ON detalle_compra.IDCompra = compra.IDCompra
    INNER JOIN insumo ON detalle_compra.IDInsumo = insumo.IDInsumo
    WHERE compra.IDCompra = $idcompra"; 
    $stm = $this->db->prepare($sql);
    $stm->execute();        
    return $stm->fetchAll();
  }

  public function eliminarDetalle($iddetalle){
    $sql = "DELETE FROM detalle_compra WHERE IDDetalle = $iddetalle";
    $stm = $this->db->prepare($sql);
    $stm->execute(); 
  }


  public function actualizar(){
    $sql = "UPDATE compra SET Fecha = ?, IDProveedor = ?, Estado = ? WHERE IDCompra = ?";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1,$this->Fecha);
    $stm->bindParam(2,$this->IDProveedor);
    $stm->bindParam(3,$this->Estado);
    $stm->bindParam(4,$this->IDCompra);
    $stm->execute();
  }

  public function actualizarDetalle($valor, $idcompra)
    {
        $sql = "UPDATE detalle_compra SET TotalCompra = :TotalCompra WHERE IDCompra= :IDCompra";
        $query = $this->db->prepare($sql);
        $parameters = array(':TotalCompra' => $valor, ':IDCompra' => $idcompra);
                
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function TraerDetalle($iddetalle)
    {   
        $sql = "SELECT IDCompra, Subtotal FROM detalle_compra WHERE IDDetalle = $iddetalle";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetch();

    }


}
