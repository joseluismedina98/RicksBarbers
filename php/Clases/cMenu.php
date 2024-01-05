<?php
include_once 'conexion.php';
include_once('clases/CMetodoGeneral.php');
class cMenu
{

    public static function ValidarLogin($user,$pass){
        $arrDatos  = array();
        $objGn = new CMetodoGeneral();
       try{
        
        $query = CONEXION->prepare("SELECT fn_login(:username, :password)");
        $query->bindParam(":username", $user, PDO::PARAM_STR);
        $query->bindParam(":password", $pass, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchColumn();
        
        if ($result == 1) {
            $arrDatos['codigoRespuesta'] = OK__;
			$arrDatos['descripcion'] = "Login Exitoso";

            $objGn->grabarLogx("arrDatos['codigoRespuesta']-> ".$arrDatos["codigoRespuesta"]);
            $objGn->grabarLogx("arrDatos['descripcion']-> ".$arrDatos["descripcion"]);
        } else {
            $arrDatos['codigoRespuesta'] = ERR__;
			$arrDatos['descripcion'] = "Favor de revisar los datos.";

            $objGn->grabarLogx("arrDatos['codigoRespuesta']-> ".$arrDatos["codigoRespuesta"]);
            $objGn->grabarLogx("arrDatos['descripcion']-> ".$arrDatos["descripcion"]);
        }
    }
    catch(Exception $e){
        $mensaje= 'Excepcion: ' . $e->getMessage() . ' Linea: ' . $e->getLine() .    '  Codigo: ' .  $e->getCode();
		$objGn->grabarLogx( '[' . __FILE__ . ']' . $mensaje);
    }

        return $arrDatos;
    }
}

?>



