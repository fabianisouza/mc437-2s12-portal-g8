<?php

class Soap extends AppModel {

	public static function getEndereco(){
		
        $client = new SoapClient("http://localhost:8080/ProdUNICAMPServices/services/Servicos?wsdl");
        // se for mais de um parametro, $params será um array
		$response = $client->getListCategoria();
		
		return $response;
	} 
}

?>