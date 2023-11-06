<?php
App::uses('WorkingHour', 'Model');

/**
 * WorkingHour Test Case
 */
class WorkingHourTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.working_hour',
		'app.retailes'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WorkingHour = ClassRegistry::init('WorkingHour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WorkingHour);

		parent::tearDown();
	}

}
