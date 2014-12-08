<?php
App::uses('CategoriesController', 'Controller');

/**
 * CategoriesController Test Case
 *
 */
class CategoriesControllerTest extends ControllerTestCase {
	public $fixtures = array(
		'app.category',
		'app.user',
		'app.bill'
	);

/**
 * Fixtures
 *
 * @var array
 */
 
	public $deleteTest;
	public $boolean;
 
	
	public function setUp(){
		$this->deleteTest = new CategoriesController(114,1);
	}
	
	public function testDelete() {
		//$this->markTestIncomplete('testDelete not implemented.');
		
		$weekyear = $this->deleteTest->getWeakyear();
		$leId = $this->deleteTest->getId();
		if($weekyear == 114 && $ $leId == 1 ){
		  $boolean = true;
		}
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */

/**
 * testAdminIndex method
 *
 * @return void
 */
	public function testAdminIndex() {
		$this->markTestIncomplete('testAdminIndex not implemented.');
	}

/**
 * testAdminView method
 *
 * @return void
 */
	public function testAdminView() {
		$this->markTestIncomplete('testAdminView not implemented.');
	}

/**
 * testAdminAdd method
 *
 * @return void
 */
	public function testAdminAdd() {
		$this->markTestIncomplete('testAdminAdd not implemented.');
	}

/**
 * testAdminEdit method
 *
 * @return void
 */
	public function testAdminEdit() {
		$this->markTestIncomplete('testAdminEdit not implemented.');
	}

/**
 * testAdminDelete method
 *
 * @return void
 */
	public function testAdminDelete() {
		$this->markTestIncomplete('testAdminDelete not implemented.');
	}

}
