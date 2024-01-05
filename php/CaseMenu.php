<?php
header("Content-type: text/html; charset=utf8");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");

 include_once('clases/cMenu.php');
include_once('clases/CMetodoGeneral.php'); 

$objGn 						= new CMetodoGeneral();
$arrResp 					= array();
$sIpRemoto 					= '';
$sIpRemoto	 				= $objGn->getRealIP();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if(isset($data['iOpcion']) && isset($data['sUsuario']) && isset($data['sPassword'])) {
        $iOpcion = $data['iOpcion'];
        $sUsuario = $data['sUsuario'];
        $sPassword = $data['sPassword'];

        // Aquí puedes hacer lo que necesites con los datos desde JavaScript
        // Por ejemplo, podrías procesar la autenticación del usuario

        // Devolver una respuesta al cliente (JavaScript)

    } else {
        echo json_encode(array('error' => 'Datos incompletos'));
    }
} else {
    echo json_encode(array('error' => 'Método no permitido'));
}



switch($iOpcion)
	{
		case 1:
			$objGn->grabarLogx('CASE 1 --> ValidarLogin');
            $arrResp = cMenu::ValidarLogin($sUsuario,$sPassword);	
		break;
		
		
	}

	echo json_encode($arrResp);

?>
