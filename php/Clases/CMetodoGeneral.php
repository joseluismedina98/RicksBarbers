<?php
define('RUTA_LOGX','C://xampp/htdocs/LOGS/RicksBarber');


class CMetodoGeneral
{
	function __construct()
	{
		date_default_timezone_set('America/Mazatlan');
	}

	public function grabarLogx($cadLogx)
	{
		$cIpCliente = $this->getRealIP();
		$rutaLog =  RUTA_LOGX .  '-' . date("Y-m-d") . ".log"; 
		$cad = date("Y-m|H:i:s|") . getmypid() . "|" . $cIpCliente . "| " . $cadLogx . "\n";
		$file = fopen($rutaLog, "a");
		if( $file )
		{
			fwrite($file, $cad);
		}
		fclose($file);
	}

    public function getRealIP() 
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
           
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
       
        return $_SERVER['REMOTE_ADDR'];
    }  

}

?> 
