
<div id="page-container" class="row">

<div id="page-content" class="col-sm-4">
</div><!-- /#page-content .col-sm-9 -->
	<div id="page-content" class="col-sm-4">

		<h2><?php echo __('Log in'); ?></h2>

		<div class="users form">
	
			<?php echo $this->Form->create('User', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('username', array('class' => 'form-control', 'style' => 'width:300px; height:34px;')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('password', array('class' => 'form-control', 'style' => 'width:300px; height:34px;')); ?>
					</div><!-- .form-group -->

                    <?php echo $this->Form->submit('Submit', array('controller' => 'users' , 'action' => 'login', 'class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->
<div id="page-content" class="col-sm-4">
</div><!-- /#page-content .col-sm-9 -->
</div><!-- /#page-container .row-fluid -->