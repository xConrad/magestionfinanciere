<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('MaGFinanciere', '', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
                        <li><a href="#">Monthly</a></li>
                        <li><a href="#">Report</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a></a></li><li><a></a></li>
                        <li><a></a></li><li><a></a></li>
                        <li><a></a></li><li><a></a></li>
                        <li><a></a></li><li><a></a></li>
                        <li><a></a></li><li><a></a></li>
                        <li><a></a></li><li><a></a></li>
                        <li><a></a></li><li><a></a></li>
                        <li><a></a></li><li><a></a></li>

                        
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">English</a></li>
					<li><a href="#">French</a></li>
				</ul>
			</li>
				 <li><?php echo $this->Html->Link('Register', array('controller' => 'Users', 'action' => 'add'))?></li>
				
				<?php if(!$this->Session->check('Auth.User')) {
                         ?><li><?php echo $this->Html->Link('Login', array('controller' => 'Users', 'action' => 'login'))?></li><?php
						} else {
					     ?><li><?php echo $this->Html->Link('Logout', array('controller' => 'Users', 'action' => 'logout'))?></li><?php
						}
				?>
                       
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->