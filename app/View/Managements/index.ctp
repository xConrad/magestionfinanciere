<?php foreach ($categories as $category): ?>

	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
	<header>Category</header>
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Username</th>
			<th>Price</th>
			<th>WeekYear</th>
		</tr>
	</thead>
	<tbody>
	
	<tr>
		<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['title']); ?>&nbsp;</td>
		<td><?php echo h($category['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['price']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['weekyear']); ?>&nbsp;</td>
	</tr>

	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
	<header>Bill</header>
	<thead>
		<tr>
			<th>Id</th>
			<th>title</th>
			<th>date</th>
			<th>cost</th>
		</tr>
	</thead>
	<tbody>

	<?php foreach ($bills as $bill): ?>
		<?php if($bill['Bill']['category_id'] == $category['Category']['id']){ ?>
		<tr>
			<td><?php echo h($bill['Bill']['id']); ?>&nbsp;</td>
			<td><?php echo h($bill['Bill']['title']); ?>&nbsp;</td>
			<td><?php echo h($bill['Bill']['date']); ?>&nbsp;</td>
			<td><?php echo h($bill['Bill']['cost']); ?>&nbsp;</td>
		</tr>
		<?php } ?>
	<?php endforeach; ?><!-- endforeach de bills -->
	</tbody>
	</table>

<?php endforeach; ?> <!-- endforeach de categories -->
</tbody>
</table>