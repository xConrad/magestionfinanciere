
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Bills'), array('controller' => 'bills', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Bill'), array('controller' => 'bills', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="categories view">

			<h2><?php  echo __('Category'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Deleted'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['deleted']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($category['User']['username'], array('controller' => 'users', 'action' => 'view', $category['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Price'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['price']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Week'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['week']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Bills'); ?></h3>
				
				<?php if (!empty($category['Bill'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Cost'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($category['Bill'] as $bill): ?>
		<tr>
			<td><?php echo $bill['id']; ?></td>
			<td><?php echo $bill['category_id']; ?></td>
			<td><?php echo $bill['user_id']; ?></td>
			<td><?php echo $bill['created']; ?></td>
			<td><?php echo $bill['modified']; ?></td>
			<td><?php echo $bill['deleted']; ?></td>
			<td><?php echo $bill['title']; ?></td>
			<td><?php echo $bill['date']; ?></td>
			<td><?php echo $bill['cost']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bills', 'action' => 'view', $bill['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bills', 'action' => 'edit', $bill['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bills', 'action' => 'delete', $bill['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $bill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Bill'), array('controller' => 'bills', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
