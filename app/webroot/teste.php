<?php
 
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
		
	$client = new SoapClient("http://localhost:8080/ProdUNICAMPServices/services/Servicos?wsdl");
	$result = $client->getListCategoria();
	print_r($result);
	echo "<br>";
	foreach ($result->return as $a){
		echo $a->nome;
		echo "<br />";
	}
?>