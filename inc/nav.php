<!-- nav -->
<nav class="st-menu st-effect-11 text-center" id="menu-11">
	<!-- <img src="assets/img/small-logo.png" class="img-responsive" alt=""> -->
	<!-- Style Checkbox -->
	<!-- <div id="body" class="hide-on-mobile">
		<input type="checkbox" id="styleTrigger"> Bright
	</div> -->
	<!-- // Style Checkbox -->
	<a class="logo_bg" href="javascript:void(0)"onmouseover="document.getElementById('myaudio2').play()">
		<object>
			<embed src="assets/img/small-logo.svg" class="" width="80%" height="18%">
		</object>
	</a>

	<ul ng-controller="ListenController" id="main-nav">
		
		<li class="focused2">
			<a ng-class="{ active0: PAGE('/') }"  href="/" class="icon icon-data" href="#">
				<?php require "icons/home.php"; ?>
				<p>Home</p>
			</a>
		</li>

		
		<li>
			<a ng-class="{ active0: PAGE('/mission') }"  href="/mission" class="icon icon-location" href="#">
				<?php require "icons/mission.php"; ?>
				<p>mission</p>
			</a>
		</li>

		
		<li>
			<a ng-class="{ active0: PAGE('/projects') }"  href="/projects" class="icon icon-study" href="#">
				<?php require "icons/projects.php"; ?>
				<p>projects</p>
			</a>
		</li>

		
		<li>
			<a ng-class="{ active0: PAGE('/skills') }"  href="/skills" class="icon icon-photo" href="#">
				<?php require "icons/skills.php"; ?>
				<p>tools</p>
			</a>
		</li>

		
		<!-- <li>
			<a ng-class="{ active0: PAGE('/experience') }"  href="/experience" class="icon icon-wallet" href="#">
				<?php require "icons/home.php"; ?>
				<p>experience</p>
			</a>
		</li>

		
		<li>
			<a ng-class="{ active0: PAGE('/downloads') }"  href="/downloads" class="icon icon-wallet" href="#">
				<?php require "icons/home.php"; ?>
				<p>downloads</p>
			</a>
		</li> -->

		
		<li>
			<a ng-class="{ active0: PAGE('/contact') }"  href="/contact" class="icon icon-wallet" href="#">
				<?php require "icons/contact.php"; ?>
				<p>contact</p>
			</a>
		</li>

		
		<!-- <li>
			<a ng-class="{ active0: PAGE('/profile') }"  href="/profile" class="icon icon-wallet" href="#">
				<?php require "icons/home.php"; ?>
				<p>profile</p>
			</a>
		</li> -->

	</ul>
</nav>