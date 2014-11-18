<div>
		
		<div>
		<?php

			echo $this->Form->create(false, array('url' => array('controller' => 'Managements', 'action' => 'sendDate')));
			echo $this->Form->year('year', 2000, date("Y") + 10, array('class' => 'form-control', 'default' => date("Y"), 'empty' => false));
			echo $this->Form->month('month', array('class' => 'form-control', 'default' => date("m"), 'empty' => false));
			echo $this->Form->submit('Go',array('class' => 'btn btn-large btn-primary'));
			echo $this->Form->end();
			
			echo '<hr />';
			
			if($this->Session->check('week')){
				$week = array();
				$week['0'] = $this->Session->read('week1');
				$week['1'] = $this->Session->read('week2');
				$week['2'] = $this->Session->read('week3');
				$week['3'] = $this->Session->read('week4');
				$week['4'] = $this->Session->read('week5');
				
				$year = $this->Session->read('year');
				$month = $this->Session->read('month');
				
				$date = array();
				$date['0'] = 1;
				$date['1'] = 8;
				$date['2'] = 15;
				$date['3'] = 22;
				$date['4'] = 29;
				
				$yearNumber = str_split($year, 2);
				
				for($i = 0; $i <= 4; $i ++){
				
					$weekNumber = date("W", strtotime($year . '-' . $month . '-' . $date[$i]));
					$weekyear = $weekNumber . $yearNumber[1];
					echo $this->Html->link(__(implode(' to ', $week[$i])), array('controller' => 'Managements', 'action' => 'index', $weekyear));
					echo '<hr />';
					
				}
			}
		?>
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->

</div><!-- /#page-container .row-fluid -->