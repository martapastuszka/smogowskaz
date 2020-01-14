<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="/assets/css/style_test.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700&display=swap&subset=latin-ext" rel="stylesheet">

	<title>Smogowskaz</title>

</head>

<body>

	<main>
		<div id="container">

			<div id="header">
				<div id="header-text">
					<h1>Rokicińska</h1>
					<h2><?php echo $update_utf8;?></h2>
				</div>
			<!-- 	<div id="header-icon">
					<a href="https://smogowskaz.000webhostapp.com/aqi">
            <img src="/assets/img/reload.png" alt="reload" id="reload">
          </a>



				</div> -->
			</div>

			<div id="basic-parameters">

				<div id="img">
					<!-- <img src="/assets/svg/wi-day-lightning.svg" alt="weather-icon" id="img-icon"> -->

						<img src="http://smogowskaz.000webhostapp.com/assets/svg/804n.svg" alt="weather-icon">
				</div>

				<div id="temp">

					<img src="/assets/img/celsius.png" alt="celsius" id="celsius">

					<h1>
         	 <?php echo round($temp);?> | <?php echo round($wind_factor);?>
       				</h1>

				</div>

				<div class="clr"></div>
			</div>

				<div id="caqi">

					<div id="bar">

						<div id="bar2" style="width:
              <?php if ($caqi < 100): ?>
                <?php echo round($caqi);?>%
              <?php else: ?>
                  <?php echo("100%");?>
              <?php endif; ?>
            ;"> </div>

					</div>

					<h2>CAQI</h2>
					<p><?php echo round($caqi);?></p>

				</div>


			<div id="other-parameters">

		<div class="otp">
					<h2>Wilgotność</h2>
					<p><?php echo round((float)$hum);?> %</p>
				</div>

					<div class="otp">

					<h2>Wiatr</h2>
					<p><?php echo round((float)$wind_spd * 3.6);?> km/h</p>

				</div>


<div class="otp">
					<h2>PM2,5</h2>
					<p>
	          <?php if ($pm25_per != 'N/A'): ?>
	            <?php echo round((float)$pm25_per);?> %
	          <?php endif; ?>
	        </p>
	    </div>

	    <div class="otp">

				<h2>PM10</h2>
				<p>
          <?php if ($pm10_per != 'N/A'): ?>
            <?php echo round((float)$pm10_per);?> %
          <?php endif; ?>
        </p>
</div>
        		</div>

        		<div id="clr">
        		</div>

        				<ol class="links">
				<li><a href="https://www.windy.com/?51.755,19.550,5" target="_blank"><h3>windy</h3></a></li>
				<li><a href="http://pl.blitzortung.org/live_lightning_maps.php?map=17" target="_blank"><h3>blitzortung</h3></a></li>
				<li><a href="https://radiosondy.info/" target="_blank"><h3>radiosondy</h3></a></li>
			</ol>

		</div>




<!--
			<div class="links">
				<a href="https://www.windy.com/?51.755,19.550,5" target="_blank"><h3>windy.com</h3></a>
				<a href="http://pl.blitzortung.org/live_lightning_maps.php?map=17" target="_blank"><h3>blitzortung.org</h3></a>
				<a href="https://radiosondy.info/" target="_blank"><h3>radiosondy.info</h3></a>
			</div>
 -->

	


		</div>

	</main>

</body>

</html>
