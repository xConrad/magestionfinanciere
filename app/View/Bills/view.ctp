
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Bill'), array('action' => 'edit', $bill['Bill']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Bill'), array('action' => 'delete', $bill['Bill']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $bill['Bill']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Bills'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Bill'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="bills view">

			<h2><?php  echo __('Bill'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($bill['Bill']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Category'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($bill['Category']['title'], array('controller' => 'categories', 'action' => 'view', $bill['Category']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($bill['User']['username'], array('controller' => 'users', 'action' => 'view', $bill['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($bill['Bill']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($bill['Bill']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Deleted'); ?></strong></td>
		<td>
			<?php echo h($bill['Bill']['deleted']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($bill['Bill']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date'); ?></strong></td>
		<td>
			<?php echo h($bill['Bill']['date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cost'); ?></strong></td>
		<td>
			<?php echo h($bill['Bill']['cost']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
