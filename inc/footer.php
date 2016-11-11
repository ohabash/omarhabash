</div><!-- /st-container (in header)-->		


		<script src="assets/js/ng-controller.js"></script>
    	<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/classie.js"></script>
		<script src="assets/js/sidebarEffects.js"></script>
		<script src="assets/js/slick.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r71/three.min.js"></script> -->
		<!-- <script src="assets/js/smoke.js"></script> -->
		<!-- <script src="assets/js/hidecursor.js"></script> -->
		<script src="assets/js/modernizr.custom.js"></script>
		<script src="assets/js/stepsForm.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/wizard_contact.js"></script>
		<script>
		// fullscreen mode
		function launchIntoFullscreen(element) {
			if(element.requestFullscreen) {
			element.requestFullscreen();
			} else if(element.mozRequestFullScreen) {
			element.mozRequestFullScreen();
			} else if(element.webkitRequestFullscreen) {
			element.webkitRequestFullscreen();
			} else if(element.msRequestFullscreen) {
			element.msRequestFullscreen();
			}
		    if(localStorage.getItem('popState') != 'shown'){
				addAlert('Fullscreen mode enabled for a better experience.');
		        localStorage.setItem('popState','shown')
		    }

		}
		launchIntoFullscreen(document.documentElement);
		launchIntoFullscreen(document.getElementById("document"));
		</script>


	</body>
</html>