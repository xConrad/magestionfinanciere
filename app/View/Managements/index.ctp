<?php 
foreach ($categories as $category): ?>
	<?php if ($category['Category']['user_id'] == $this->Session->read('Auth.User.id')) { ?>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
			<header>Category</header>
			<thead>
				<tr>
					<th>Title</th>
					<th>Username</th>
					<th>Price</th>
					<th>WeekYear</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			
			<tr>
				<td><?php echo h($category['Category']['title']); ?>&nbsp;</td>
				<td><?php echo h($category['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['price']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['weekyear']); ?>&nbsp;</td>
				<td><?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $category['Category']['id'], $category['Category']['weekyear']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete %s?', $category['Category']['title'])); ?>&nbsp;</td>
			</tr>


			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
			<header>Bill</header>
			<thead>
				<tr>
					<th>title</th>
					<th>date</th>
					<th>cost</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

			<?php foreach ($bills as $bill): ?>
				<?php if($bill['Bill']['category_id'] == $category['Category']['id']){ ?>
				<tr>
					<td><?php echo h($bill['Bill']['title']); ?>&nbsp;</td>
					<td><?php echo h($bill['Bill']['date']); ?>&nbsp;</td>
					<td><?php echo h($bill['Bill']['cost']); ?>&nbsp;</td>
					<td><?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bills', 'action' => 'delete', $bill['Bill']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete %s?', $bill['Bill']['title'])); ?>&nbsp;</td>
				</tr>
				<?php } ?>
			<?php endforeach; ?><!-- endforeach de bills -->
			</tbody>
			</table>
			<li><?php echo $this->Html->Link('Add a bill', array('controller' => 'bills', 'action' => 'add', $category['Category']['weekyear'], $category['Category']['id']))?></li>
			<?php
				}
			?>
		<?php endforeach; ?> <!-- endforeach de categories -->
		<li><?php echo $this->Html->Link('Add a category', array('controller' => 'categories', 'action' => 'add', $weekyear))?></li>
		</tbody>
		</table>
	