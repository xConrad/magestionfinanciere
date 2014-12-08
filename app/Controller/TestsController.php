 <?php
class TestsController extends AppController {

  public function index() {
  $bills = $this->getBill();
  $categories = $this->getCategory();
  $users = $this->getUser();
  $this->set(compact('categories', 'bills','users'));
  
  $billsAdd = $this->addBills();
  $categoriesAdd = $this->addCategories();
  $weekyearGet = $this->getWeekyear();
  $this->set(compact('billsAdd', 'categoriesAdd', 'weekyearGet'));
  
  $nbUsers = $this->getNbUsers();
  $resultAddUser = $this->TestAddUser();
  $resultEditUser = $this->TestEditUser();
  $this->set(compact('nbUsers', 'resultAddUser', 'resultEditUser'));
  }
  
  function getBill(){
  $this->loadModel('Bill');
        $bills = $this->Bill->findAllByUserId($this->Session->read('Auth.User.id'));
        return $bills;
  }
  
   function getCategory(){
   $this->loadModel('Category');
   $categories = $this->Category->findAllByUserId($this->Session->read('Auth.User.id'));
   return $categories;
  }
  
   function getUser(){
   $this->loadModel('User');
   $users = $this->User->find('all');
   return $users;
  }
  	public function addBills() {
		$this->loadModel('Bill');
		$data = array('Bill' => array(
			'category_id' => '1',
			'user_id' => '1',
			'title' => 'Test',
			'date' => '2014-01-01',
			'cost' => '200'));
		$this->Bill->save($data);
		$result = $this->Bill->findByTitle('Test');
		$this->Bill->delete();
		return $result;
	}
	
	public function addCategories() {
		$this->loadModel('Category');
		$data = array('Category' => array(
			'title' => 'TestMaisons',
			'user_id' => '1',
			'price' => '250',
			'weekyear' => '4414'));
		$this->Category->save($data);	
		$result = $this->Category->findByTitle('TestMaisons');
		$this->Category->delete();
		return $result;
	}
	
	public function getWeekyear() {
		$this->loadModel('Category');
		$result = $this->Category->findByWeekyear('4514');
		return $result;
	}
	
		function getNbUsers(){
		$this->loadModel('User');
		$nbUsers = $this->User->find('count');
		return $nbUsers;
	}
	
	function TestAddUser(){
		$this->loadModel('User');
		$result = false;
		$nbUsers = $this->getNbUsers();
		$data = array('user' => array(
						'username' => 'TestingADD',
						'password' => '123',
						'email' => 'test@test882.test'));
		$this->User->save($data);
		
		$nbUsersAfter = $this->User->find('count');
		$this->User->delete();
		
		(($nbUsers + 1) == $nbUsersAfter)? $result = true : $result = false;
		
		return $result;
	}
	
	function TestEditUser(){
		$this->loadModel('User');
		$result = false;
		$data = array('user' => array(
						'username' => 'TestingEdit',
						'password' => '123',
						'email' => 'test@test2.test'));
		$this->User->save($data);
		
		$this->User->read(null, 1);
		$this->User->set('username', 'UsernameModifier');
		$this->User->save();

		$name = $this->User->field('username');
		$this->User->delete();
		
		($name == 'UsernameModifier')? $result = true : $result = false;
	
		return $result;
	}
  
 }