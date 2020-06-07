<?php
	if ( ! defined('PERCH_RUNWAY' ) )
		include( $_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php' );
	PerchSystem::force_ssl();
	perch_layout( 'global.header', [
		'body-class'	=> 'work-with-us'	
	] );
?>
		<nav class="navbar navbar-fixed-top navbar-light">
			<a class="navbar-brand" href="./"><?php perch_layout_var( 'title' ); ?></a>
			<ul class="nav navbar-nav navbar-center">
				<li class="nav-item"><a href="./work-with-us.html" class="nav-link">Join us</a></li>
				<li class="nav-item"><a href="./" class="nav-link link-locations">All Locations</a></li>
			</ul>
		</nav>

		<?php perch_content( 'Banner' ); ?>

		<section class="section-careers-job container">
			<?php perch_content( 'Content' ); ?>
		</section>

<?php perch_layout( 'global.footer' ); ?>