<?php
App::uses('AppController', 'Controller');
/**
 * ApiController
 */
class ApiController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function index() {
		$this->loadModel('Retailer');
		$response = $this->Retailer->find('all', array(
			'recursive' => 1
		));
		$this->response->header('Access-Control-Allow-Origin', '*');
		$this->response->type('application/json');
        $this->response->body(json_encode($response));
        return $this->response->send();
	}
}
