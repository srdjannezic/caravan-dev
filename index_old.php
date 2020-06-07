<?php
	include( 'perch/runtime.php' );
	PerchSystem::force_ssl();
	perch_content_create( 'Landing images', [
		'template'		=> 'image.html',
		'multiple'		=> true,
		'edit-mode'		=> 'singlepage',
		'searchable'	=> false
	] );
	perch_layout( 'global.header', [
		'body-class'	=> 'landing'	
	] );
	
	$landing_image = perch_content_custom( 'Landing images', [
		'sort'					=> 'image',
		'sort-order'		=> 'RAND',
		'skip-template'	=> true,
		'raw'						=> true,
		'count'					=> 1
	] );	
?>

	<section class="full-height section-intro" id="intro" style="background-image:url(<?= $landing_image[0]['image']['_default']; ?>);">
		<h1 class="title">CARAVAN</h1>
		<header>
			<h2><a href="./kings-cross.html" class="kings-cross">King's Cross</a></h2>
			<h2><a href="./exmouth-market.html" class="exmouth-market">Exmouth Market</a></h2>
			<h2><a href="./bankside.html" class="bankside">Bankside</a></h2>
			<h2><a href="./city.html" class="city">City</a></h2>			
			<h2><a href="./fitzrovia.html" class="fitzrovia">Fitzrovia</a></h2>
			<?php /*<h2><span class="exmouth-market">Great Portland St.</span> <small>(Coming soon)</small></a></h2>*/ ?>
		</header>
		<a class="link-to-next scroll" href="#promos"><span class="fa-stack"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-angle-down fa-stack-1x"></i></span></a>
	</section>
	<section class="full-width" id="promos">
		<?php perch_content( 'Promos' ); ?>
	</section>

<?php perch_layout( 'global.footer' ); ?>