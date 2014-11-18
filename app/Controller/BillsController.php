<?php
App::uses('AppController', 'Controller');
/**
 * Bills Controller
 *
 * @property Bill $Bill
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BillsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bill->recursive = 0;
		$this->set('bills', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
		$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
		$this->set('bill', $this->Bill->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($weekyear = null, $cTitle = null) {
		if ($this->request->is('post')) {
			$this->Bill->create();
			if ($this->Bill->save($this->request->data)) {
				$this->Session->setFlash(__('The bill has been saved'), 'flash/success');
				$this->redirect(array('controller' => 'Managements', 'action' => 'index', $weekyear));
			} else {
				$this->Session->setFlash(__('The bill could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$categories = $this->Bill->Category->find('list');
		$users = $this->Bill->User->find('list');
		$this->set(compact('categories', 'users'));
		$this->set('caTitle', $cTitle);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Bill->id = $id;
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bill->save($this->request->data)) {
				$this->Session->setFlash(__('The bill has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bill could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
			$this->request->data = $this->Bill->find('first', $options);
		}
		$categories = $this->Bill->Category->find('list');
		$users = $this->Bill->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bill->id = $id;
			if (!$this->Bill->exists()) {
			throw new NotFoundException(__('Invalid bill'));
		}
		if ($this->Bill->delete()) {
			$this->Session->setFlash(__('Bill deleted'), 'flash/success');
			$this->redirect(array('controller' => 'Managements', 'action' => 'home'));
		}
		$this->Session->setFlash(__('Bill was not deleted'), 'flash/error');
		$this->redirect(array('controller' => 'Managements', 'action' => 'home'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Bill->recursive = 0;
		$this->set('bills', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
		$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
		$this->set('bill', $this->Bill->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Bill->create();
			if ($this->Bill->save($this->request->data)) {
				$this->Session->setFlash(__('The bill has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bill could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$categories = $this->Bill->Category->find('list');
		$users = $this->Bill->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->Bill->id = $id;
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bill->save($this->request->data)) {
				$this->Session->setFlash(__('The bill has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bill could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
			$this->request->data = $this->Bill->find('first', $options);
		}
		$categories = $this->Bill->Category->find('list');
		$users = $this->Bill->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bill->id = $id;
		if (!$this->Bill->exists()) {
			throw new NotFoundException(__('Invalid bill'));
		}
		if ($this->Bill->delete()) {
			$this->Session->setFlash(__('Bill deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bill was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
