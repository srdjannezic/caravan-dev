	<?php
		// RANDOM IMAGES
		$landing_image = perch_content_custom( 'Lead images', [
			'sort'					=> 'image',
			'sort-order'		=> 'RAND',
			'skip-template'	=> true,
			'raw'						=> true,
			'count'					=> 1
		] );
		$about_image = perch_content_custom( 'About images', [
			'sort'					=> 'image',
			'sort-order'		=> 'RAND',
			'skip-template'	=> true,
			'raw'						=> true,
			'count'					=> 1
		] );
				
	?>

	<nav class="navbar navbar-fixed-top navbar-light navbar-transparent">
		<a class="navbar-brand scroll" href="#intro"><?php perch_layout_var( 'title' ); ?></a>
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item"><a href="#about" class="nav-link scroll" data-offset="0">About</a></li>
			<li class="nav-item"><a href="#reservations" class="nav-link scroll">Reservations</a></li>
			<li class="nav-item"><a href="#menus" class="nav-link scroll">Menus</a></li>
			<li class="nav-item"><a href="#shop" class="nav-link scroll">Shop</a></li>
			<li class="nav-item"><a href="./" class="nav-link link-locations">All Locations</a></li>
		</ul>
	</nav>

	<section class="full-height section-intro" id="intro" style="background-image:url(<?= $landing_image[0]['image']['_default']; ?>);">
		<header>
			<h1><span class="<?php perch_layout_var( 'slug' ); ?>"><?php perch_layout_var( 'title' ); ?></span></h1>
		</header>
		<a class="link-to-book scroll" href="#reservations">Book a table</a>
		<a href="./" class="link-locations link-locations-mobile"><i class="fa fa-map-marker"></i> All Locations</a>
		<a class="link-to-next scroll" href="#about" data-offset="0"><span class="fa-stack"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-angle-down fa-stack-1x"></i></span></a>
	</section>

	<?php perch_content( 'Announcement' ); ?>

	<section class="section-about" id="about">
		<article>
			<?php perch_content( 'Introduction' ); ?>
		</article>			
	</section>

	<?php perch_content_custom( 'Image Carousel', [ 'sort' => 'image', 'sort-order' => 'RAND' ] ); ?>

	<section class="section-reservations" id="reservations">
		<article class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-4 text-xs-left">
					<h3>Make a booking</h3>
					<?php if ( perch_layout_has( 'dmn-id' ) ) : ?>
						<div class="widget-designmynight">
							<script src="//partners.designmynight.com/pf/js?venue_id=<?php perch_layout_var( 'dmn-id' ); ?>"></script>
							<script>
								DMN.val('stylesheet', 'book');
								DMN.val('type', 'Dinner');
								DMN.val('num_people', 2);
								DMN.val('time', '19:00');
								var tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
								DMN.val('date', tomorrow);
								DMN.hideInput('duration');
							</script>
						</div>
					<?php elseif ( perch_layout_has( 'resdiary-id' ) ) : ?>
						<script type="text/javascript" src="https://booking.resdiary.com/bundles/jquery.js"></script>						
						<script type="text/javascript">
						$(function() {
							var widgetFrame = $("#rd-widget-frame");
							widgetFrame.load("https://booking.resdiary.com/widget/Mini/Portrait/<?php perch_layout_var( 'resdiary-id' ); ?>?includeJquery=false");
						});
						</script>
						<div id="rd-widget-frame" style="max-width: 310px; margin: 0 30px 0 0;"></div>
					<?php elseif ( perch_layout_has( 'opentable-id' ) ) : ?>
						<div class="widget-opentable">
							<script type="text/javascript" src="//www.opentable.co.uk/widget/reservation/loader?rid=<?php perch_layout_var( 'opentable-id' ); ?>&type=standard&theme=standard&iframe=true&overlay=false&domain=couk&lang=en-GB"></script>
						</div>
					<?php endif; ?>
					<p class="m-t-1"><?php perch_content( 'Booking note' ); ?></p>
				</div>
				<div class="col-xs-12 col-md-4 text-xs-left">
					<h3>Opening times</h3>
					<?php perch_content( 'Opening times' ); ?>
				</div>
				<div class="col-xs-12 col-md-4 text-xs-left">
					<h3>Contact</h3>
					<?php perch_content( 'Contact' ); ?>
				</div>
			</div>
		</article>
		<div class="note">
			<?php perch_content( 'Reservations note' ); ?>
		</div>
	</section>

	<section class="not-quite-full-height section-about-intro"><img data-src="<?= $about_image[0]['image']['_default']; ?>" class="bg" alt="<?= $about_image[0]['alt']; ?>"></section>

	<section class="section-menus" id="menus">
		<article>
			<?php perch_content( 'Menu PDFs' ); ?>
		</article>
		<div class="note">
			<?php perch_content( 'Menu note' ); ?>
		</div>
	</section>
	<section class="not-quite-full-height section-shop clearfix" id="shop">
		<?php perch_content( 'Shop section' ); ?>
	</section>
	
	<?php perch_content( 'Popup' ); ?>
