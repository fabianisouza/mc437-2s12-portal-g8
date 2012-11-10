<?php
class SoapsController extends AppController {


	function index() {
		$result = $this->Soap->getProducts();
		$this->set('soap', $result);		
	}
}
?>