<?php
App::uses('Presente', 'Model');

/**
 * Presente Test Case
 *
 */
class PresenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.presente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Presente = ClassRegistry::init('Presente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Presente);

		parent::tearDown();
	}

}
