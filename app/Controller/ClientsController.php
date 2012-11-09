<?php
class ClientsController extends AppController {
    public $helpers = array('Html', 'Form');
	
    public function index() {
    }

    public function view() {
    }

    public function add() {
    }
	
	public function edit($id = null) {
	}
	
	
	public function exists() { 
    	$cpf = $this->params['cpf'];
    	$this->set('cpf', $cpf );
		$this->set('exists', $this->Client->cpfExists($cpf) );
	}
	
	public function cep() {
		$cpf = $this->params['cpf'];
    	$this->set('cpf', $cpf );
		$response = $this->Client->getCep($cpf);
		if ($response != null){
			$this->set('exists', true);
			$this->set('cep', $response['cep']);
			$this->set('numero', $response['numero']);
		} else {
			
			$this->set('exists', false);
		}
	}
}