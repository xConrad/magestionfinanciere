<?php 
foreach ($categories as $category): ?>
	<?php if ($category['Category']['user_id'] == $this->Session->read('Auth.User.id')) { ?>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
			<header>Category</header>
			<thead>
				<tr>
					<th>Title</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			
			<tr>
				<td><?php echo h($category['Category']['title']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['price']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Form->postLink(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $weekyear, $category['Category']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $weekyear, $category['Category']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete %s?', $category['Category']['title'])); ?>
				</td>
			</tr>


			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>title</th>
					<th>date</th>
					<th>cost</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

			<?php $total = 0; ?>
			<?php foreach ($bills as $bill): ?>
				<?php if($bill['Bill']['category_id'] == $category['Category']['id']){ ?>
				<tr>
					<td><?php echo h($bill['Bill']['title']); ?>&nbsp;</td>
					<td><?php echo h($bill['Bill']['date']); ?>&nbsp;</td>
					<td><?php echo h($bill['Bill']['cost']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Form->postLink(__('Edit'), array('controller' => 'bills', 'action' => 'edit', $weekyear, $bill['Bill']['id'], $category['Category']['id']), array('class' => 'btn btn-default btn-xs')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bills', 'action' => 'delete', $weekyear, $bill['Bill']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete %s?', $bill['Bill']['title'])); ?>&nbsp;</td>
					</td>
				</tr>
				<?php $total += h($bill['Bill']['cost']); ?>
				<?php } ?>
			<?php endforeach; ?><!-- endforeach de bills -->
			<?php echo 'Bill  -----  Total :' . $total . '$' ;?>
			</tbody>
			</table>
			<?php echo $this->Html->Link('Add a bill', array('controller' => 'bills', 'action' => 'add', $weekyear, $category['Category']['id']), array('class' => 'btn btn-default btn-xs'))?>
			<?php
				}
			?>
			<hr />
		<?php endforeach; ?> <!-- endforeach de categories -->
		
		</tbody>
		</table>
		<?php echo $this->Html->Link('Add a category', array('controller' => 'categories', 'action' => 'add', $weekyear), array('class' => 'btn btn-default btn-xs'))?>
		
	