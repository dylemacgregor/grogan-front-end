<?php
$navigation_no_hero = '';
if($config['has_hero'] == true)
	$navigation_no_hero = 'no-margin-bottom border-bottom-none';


?>

<div class="container">
  <nav id = 'main-nav' class="navbar navbar-default <?php echo $navigation_no_hero; ?>">
  <div class= 'border-primary--bottom'>
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="http://grogan/wordpress/home/">
		Menu
	  </a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php /* Primary navigation */
			wp_nav_menu( array(
			'menu' => 'primary',
			'depth' => 2,
			'container' => false,
			'menu_class' => 'nav navbar-nav navbar-right',
			//Process nav menu using our custom nav walker
			'walker' => new wp_bootstrap_navwalker()
			));
		?>
	</div><!-- /.navbar-collapse -->
  </div>
  </nav>
</div><!-- /.container-fluid -->
