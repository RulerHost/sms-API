<?php
	function sms($Api_u,$Api_p,$Numero,$Mensaje,$Pais,$uid){
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL,"https://sms.aclientes.com.mx/api.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "api=true&cmd=sms&user=".$Api_u."&pass=".$Api_p."&to=".$Numero."&txt=".$Mensaje."&pais=".$Pais."&uid=0");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$remote_server_output = curl_exec ($ch);		
		curl_close ($ch);
		$Respuesta = json_decode($remote_server_output,true);
		return $Respuesta;
	}
?>
