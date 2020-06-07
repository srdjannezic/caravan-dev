<?php 
 	$base_url = 'http://localhost/caravan/';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<script>document.documentElement.className += ' wf-loading';</script>
		<title><?= perch_pages_title(); ?></title>
		<script>
			WebFontConfig = {
				typekit: {
					id: 'yha2qzp'
				},
				custom: {
					families: ['TradeGothicLTStd:n1,n4'],
					urls: ['/css/fonts.css']
				}
			};
			(function(d) {
				var wf = d.createElement('script'), s = d.scripts[0];
				wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
				s.parentNode.insertBefore(wf, s);
			})(document);
		</script>
		<link rel="stylesheet" href="./css/style.css?ver=9d18cf4ca818b5088bdaaa02eaa6eb8c">
		<link rel="stylesheet" href="./css/booking.css">
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-3768266-20', 'auto');
		ga('send', 'pageview');
		</script>
		<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:904198,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		</script>
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1326734027459674'); 
		fbq('track', 'PageView');
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<?php perch_page_attributes(); ?>
	</head>
	<body class="<?php perch_layout_var( 'body-class' ); ?>">
	<noscript>
		<img height="1" width="1" src="https://www.facebook.com/tr?id=1326734027459674&ev=PageView&noscript=1"/>
	</noscript>
