<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>


<div id="div1">
<?php 
    echo 'Nombre de Categorie trouver :  ' . count($categories);
    ?>

    </br>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Username</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>

                            <?php
foreach ($categories as $category): ?>
	<?php if ($category['Category']['user_id'] == $this->Session->read('Auth.User.id')) { ?>


            <tr>
                <td><?php echo h($category['Category']['title']); ?>&nbsp;</td>
                <td><?php echo h($category['User']['username']); ?>&nbsp;</td>
                <td><?php echo h($category['Category']['price']); ?>&nbsp;</td>
            </tr>


			<?php
				}
			?>
		<?php endforeach; ?> <!-- endforeach de categories -->



        </tbody>
    </table>
</div>
</br></br></br></br>
<button onclick="printContent('div1')" class="btn btn-large btn-primary">Imprimer</button>