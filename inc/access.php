			

<style>
            body {
                overflow: hidden;
                height: 100%;
                margin: 0;
                padding: 0;
            }
            img {
                width: 100%;
                height: 100%;
            }
	.no-video .video-container video,
.touch .video-container video {
  display: none;
}
.no-video .video-container .poster,
.touch .video-container .poster {
  display: block !important;
}
.video-container {
  position: relative;
  bottom: 0%;
  left: 0%;
  height: 100%;
  width: 100%;
  overflow: hidden;
  background: #000;
}
.video-container .poster img {
  width: 100%;
  bottom: 0;
  position: absolute;
}
.video-container .filter {
  z-index: 100;
  position: absolute;
  background: rgba(0, 0, 0, 0.4);
  width: 100%;
}
.video-container .title-container {
  z-index: 1000;
  position: absolute;
  top: 35%;
  width: 100%;
  text-align: center;
  color: #fff;
}
.video-container .description .inner {
  font-size: 1em;
  width: 45%;
  margin: 0 auto;
}
.video-container .link {
  position: absolute;
  bottom: 3em;
  width: 100%;
  text-align: center;
  z-index: 1001;
  font-size: 2em;
  color: #fff;
}
.video-container .link a {
  color: #fff;
}
.video-container video {
  position: absolute;
  z-index: 0;
  bottom: 0;
}
.video-container video.fillWidth {
  width: 100%;
}

audio, canvas, video {
    width: 100% !important;
    /*display: none;*/
}

.first-in-view{
	position: fixed;
    width: 100%;
    top: 0;
    bottom: 0;
    /* background: red; */
    box-shadow: inset -2px -1px 0 3px rgba(255, 255, 255, 0.25), 41px 101px 10px 148px #FFF;
    /*background: rgba(255, 255, 255, 0.15);*/
    background: rgba(0, 0, 0, 0.35) url('assets/img/white-bg.svg');
    background-size: cover;
    overflow: hidden;
}
</style>



      <!-- content push wrapper -->
      <div class="st-pusher">
        <!-- <div class="hamb" onclick="openNavi()">HamBurger</div> -->
        <!-- menu trigger -->
              <div id="st-trigger-effects" class="column gone hamb">
                <button data-effect="st-effect-11"><i class="fa fa-bars"></i></button>
              </div>
        <div class="st-content"><!-- this is the wrapper for the content -->
          <img id="background" style="opacity:0;" alt="background" src="" />
          <div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
            <div class="main clearfix">
<!-- <video autoplay loop class="fillWidth">
  <source src="assets/video/1.mp4" type="video/mp4" />Your browser  does not support the video tag. I suggest you upgrade your browser.
</video> -->


              <!-- view -->
              <div class="first-in-view skills" ng-view>
                <script>
                var scrollable = false;
                // var isRaining = true;
                // mainNavi();
                      var a = location.pathname.split("/"),a1 = a[1];
                      if(a1.length){var name = a1;}else{var name = 'dashboard';}
                      // window.theView = name;
                      $('.first-in-view').attr("id",'vw_'+name);
                      $('.currentRouteName').text(name);
                    </script>
              </div>
              <!-- // view -->


							
							<!-- menu trigger -->
							<div id="st-trigger-effects" class="column">
								<button data-effect="st-effect-11"><i class="fa fa-bars"></i></button>
							</div>


						</div><!-- /main -->
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->



