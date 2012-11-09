<?php
class SoapsController extends AppController {


	function index() {
		$this->set('soap', $this->Soap->getEndereco());		
	}
}
?>