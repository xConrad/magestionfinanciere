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
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                            
                            
                             <?php echo 'Nombre de facture trouvé :  ' . count($bills); 
                                $total = 0;
                                ?>
                            </br>
			<thead>
				<tr>
					<th>title</th>
					<th>date</th>
					<th>cost</th>
				</tr>
			</thead>
			<tbody>
                            
                       
                            
			<?php foreach ($bills as $bill):  ?>
                            
				<?php if ($bill['Bill']['user_id'] == $this->Session->read('Auth.User.id')) { ?>
				<tr>
					<td><?php echo h($bill['Bill']['title']); ?>&nbsp;</td>
					<td><?php echo h($bill['Bill']['date']); ?>&nbsp;</td>
					<td><?php echo h($bill['Bill']['cost']); ?>&nbsp;</td>
				</tr>
                                <?php $total += $bill['Bill']['cost']?>
				<?php } ?>
			<?php endforeach; ?><!-- endforeach de bills -->
			</tbody>
			</table>
                       

		</tbody>
		</table>
                
                <?php echo 'Le total des factures est :  ' . $total . '$'; ?>
</div>

</br></br></br></br>
<button onclick="printContent('div1')" class="btn btn-large btn-primary">Imprimer</button>