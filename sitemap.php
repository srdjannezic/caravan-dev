<?php
	header( 'Content-type: application/xml' );
	include( 'perch/runtime.php' );
	perch_pages_navigation( [
		'template'	=> 'sitemap.html',
		'flat'			=> true
	] );
