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
		$this->response->header('Access-Control-Allow-Origin', '*');
		$this->response->type('application/json');
		$response = [
			[
				'name' => 'A',
				'items' => [
					['day' => 'Mon', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Tus', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Wed', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Thu', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Fri', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Sat', 'from' => '', 'to' => '', 'dayoff' => true],
					['day' => 'Sun', 'from' => '', 'to' => '', 'dayoff' => true],
				]
			],
			[
				'name' => 'B',
				'items' => [
					['day' => 'Mon', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Tus', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Wed', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Thu', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Fri', 'from' => '8:00', 'to' => '16:00'],
					['day' => 'Sat', 'from' => '', 'to' => '', 'dayoff' => true],
					['day' => 'Sun', 'from' => '', 'to' => '', 'dayoff' => true],
				]
			],
		];
        $this->response->body(json_encode($response));
        return $this->response->send();
	}
}
