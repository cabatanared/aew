 <?php 
   include 'header.php';
   ?>
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
      	margin-right: 2em;
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
      /*900*/
   </style>
   <a href="index.php" style="text-decoration: none;color: #2f2e2e;font-size: 10pt; margin-left: 8rem;"><i class="icofont-home"></i> Back to Home</a>
<div class="main_content">
  

	<div class="row">

		<div class="article" style="margin: auto;">
	        <br>
	        <img style="max-width: 1000px;width: 85vw;" src="documents/PNYS Header.png">
	        <div class="row">
	        	<div id="schedule">
	              <div class="schedules">
	                <a id="btn-overview" class="m2" onclick="showTab('overview')">Event Information</a>
	                <a id="btn-programme" onclick="showTab('programme')">Programme of Activities</a>
	                <a id="btn-registration" onclick="showTab('registration')">Registration</a>
                  <a id="btn-nucleart" onclick="showTab('nucleart')">NucleArt 3.0: Digital Poster Making Contest</a>
	                <a id="btn-career_talk" onclick="showTab('career_talk')">Career Talk</a>
	                <a id="btn-youth_panel" onclick="showTab('youth_panel')">Youth Panel</a>
	                <a id="btn-discord" onclick="showTab('discord')">Discord Server</a>
	              </div>
	            </div>

	            <div id="schedule2">
	              <div class="schedules">
	                <a id="2btn-overview" class="m2" onclick="showTab('overview')">Event Information</a>
	                <a id="2btn-programme" onclick="showTab('programme')">Programme of Activities</a>
	                <a id="2btn-registration" onclick="showTab('registration')">Registration</a>
                  <a id="2btn-nucleart" onclick="showTab('nucleart')">NucleArt 3.0: Digital Poster Making Contest</a>
	                <a id="2btn-career_talk" onclick="showTab('career_talk')">Career Talk</a>
	                <a id="2" style="background: #135034;" href="#">Youth Panel</a>
	                <a id="2btn-discord" onclick="showTab('discord')">Discord Server</a>
	              </div>
	            </div>
	        	<div class="news">
	        		<div class="tab opened" id="overview" style="min-height: 100vh;max-height: 900px;">
				        <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1KFYcaBzIzYdySsrKTFLgV1UIanb53wsa/preview" width="640" height="480" allow="autoplay"></iframe>
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
				      <img style="max-width: 100%;object-fit: cover;" src="documents/PNYS_Registration.png"><br><br>
		              <a href="https://bit.ly/pnys2021registration" class="form_link" target="_blank">Register here</a>
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