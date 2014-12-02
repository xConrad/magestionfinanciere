
<div id="page-container" class="row">

<div id="sidebar" class="col-sm-3">
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Edit Category'); ?></h2>

		<div class="categories form">
		
			<?php $uid = $this->Session->read('Auth.User.id'); ?>
		
			<?php echo $this->Form->create('Category', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('title', array('class' => 'form-control', 'style' => 'width:400px; height:34px;')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->hidden('user_id', array('class' => 'form-control', 'default' => $uid)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('price', array('class' => 'form-control', 'style' => 'width:400px; height:34px;')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->hidden('weekyear', array('class' => 'form-control', 'default' => $week)); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
			</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->