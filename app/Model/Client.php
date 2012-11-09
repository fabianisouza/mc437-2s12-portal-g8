<?php
App::uses('Model', 'Model');
App::uses('HttpSocket', 'Network/Http');

class Client extends Model {
	
	public static function cpfExists($cpf) {
		$response = null;
		$HttpSocket = new HttpSocket();
		$uri = "http://mc437.herokuapp.com/existe/" . $cpf . ".json";
		$results = $HttpSocket->get($uri);
		$response = json_decode($results, true);
		
		return $response['existe'] == 1;		 	
	}
	
	public static function getCep($cpf) {
		$response = null;
		
		$HttpSocket = new HttpSocket();
		$uri = "http://mc437.herokuapp.com/existe/" . $cpf . ".json";
		$results = $HttpSocket->get($uri);
		$response = json_decode($results, true);
		
		if($response['existe'] == 1){
			$uri = "http://mc437.herokuapp.com/cep/" . $cpf . ".json";
			$results = $HttpSocket->get($uri);
			$response = json_decode($results, true);		 	
		}
		
		return $response;
	}
	
	
}