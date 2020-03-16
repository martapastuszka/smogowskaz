<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="/assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700&display=swap&subset=latin-ext" rel="stylesheet">

	<title>Smogowskaz v1.0</title>

</head>

<body>

	<main>
		<div id="header">
			<div id="header-text">
				<h1><?php echo $comment;?></h1>
				<h2><?php echo iconv("ISO-8859-2", "UTF-8", strftime("%a. %m.%d  %R", $update));?></h2>
				<h2><a href="/devel/newNode">zmień lokację</a></h2>
			</div>
				<a href="https://smogowskaz.000webhostapp.com/devel"> </a>
		</div>
			

		<div id="basic-parameters">
			<div id="img">

				<?php echo $icon;?>

			</div>

			<div id="temp"> 
				<h1>
          		<?php echo $temp;?> °C | <?php echo $wind_factor;?> °C
        		</h1>
        	</div>

        	<div class="clr"></div>
        </div>

        <div id="other-parameters">
        	<div class="otp">
				<h2>Wilgotność</h2>
				<p><?php echo $hum;?> %</p>
			</div>

			<div class="otp">
				<h2>Wiatr</h2>
				<p><?php echo $wind_spd;?> km/h</p>
			</div>

			<div class="otp">
				<h2>PM2,5</h2>
				<p><?php echo $pm25_per;?> %</p>
			</div>

			<div class="otp">
				<h2>PM10</h2>
				<p><?php echo $pm10_per;?> %</p>
			</div>
		</div>

			<div class="clr"> </div>

		<div id="caqi">

			<div id="bar">

			<div id="bar2" style="width:<?php echo $caqi_width;?>;
										  background-color:<?php echo $caqi_bck;?>;">
			</div>

			</div>

			<h2>CAQI</h2>
			<p>
				<?php echo $caqi;?>
			</p>
		</div>
		
		<ol class="links">
			<li><a href="https://www.windy.com/?51.755,19.550,5" target="_blank"><h3>windy.com</h3></a></li>
			<li><a href="http://pl.blitzortung.org/live_lightning_maps.php?map=17" target="_blank"><h3>blitzortung.org</h3></a></li>
			<li><a href="https://radiosondy.info/" target="_blank"><h3>radiosondy.info</h3></a></li>
		</ol>
		
	</main>

</body>

</html>
