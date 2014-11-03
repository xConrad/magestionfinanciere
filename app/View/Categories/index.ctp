<script src='app/webroot/js/javas.js'></script>
<div id="page-container" class="row">


	
	<div id="page-content" class="col-sm-9">

		<div class="categories index">
		
			<h2><?php echo __('Categories'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('title'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th><?php echo $this->Paginator->sort('deleted'); ?></th>
							<th><?php echo $this->Paginator->sort('user_id'); ?></th>
							<th><?php echo $this->Paginator->sort('price'); ?></th>
							<th><?php echo $this->Paginator->sort('week'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($categories as $category): ?>
	<tr>
		<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['title']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['created']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['modified']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['deleted']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($category['User']['username'], array('controller' => 'users', 'action' => 'view', $category['User']['id'])); ?>
		</td>
		<td><?php echo h($category['Category']['price']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['week']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->
	<?php
	$annee = 'Year';
	?>
		<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<ul class="nav nav-pills nav-stacked">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><p id="Ann">Year</p>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
                       <?php
							for ($i = 2014; $i <= 2030; $i++) {
								echo '<li class="list-group-item">'; 
										echo '<a href="#" onClick="OnChangeYear(' . $i . ')">' . $i . '</a>';
								echo '</li>';
							}
					   ?>
						</ul>
					</li>
					<?php
						
					?>
				
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><p id="Mot">Month</p>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						<?php 
						 $array = array(
							'Janurary',
							'February',
							'March',
							'April',
							'May',
							'June',
							'July',
							'August',
							'September',
							'October',
							'November',
							'December'
						);
						
						 for ($i=0; $i<count($array); $i++) {
								echo '<li class="list-group-item">'; 
										echo '<a href="#" onClick="OnChangeMonth(' . $i . ')">' . $array[$i] . '</a>';
								echo '</li>';
						}
						
						?>
						</ul>
					</li>
						<?php
							$day = getLundiDimanche();
						?>
						
						
							<li class="list-group-item"><?php echo $this->Html->link(__('Week 1'), array(), array('class' => '')); ?> </li>
							<li class="list-group-item"><?php echo $this->Html->link(__('Week 2'), array(), array('class' => '')); ?> </li>
							<li class="list-group-item"><?php echo $this->Html->link(__('Week 3'), array(), array('class' => '')); ?> </li>
							<li class="list-group-item"><?php echo $this->Html->link(__('Week 4'), array(), array('class' => '')); ?> </li>
					
			</ul>
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->

</div><!-- /#page-container .row-fluid -->


<?php 
function getLundiDimanche()
{
							$m = strtotime('28-01-2015');  

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

							//echo '<br>Start: '. $week_start;  

							//echo '<br>End: '. $week_end;
}

?>