<!DOCTYPE html>

<html>
	
	<head>
		<title>Countdown</title>
		<link rel="stylesheet" type="text/css" href="design.css">
		<link rel="icon" type="image/png" href="icon.PNG">
		<a href="#0"></a>
	</head>
	
	<body oncontextmenu="return false">
		<p><h1><center>
			<body onload="changeBackground();">

			<audio autoplay loop>
				<source src="music.mp3">
			
			</audio>


			<div id="header">
			</div>

			<div class="menu"></div>
			</div>

			<div id="clockdiv">
			<div class="headingup">
			Halloween Countdown by Frenggie
			</div>
			<div class="clocks">

			<div class="inner">
			<span class="days"></span>
			<div class="small">Days</div>
			</div>

			<div class="inner">
			<span class="hours"></span>
			<div class="small">Hours</div>
			</div>

			<div class="inner">
			<span class="minutes"></span>
			<div class="small">Minutes</div>
			</div>

			<div class="inner">
			<span class="seconds"></span>
			<div class="small">Seconds</div>
			</div>

			</div>
			<div class="headingdown">
			Days Left Until Halloween
			</div>

			<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
				<script> 
								function getTimeRemaining(endtime) {
					  var t = Date.parse(endtime) - Date.parse(new Date());
					  var seconds = Math.floor((t / 1000) % 60);
					  var minutes = Math.floor((t / 1000 / 60) % 60);
					  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
					  var days = Math.floor(t / (1000 * 60 * 60 * 24));
					  return {
					    'total': t,
					    'days': days,
					    'hours': hours,
					    'minutes': minutes,
					    'seconds': seconds
					  };
					}

					function initializeClock(id, endtime) {
					  var clock = document.getElementById(id);
					  var daysSpan = clock.querySelector('.days');
					  var hoursSpan = clock.querySelector('.hours');
					  var minutesSpan = clock.querySelector('.minutes');
					  var secondsSpan = clock.querySelector('.seconds');

					  function updateClock() {
					    var t = getTimeRemaining(endtime);

					    daysSpan.innerHTML = t.days;
					    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
					    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
					    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

					    if (t.total <= 0) {
					      clearInterval(timeinterval);
					    }
					  }

					  updateClock();
					  var timeinterval = setInterval(updateClock, 1000);
					}

					var deadline = '2017-10-31';
					initializeClock('clockdiv', deadline);

			</script>
		</h2></p></center>
	</body>

</html>