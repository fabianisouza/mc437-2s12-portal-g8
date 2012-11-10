<?php
App::uses('Model', 'Model');
App::uses('HttpSocket', 'Network/Http');

class Product extends Model {
	
	public static function getAllCategories(){		
		$client = new SoapClient("http://localhost:8080/ProdUNICAMPServices/services/Servicos?wsdl");
		$result = $client->getListCategoria();
		$ret = array();
		foreach ($result->return as $a){
			if ($a->supercategoria == ""){
				array_push($ret, $a->nome);
			}			
		}
		return $ret;
	}
	
	public static function getAllProducts() {
		$response = null;
		$HttpSocket = new HttpSocket();
		$results = $HttpSocket->get('http://g8:g8@mc437-g8-estoque-v2.webbyapp.com/products.json');
		$response = json_decode($results, true);
		return $response;		 	
	}
	
	public static function getProduct($code = null) {
		$response = null;
		if($code != null){
			$HttpSocket = new HttpSocket();
			$uri = 'http://g8:g8@mc437-g8-estoque-v2.webbyapp.com/products/currentInfo/' . $code . '.json';
			$result = $HttpSocket->get($uri);
			$response = json_decode($result,true);
		}
		return $response;		 	
	}
	
	public static function getProductPrice($code = null){	
		$price = 0.0;
		if($code != null){
			$HttpSocket = new HttpSocket();
			$uri = 'http://g8:g8@mc437-g8-estoque-v2.webbyapp.com/products/currentPrice/' . $code . '.json';
			$result = $HttpSocket->get($uri);
			$response = json_decode($result,true);
			if($response['status']==0){
				$price = $response['product']['price'];
			}
		}
		return $price;	
	}
	
	public static function getProductQuantity($code = null){	
		$quantity = 0;
		if($code != null){
			$HttpSocket = new HttpSocket();
			$uri = 'http://g8:g8@mc437-g8-estoque-v2.webbyapp.com/products/currentQuantity/' . $code . '.json';
			$result = $HttpSocket->get($uri);
			$response = json_decode($result,true);
			if($response['status']==0){
				$quantity = $response['product']['quantity'];
			}
		}
		return $quantity;	
	}
	
	public static function updateQuantity($code = null, $quantity = 0){		
		if($code != null && $quantity != 0){
			$HttpSocket = new HttpSocket();
			$uri = 'http://g8:g8@mc437-g8-estoque-v2.webbyapp.com/products/quantity';
			$array = array('code' => $code, 'quantity' => $quantity);
			$data = json_encode($array);
			$result = $HttpSocket->put($uri, $array);
			$response = json_decode($result,true);
			if($response['status']==0){
				$quantity = $response['product']['quantity'];
			}
		}
		return $quantity;
	}
}