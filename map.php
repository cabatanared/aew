 <?php 
   include 'header.php';
   ?>
   <link href="assets/css/zoom.css" rel="stylesheet" />
   <style type="text/css">
     #schedule{
      width: unset;
      margin: unset;
     }
      #schedule2{
	    width: unset;
	    margin: unset;
	    position: absolute;
	    display: none;
	    z-index: 10;
     }
     .schedules{
      	margin-right: 1em;
     }
     .schedules > a{
      width: 180px;
     }
     .news{
      width: unset;
      margin: unset;
      position: relative;
      width: 100%;
      overflow: hidden;
     }
     .article{
      margin: unset
     }
     .tab{
      display: none;
     }
     .opened{
      	display: block;
      }
     .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100vh;
        max-height: 980px;
      }

      .schedules a:hover{
      background: #FECCD9;
     }

     .dl_pdf:hover{
      background: #FFCC24;
     }
     .dl_pdf {
      padding: 0.8rem 2rem;
      /*border: 1px solid #000;*/
      font-size: 12pt;
      cursor: pointer;
      margin-bottom: 0.5rem;
      font-family: 'PublicSans-Bold';
      background: #d4935d;
     }
      /*900*/
   </style>
   <a href="index.php" style="text-decoration: none;color: #2f2e2e;font-size: 10pt; margin-left: 8rem;"><i class="icofont-home"></i> Back to Home</a>
  <div class="main_content2" style="padding: 1rem;background: #FFF6CE;">
  

	<div class="row">

		<div class="article" style="margin: auto;">
	        <br>
	        <img style="max-width: 1000px;width: 100%;margin-bottom: 0.5rem" src="assets/banners/Virtual Tour.png" class="w3-container w3-center w3-animate-zoom">
	        <div class="row">
	        	<div id="schedule">
	              <div class="schedules">
	                <a id="btn-overview" class="m2" onclick="showTab('overview')">Overview of PNRI Facilities & Technical Exhibits</a>
	                <a id="btn-programme" href="https://aew.pnri.dost.gov.ph/aew/2023/tour.php">Start Tour</a>
	                <!--<a id="btn-registration" onclick="showTab('registration')">Poster Presentation</a>
                  <a id="btn-livestream" href="#">Watch the Livestream</a>-->

	              </div>
	            </div>

	            <!--<div id="schedule2">
	              <div class="schedules">
	                <a id="2btn-overview" class="m2" onclick="showTab('overview')">Event Information</a>
	                <a id="2btn-programme" onclick="showTab('programme')">Programme of Activities</a>
	                <a id="2btn-registration" onclick="showTab('registration')">Registration</a>
                  <a id="2btn-nucleart" onclick="showTab('nucleart')">NucleArt 3.0: Digital Poster Making Contest</a>
	                <a id="2btn-career_talk" onclick="showTab('career_talk')">Career Talk</a>
	                <a id="2" style="background: #135034;" href="#">Youth Panel</a>
	                <a id="2btn-discord" onclick="showTab('discord')">Discord Server</a>
	              </div>
	            </div>-->
	        	<div class="news">
	        		<div class="tab opened" id="overview" style="min-height: 100vh;max-height: 900px;">
				        <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1d7TmquV9VdsjcdwW9OuZcCqTSI3AmPdT/preview" width="640" height="480" allow="autoplay"></iframe>
				      </div>

				    <div class="tab" id="programme" style="min-height: 100vh;max-height: 900px;">
              <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1bKV7bMy2vCQqYwsHSQbnXuxh9efZHBP-/preview" width="640" height="480" allow="autoplay"></iframe>
				        <!-- <img style="max-width: 100%;object-fit: cover;" src="documents/PNYS AEW Programme_rev.png"> -->
				    </div>

		            <div class="tab" id="nucleart" style="min-height: 100vh;max-height: 900px;">
		              <a href="https://drive.google.com/file/d/1yO2hNA2C2sm_gSNUktEC0JJtXqbbAbWr/view" target="_blank" style="text-decoration: none; position:absolute; z-index:11;color: #ffffff; background: #27c77b;padding: 1em;">Registration Form</a>
		              <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1wvzT0Bfv7lF1Rnb42utVwCMFVWRAqFmK/preview"  allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
		              
		            </div>

                <div class="tab" id="career_talk" style="min-height: 100vh;max-height: 900px;">
                 
                  <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1ViRfvzVc67y1LzhmZ5vvr6hyqZUlTnI6/preview"  allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                  
                </div>

                <div class="tab" id="youth_panel" style="min-height: 100vh;max-height: 900px;">
                 
                  <iframe class="responsive-iframe" src="https://drive.google.com/file/d/16qQY7CVAXJGBgLoaJpxVJJNUdL46-5mo/preview"  allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                  
                </div>

				    <div class="tab " id="registration" style="min-height: 100vh;max-height: 900px;">
              <a class="dl_pdf"href="https://bit.ly/PNRDCregister" target="_blank" style="text-decoration: none; position:absolute; z-index:2;color: #ffffff; ">Click here to Register</a>
				      <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1KFYcaBzIzYdySsrKTFLgV1UIanb53wsa/preview" width="640" height="480" allow="autoplay"></iframe>
		            </div>

	          		<div class="tab" id="discord" style="">
	            		<iframe class="responsive-iframe" src="https://discord.com/widget?id=894414416177659905&theme=dark"  allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
	          		</div>

	            </div>
	        </div>
	    </div>
	</div>


  
   </div>
    <script type="text/javascript">
      function showTab(tab){
        $('.opened').removeClass('opened');
        $('#'+tab).addClass('opened');
        $('.m2').removeClass('m2');
        $('#btn-'+tab).addClass('m2');
      }
    </script>

   <?php 
   include 'footer.php';
   ?>

</body>
</html>