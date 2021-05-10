<?php 

namespace Mini\Model;

use Mini\Core\Model;
use Mini\Libs\Helper;

class Cliente extends Model
{
    private $IDCliente;
	private $Documento;
    private $Nombre;
    private $Apellido;
    private $Correo;
    private $Direccion;
    private $Telefono;
    private $Estado;

    
    public function __SET($attr,$val)
    {
        $this->$attr = $val;
    }

    public function __GET($attr)
    {
        return $this->$attr;
    }

    public function listarClientes()
    {   
        $sql = "SELECT * FROM cliente";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();

    }

    public function listarMensajes()
    {   
        $sql = "SELECT Mensaje FROM mensaje";
        $query = $this->db->prepare($sql);
        $query->execute();        
        return $query->fetchAll();

    }


    public function registrarMensaje($mensaje)
    {
        $sql = "INSERT INTO mensaje ( Mensaje) VALUES (:Mensaje)";
        $query = $this->db->prepare($sql);
        $parameters = array(':Mensaje' => $mensaje);        
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }


    public function registrar()
    {
        $sql = "INSERT INTO cliente (Documento, Nombre, Apellido, Correo,Direccion, Telefono, Estado) 
        VALUES (?,?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->Documento);
        $stm->bindParam(2, $this->Nombre);
        $stm->bindParam(3, $this->Apellido);
        $stm->bindParam(4, $this->Correo);
        $stm->bindParam(5, $this->Direccion);  
        $stm->bindParam(6, $this->Telefono);       
        $stm->bindParam(7, $this->Estado);        
        $stm->execute();
    }

    public function obtenerCliente($idcliente)
    {
        $sql = "SELECT * FROM cliente WHERE IDCliente = $idcliente LIMIT 1";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetch();
    }

    
    public function actualizar()
    {
        $sql = "UPDATE cliente SET Documento = ?, Nombre = ?, Apellido = ?, Correo = ?,
        Direccion = ?, Telefono = ?, Estado = ? WHERE IDCliente = ?";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->Documento);
       $stm->bindParam(2, $this->Nombre);
       $stm->bindParam(3, $this->Apellido);
       $stm->bindParam(4, $this->Correo);
       $stm->bindParam(5, $this->Direccion);  
       $stm->bindParam(6, $this->Telefono);       
       $stm->bindParam(7, $this->Estado);  
       $stm->bindParam(8, $this->IDCliente); 
       $stm->execute();
    }



    public function listadoClientes()
    {  
        $sql = "SELECT * FROM cliente WHERE Estado = 'Activo' ORDER by IDCliente DESC";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();
    }


    public function consultar($documento)
    {
        $sql = "SELECT * FROM cliente WHERE Documento = $documento LIMIT 1";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetch();
    }

    public function listaractivos()
    {   
        $sql = "SELECT * FROM cliente WHERE Estado = 'Activo'";
        $stm = $this->db->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll();

    }
    
}


?>