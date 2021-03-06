<?php

class Soap extends AppModel {

	public static function getProducts(){
		
        $client = new SoapClient("http://localhost:8080/ProdUNICAMPServices/services/Servicos?wsdl");
        // se for mais de um parametro, $params será um array
		$result = $client->getListCategoria();
		return $result;
	} 
	
	function objectToArray($d) {
		if (is_object($d)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars($d);
		}
 
		if (is_array($d)) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}
}

?>