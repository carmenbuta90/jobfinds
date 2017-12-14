<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('kickstart');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery');
		echo $this->Html->script('kickstart');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<div class="grid" id="container">
	<header>
		<div class="col_4 column">
			<h1><a href="<?php echo $this->webroot;?>"><strong>Job</strong>Finds</a></h1>
		</div>
		<div class="col_6 column right welcome" >
			<?php if(AuthComponent::user('id')):?>
			<h6>Welcome <strong><?php echo $userData['username'];?>!</strong></h6>
			<a href ="<?php echo $this->webroot;?>users/logout">Logout</a>
			<?php endif;?>
		</div>
		<form id="add_job_link" action="<?php echo $this->webroot;?>jobs/add">
			<div class="col_2 column right">
				<button class="large green "><i class="icon-plus"></i>Add Job</button>
			</div>
		</form>
	</header>
	<div class="col_12 column">
		<!-- Menu Horizontal -->
		<ul class="menu">
		<li <?php echo ($this->here == '/jobfinds/' || $this->here == '/jobfinds/jobs') ? 'class="current"' : '' ?> ><a href="<?php echo $this->webroot;?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
		<li <?php echo ($this->here == '/jobfinds/jobs/browse') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot;?>jobs/browse"><i class="fa fa-search" aria-hidden="true"></i>Browse Jobs</a></li>
		<li <?php echo ($this->here == '/jobfinds/users/register') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot;?>users/register"><i class="fa fa-user" aria-hidden="true"></i></i> Register</a>
		<li <?php echo ($this->here == '/jobfinds/users/login') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot;?>users/login"><i class="fa fa-key" aria-hidden="true"></i>Login</a>
		</ul>
	</div>
	

	<div class="col_12 column">
		<?php echo $this->Session->flash();?>
		<?php echo $this->fetch('content');?>
	</div>
	<div class="clearfix"></div>
	<footer><p>Copyright @copy; 2014, Jobfinds All rights reserved</p></footer>
</div> <!-- End Grid -->
</body>
</html>
