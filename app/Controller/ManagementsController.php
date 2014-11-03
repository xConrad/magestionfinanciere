<?php
App::uses('AppController', 'Controller');

class ManagementsController extends AppController {
	
	public $components = array('Paginator', 'Session');
	
	public function index($weekyear) {
		$this->loadModel('Category');
		$this->loadModel('Bill');
		if($weekyear == null){
			$this->Session->setFlash(__('Week invalide'), 'flash/success');
		} else {
			$categories = $this->Category->findAllByWeekyear($weekyear);
			$idCat = array();
			$i = 0;
			foreach ($categories as $category)
			{
				$idCat[$i] = $category['Category']['id'];
				$i++;
			}
			$bills = $this->Bill->findAllByCategory_id($idCat);
		}
		$this->set(compact('categories', 'bills'));
	}
	
	public function home() {
	}
}