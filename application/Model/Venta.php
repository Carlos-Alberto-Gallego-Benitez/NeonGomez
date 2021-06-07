<?php 

namespace Mini\Model;

use Mini\Core\Model;
use Mini\Libs\Helper;

class Venta extends Model{

    private $IDVenta;
    private $IDCliente;
	private $Fecha;
    private $Estado;
    private $IDProducto;
    private $Precio;
    private $Cantida;
    private $Subtotal;
    private $ValorTotal;


    public function __SET($attr,$val)
    {
        $this->$attr = $val;
    }

    public function __GET($attr)
    {
        return $this->$attr;
    }
   
    /*select P.productname, C.CategoryID, ProductID  from Products p 
    join Categories c on c.CategoryID = p.CategoryID 
    where ProductID = 77*/

    public function listarVentas()
    {   
        $sql = "SELECT V.IDVenta, V.Fecha, V.Estado, C.Nombre, C.Apellido FROM venta v 
        JOIN cliente c ON c.IDCliente = v.IDCliente ";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();

    }

    public function TraerDetalle($iddetalle)
    {   
        $sql = "SELECT IDVenta, Subtotal FROM detalle_venta WHERE IDDetalle = $iddetalle";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetch();

    }

    public function TraerProducto($idproducto)
    {   
        $sql = "SELECT Cantidad FROM producto_terminado WHERE IDProducto = $idproducto";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetch();

    }

    public function actualizarProducto($idproducto, $valor)
    {
        $sql = "UPDATE producto_terminado SET Cantidad = :Cantidad WHERE IDProducto= :IDProducto";
        $query = $this->db->prepare($sql);
        $parameters = array(':Cantidad' => $valor, ':IDProducto' => $idproducto);
                
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function listarVentasr()
    {   
        $sql = "SELECT V.IDVenta, V.Fecha, V.Estado, C.Nombre, C.Apellido, D.Subtotal, D.ValorTotal, D.Cantidad, P.Nombre AS nombre FROM venta v 
        JOIN cliente c ON c.IDCliente = v.IDCliente JOIN detalle_venta d ON d.IDVenta = v.IDVenta 
        JOIN producto_terminado p ON p.IDProducto = d.IDProducto";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();

    }
    
    public function listarVentasr1($IDVenta)
    {   
        $sql = "SELECT V.IDVenta, V.Fecha, V.Estado, C.Nombre, C.Apellido, D.Subtotal, D.ValorTotal, D.IDDetalle, D.Cantidad, P.Nombre AS nombre FROM venta v 
        JOIN cliente c ON c.IDCliente = v.IDCliente JOIN detalle_venta d ON d.IDVenta = v.IDVenta 
        JOIN producto_terminado p ON p.IDProducto = d.IDProducto WHERE v.IDVenta = $IDVenta";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();

    }

    public function ultimo()
    {    
        $sql = "SELECT max(IDVenta) as id FROM venta";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetch();

    }

    public function registrar()
    {
        $sql = "INSERT INTO venta (Fecha, IDCliente, Estado) VALUES (?,?,'Activo')";
        $stm = $this->db->prepare($sql);        
        $stm->bindParam(1, $this->Fecha);
        $stm->bindParam(2, $this->IDCliente);
               
        if($stm->execute()){
            return $this->ultimo(); 
        }else{
            return false;
        }
    } 

    public function registrarDetalle()
    {
        $sql = "INSERT INTO detalle_venta (IDventa, IDProducto, Precio, Cantidad, Subtotal, ValorTotal) VALUES (?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->IDVenta);
        $stm->bindParam(2, $this->IDProducto);
        $stm->bindParam(3, $this->Precio);      
        $stm->bindParam(4, $this->Cantida);
        $stm->bindParam(5, $this->Subtotal);
        $stm->bindParam(6, $this->ValorTotal);  
        
       
        $stm->execute();           
        
    }   
    
    public function obtenerVenta($id)
    {    
        $sql = "SELECT V.Fecha, V.Estado, V.IDVenta, C.Nombre, C.IDCliente, C.Apellido FROM venta v JOIN Cliente c ON c.IDCliente = v.IDCliente WHERE V.IDVenta = $id ";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetch();

    }
    
    public function eliminarDetalle($iddetalle)
    {
        $sql = "DELETE FROM detalle_venta WHERE IDDetalle = $iddetalle";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        
    }

    public function obtenerDetalleVenta($id)
    {    
        $sql = "SELECT D.Cantidad, D.Precio, D.Subtotal, P.Nombre, D.IDDetalle, D.ValorTotal FROM detalle_venta d JOIN producto_terminado p ON p.IDProducto = d.IDProducto WHERE d.IDVenta = $id ";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();

    }

    public function actualizar()
    {
        $sql = "UPDATE venta SET Fecha = ?, IDCliente = ?, Estado = ? WHERE IDVenta = ?";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->Fecha);
       $stm->bindParam(2, $this->IDCliente);
       $stm->bindParam(3, $this->Estado);
       $stm->bindParam(4, $this->IDVenta);
       

       
       $stm->execute();
    }

    public function actualizarDetalle($valor, $idventa)
    {
        $sql = "UPDATE detalle_venta SET ValorTotal = :ValorTotal WHERE IDVenta= :IDVenta";
        $query = $this->db->prepare($sql);
        $parameters = array(':ValorTotal' => $valor, ':IDVenta' => $idventa);
                
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

















}






/* 
public function listarVentas()
    {   
        $sql = "SELECT V.IDVenta, V.Fecha, V.Estado, C.Nombre, C.Apellido FROM venta v 
        JOIN cliente c ON c.IDCliente = v.IDCliente";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();

    }

*/