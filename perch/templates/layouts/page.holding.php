	<?php
		// RANDOM IMAGES
		$landing_image = perch_content_custom( 'Lead images', [
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
			<li class="nav-item"><a href="./" class="nav-link link-locations">All Locations</a></li>
		</ul>
	</nav>

	<section class="full-height section-intro" id="intro" style="background-image:url(<?= $landing_image[0]['image']['_default']; ?>);">
		<header>
			<h1><span class="<?php perch_layout_var( 'slug' ); ?>"><?php perch_layout_var( 'title' ); ?></span></h1>
		</header>
		<a href="./" class="link-locations link-locations-mobile"><i class="fa fa-map-marker"></i> All Locations</a>
		<a class="link-to-next scroll" href="#about" data-offset="0"><span class="fa-stack"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-angle-down fa-stack-1x"></i></span></a>
	</section>

	<section class="section-about" id="about" style="background-color: #e7e7e7; padding-bottom: 90px;">
		<article>
			<h2>OPENING EVENTS &amp; INVITES TO OUR SOFT LAUNCH</h2>
			<form action="https://caravanrestaurants.us12.list-manage.com/subscribe/post?u=3984548d202ac65dc46559a4a&amp;id=c94612a18e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="max-width: 280px; margin: 20px auto;">
				<div class="form-group">
					<label class="sr-only">Email address</label>
					<input type="email" class="form-control" name="EMAIL" value="" placeholder="EMAIL ADDRESS" style="border-color: #333; background-color: #e7e7e7;">
				</div>
				<button type="submit" class="btn" style="font-size: 30px; background-color: #e7e7e7;"><i class="fa fa-arrow-circle-o-right"></i><span class="sr-only">Sign up</span></button>
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3984548d202ac65dc46559a4a_c94612a18e" tabindex="-1" value=""></div>
			</form>
		</article>
	</section>
	<section class="section-about" style="background-color: #FFFFFF; padding-top: 50px; padding-bottom: 45px;">
		<article>
			<h4>ALSO LAUNCHING AT CARAVAN FITZROVIA...</h4> 
			<img src="/img/CTG@2x.jpg" class="img-fluid" alt="Caravan To Go" style="max-width: 200px; margin: 50px auto;">
			<p style="font-family:'prestige-elite-std',Georgia,'Times New Roman',Times,serif; font-size: 1rem; font-weight: bold;">Sign up to our newsletter for the full story</p>
			<form action="//caravanrestaurants.us12.list-manage.com/subscribe/post?u=3984548d202ac65dc46559a4a&amp;id=26cb94ebf5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="max-width: 280px; margin: 20px auto;">
				<div class="form-group">
					<label class="sr-only">Email address</label>
					<input type="email" class="form-control" name="EMAIL" value="" placeholder="EMAIL ADDRESS" style="border-color: #333">
				</div>
				<button type="submit" class="btn" style="font-size: 30px; background-color: white;"><i class="fa fa-arrow-circle-o-right"></i><span class="sr-only">Sign up</span></button>
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3984548d202ac65dc46559a4a_26cb94ebf5" tabindex="-1" value=""></div>
			</form>
		</article>			
	</section>

<?php/*
	<section class="not-quite-full-height section-about-intro" id="countdown" style="background-color: #FAFAFA;">
		<div class="large-countdown">
			<h2>Doors open in</h2>
		  <div class="clock-wrapper">
		    <div id="clockdiv">
		      <div>
		        <span class="days"></span>
		        <h4 class="smalltext">Days</h4>
		      </div>
		      <div>
		        <span class="hours"></span>
		        <h4 class="smalltext">Hours</h4>
		      </div>
		      <div>
		        <span class="minutes"></span>
		        <h4 class="smalltext">Minutes</h4>
		      </div>
		    </div>
		  </div>
		</div>
	</section>

	<script>
			
	  ////////// Countdown /////////////////
	  function getTimeRemaining(endtime){
	    var t = Date.parse(endtime) - Date.parse(new Date());
	    var seconds = Math.floor( (t/1000) % 60 );
	    var minutes = Math.floor( (t/1000/60) % 60 );
	    var hours = Math.floor( (t/(1000*60*60)) % 24 );
	    var days = Math.floor( t/(1000*60*60*24) );
	    return {
	      'total': t,
	      'days': days,
	      'hours': hours,
	      'minutes': minutes,
	      'seconds': seconds
	    };
	  }
	
	  function initializeClock(id){
	    var endtime = new Date(2018,6,1,7,0,0);
	    var clock = document.getElementById(id);
	    var daysSpan = clock.querySelector('.days');
	    var hoursSpan = clock.querySelector('.hours');
	    var minutesSpan = clock.querySelector('.minutes');
	    // var secondsSpan = clock.querySelector('.seconds');
	
	    function updateClock(){
	      var t = getTimeRemaining(endtime);
	
	      daysSpan.innerHTML = ('0' + t.days).slice(-2);;
	      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
	      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
	      // secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
	
	      if(t.total<=0){
	        clearInterval(timeinterval);
	      }
	    }
	
	    updateClock();
	    var timeinterval = setInterval(updateClock,1000);
	  }
	  
	  initializeClock('clockdiv');
	
	  function hideTimer(){
	    var daysSpan = $('.days');
	    var hoursSpan = $('.hours');
	    var minutesSpan = $('.minutes');
	    if (minutesSpan.html() < 0){
	      $('.large-countdown').hide();
	    }
	    if (daysSpan.html() < 0){
	      $('.large-countdown').hide();
	    }
	    if (minutesSpan.html() < 0){
	      $('.large-countdown').hide();
	    }
	  }
	  hideTimer();
	
	</script>
*/ ?>