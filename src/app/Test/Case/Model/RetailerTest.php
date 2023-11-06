<?php
App::uses('Retailer', 'Model');

/**
 * Retailer Test Case
 */
class RetailerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.retailer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Retailer = ClassRegistry::init('Retailer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Retailer);

		parent::tearDown();
	}

}
