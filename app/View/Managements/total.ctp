<script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
</script>

<div id="div1">
    
     <?php echo 'Nombre de category trouvé :  ' . count($categories); ?>
    </br>
    <?php echo 'Nombre de facture trouvé :  ' . count($bills); 
    $total = 0;
    ?>
    </br>
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
				</tr>
			</thead>
			<tbody>
			
			<tr>
				<td><?php echo h($category['Category']['title']); ?>&nbsp;</td>
				<td><?php echo h($category['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['price']); ?>&nbsp;</td>
			</tr>


			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
			<header>Bill</header>
			<thead>
				<tr>
					<th>title</th>
					<th>date</th>
					<th>cost</th>
				</tr>
			</thead>
			<tbody>

			<?php foreach ($bills as $bill): ?>
				<?php if($bill['Bill']['category_id'] == $category['Category']['id']){ ?>
				<tr>
					<td><?php echo h($bill['Bill']['title']); ?>&nbsp;</td>
					<td><?php echo h($bill['Bill']['date']); ?>&nbsp;</td>
					<td><?php echo h($bill['Bill']['cost']); ?>&nbsp;</td>				</tr>
                                <?php $total += $bill['Bill']['cost']?>
				<?php } ?>
                                
			<?php endforeach; ?><!-- endforeach de bills -->
			</tbody>
			</table>
			<?php
				}
			?>
		<?php endforeach; ?> <!-- endforeach de categories -->

<?php echo 'Le total des factures est :  ' . $total . '$'; ?>

		</tbody>
		</table>
</div>
</br></br></br></br></br></br>
<button onclick="printContent('div1')" class="btn btn-large btn-primary">Imprimer</button>