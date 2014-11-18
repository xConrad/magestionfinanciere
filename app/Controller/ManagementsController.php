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
		$this->set(compact('categories', 'bills', 'weekyear'));
	}
	
	public function home() {
	}
	
	public function sendDate() {
		if ($this->request->is('post')) {
			$data = $this->data;
			
			$year = implode(" ", $data['year']);
			$month = implode(' ', $data['month']);
			
			$week1 = $this->getWeek($year, $month, 1);
			$week2 = $this->getWeek($year, $month, 8);
			$week3 = $this->getWeek($year, $month, 15);
			$week4 = $this->getWeek($year, $month, 22);
			$week5 = $this->getWeek($year, $month, 29);
			
			$this->Session->write('week', true);
			$this->Session->write('week1', $week1);
			$this->Session->write('week2', $week2);
			$this->Session->write('week3', $week3);
			$this->Session->write('week4', $week4);
			$this->Session->write('week5', $week5);
			
			$this->Session->write('year', $year);
			$this->Session->write('month', $month);
			
		}
		
		$this->redirect(array('controller' => 'Managements', 'action' => 'home'));
	}
	
	public function getWeek($year, $month, $day) {
		$m = strtotime($day . '-' . $month . '-' . $year);
		
		$today =   date('l', $m);
		
		$custom_date = strtotime( date('d-m-Y', $m) );   
		if ($today == 'Monday') {  
			$week_start = date("d-m-Y", $m);  
		} else {  
			$week_start = date('d-m-Y', strtotime('this week last monday', $custom_date));  
		}  

		if ($today == 'Sunday') {  
			$week_end = date("d-m-Y", $m);
		} else {  
			$week_end = date('d-m-Y', strtotime('this week next sunday', $custom_date));  
		}

		$arr = array($week_start, $week_end);
		
		return $arr;
	}

}