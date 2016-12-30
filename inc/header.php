<!DOCTYPE html>
<html lang="en" class="no-js" ng-app="OmarHabash">
	<head>

		<!-- meta -->
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Omar Habash</title>
		<base href="/"/>
		<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
		<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="assets/img/favicon.gif">

		<!-- DEV MODE CACHE -->
		<meta http-equiv="Cache-Control" content="no-cache" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />

		<style>
		.logo-contain {z-index: 9999;}
		div#body {
		    position: fixed;
		    z-index: 9999;
		    right: 0;
		}
		</style>
		
		<!-- styles -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/dist/css/style.css" rel="stylesheet">
		<link href="assets/dist/css/bright.css" id="styleToggle" rel="stylesheet">
		<link href="assets/dist/css/flat.css" id="styleToggle" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Unica+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

		
		<!-- scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/rainyday.js"></script>
		<script src="assets/js/terminal.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-route.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.5/angular-animate.js"></script>
		<script src="assets/js/ng-app.js"></script>
		<!-- <script src="assets/js/ng-controller.js"></script>
		<script src="assets/js/ng-projectsCtrl.js"></script> -->
		<script src="assets/js/modernizr.custom.js"></script>
		<!-- <span ng-show="item.checked">(will be deleted)</span> -->


		
	</head>



	<body onload="startRain()" onclick="launchIntoFullscreen(document.documentElement);">

		<!-- terminal notices -->
		<div id="terminal" class="hide-on-mobile"></div>

		<!-- #help-menu -->
		<div id="help-menu" class="card-dark">
			<div class="content">
		  		<h1>this is a dark card</h1>
			</div>
		</div>


		<div id="st-container" class="st-effect-11 st-container">

		<div class='title0 dr9'>
			<strong>Omar</strong>Habash
			<span class="currentRouteName"></span>
		</div>






	<!-- Tone1 -->
	<audio id="sound" volume="0.5" preload="auto" controls style="position: absolute; opacity: 0;">
	  <source src="assets/sound/tone.wav" type="audio/wav">
	  <!-- <source src="assets/sound/morse.aiff" type="audio/wav"> -->
	  <!-- <source src="https://www.freesound.org/data/previews/193/193971_2977451-lq.ogg" type="audio/ogg"> -->
	</audio>

	<!-- Tone2 -->
	<audio id="tink" volume="0.5" preload="auto" controls style="position: absolute; opacity: 0;">
	  <source src="assets/sound/tink.aiff" type="audio/wav">
	</audio>


	
	






