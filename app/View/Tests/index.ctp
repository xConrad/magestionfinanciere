<h1>Test unitaire</h1>
</br></br>
__________________________________________________
<h4>#1 Test sur le nombre de bills</h4>
<?php 
 $nombreBill = count($bills);
 echo ($nombreBill == 3)? 'Succes' : 'Fail';
?>
</br></br>
<h4>#2 Test sur le cout total de bills</h4>
<?php
 $total = 0;
 foreach ($bills as $bill):         
  $total += $bill['Bill']['cost'];
 endforeach; 
 echo ($total == 1332)? 'Succes' : 'Fail';
?>
</br></br>
<h4>#3 Test sur le nombre de categories</h4>
<?php 
 $nombreCategory = count($categories);
    echo ($nombreCategory == 3)? 'Succes' : 'Fail';
?>
</br>
__________________________________________________
</br></br>
<h4>#4 Test sur Category delete</h4>
<?php
 $bool = false;
 foreach ($categories as $category):         
  if($category['Category']['weekyear'] == 5514)
   $bool = true;
 endforeach; 
 
 echo ($bool)? 'Fail' : 'Succes';
?>
</br></br>
<h4>#5 Test sur Bill delete</h4>
<?php
 $bool = false;
 foreach ($bills as $bill):         
  if($bill['Bill']['id'] == 4)
   $bool = true;
 endforeach; 
 
 echo ($bool)? 'Fail' : 'Succes';
?>
<h4>#6 Test sur User delete</h4>
<?php
 $bool = false;
 foreach ($users as $user):         
  if($user['User']['id'] == 5)
   $bool = true;
 endforeach; 
 
 echo ($bool)? 'Fail' : 'Succes';
?>
</br>
__________________________________________________
</br></br>
<h4>#7 Test ajouter une facture</h4>
<?php
	echo ($billsAdd)? 'Succ&#232s' : 'Fail';
?>
</br>
</br>
<h4>#8 Test ajouter une cat&#233gorie</h4>
<?php
	echo ($categoriesAdd)? 'Succ&#232s' : 'Fail';
?>
</br>
</br>
<h4>#9 Test get weekyear</h4>
<?php
	echo ($weekyearGet)? 'Succ&#232s' : 'Fail';
?>
</br>
__________________________________________________
</br></br>
<h4>#10 Test Pour savoir le nombre d'utilisateur dans la base de donnée.</h4>
	<?php 
		echo '<br />';
		echo ($nbUsers == 4)? 'Succès' : 'Fail';
		echo '<br /><br />';
		echo '<h4>Fin du test.</h4>';
	?>
</br>
</br>
<h4>#11 Test Pour savoir si un utilisateur est ajouté.</h4>
	<?php 
		echo '<br />';
		echo ($resultAddUser)? 'Succès' : 'Fail';
		echo '<br /><br />';
		echo '<h4>Fin du test.</h4>';
	?>
</br>
</br>
<h4>#12 Test Pour savoir si le Edit de l\'utilisateur fonctionne.</h4>
	<?php 
		echo '<br />';
		echo ($resultEditUser)? 'Succès' : 'Fail';
		echo '<br /><br />';
		echo '<h4>Fin du test.</h4>';
	?>
</br>
__________________________________________________