<?php
App::uses('Model', 'Model');
App::uses('HttpSocket', 'Network/Http');

class Category extends Model {
	
	public static function getAll(){		
		$client = new SoapClient("http://localhost:8080/ProdUNICAMPServices/services/Servicos?wsdl");
		$result = $client->getListCategoria();
		$ret = array();
		foreach ($result->return as $a){
			if ($a->supercategoria == ""){
				$ret[$a->nome] = array( "category" => $a->nome, "children" => array() ) ;
			}			
		}
		foreach ($result->return as $a){
			if ($a->supercategoria != ""){
				$ret[$a->supercategoria]["children"][] = $a->nome;
			}
		}
		return $ret;
	}
	
}