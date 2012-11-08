<?php
class ProductsController extends AppController {
    public $helpers = array('Html', 'Form');
	
    public function index() {
        $this->set('products', $this->Product->getAllProducts() );
    }

    public function view() {
    	$code = $this->params['code'];
    	$this->set('code', $code ); 
    	//$this->set('product', $this->Product->getProduct($code) );
    	$this->set('price', $this->Product->getProductPrice($code) );
    	$this->set('quantity', $this->Product->getProductQuantity($code) );
    }

    public function add() {
        
    }
	
	public function edit($id = null) {
	    
	}
}