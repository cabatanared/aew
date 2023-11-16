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
        color: #9D1F45;
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
	        <img style="max-width: 1000px;width: 100%;margin-bottom: 0.5rem" src="assets/banners/GAD.png" class="w3-container w3-center w3-animate-zoom">
	        <div class="row">
	        	<div id="schedule">
                    <div class="schedules">
                        <a id="btn-overview" class="m2" onclick="showTab('overview')">View Program</a>
                    <!-- <a id="btn-sessions" onclick="showTab('sessions')">Watch the Recorded Livestream</a> -->
                    <a id="btn-sessions">Watch the Recorded Livestream</a>

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
				        <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1Zv04OHBh5Zo8TZj_kijanQIpMqLtdIkd/preview" width="640" height="480" allow="autoplay"></iframe>
				      </div>

				    <div class="tab" id="programme" style="min-height: 100vh;max-height: 900px;">
            <a class="dl_pdf"href="https://bit.ly/PNRDCregister" target="_blank" style="text-decoration: none; position:absolute; z-index:2;color: #ffffff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Join the Conference</a>
              <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1-6Lckkj1BPexn3CH9d1AmWle0zZFCwIc/preview" width="640" height="480" allow="autoplay"></iframe>
				        <!-- <img style="max-width: 100%;object-fit: cover;" src="documents/PNYS AEW Programme_rev.png"> -->
				    </div>

		            <div class="tab" id="nucleart" style="min-height: 100vh;max-height: 900px;">
		              <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1WK2PDSi-olHDYb_1wJdm6cKIJY3dAUZs/preview"  allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
		              
		            </div>

                <div class="tab" id="career_talk" style="min-height: 100vh;max-height: 900px;">
                 
                  <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1ViRfvzVc67y1LzhmZ5vvr6hyqZUlTnI6/preview"  allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                  
                </div>

                <div class="tab" id="sessions" style="min-height: 100vh;max-height: 900px;overflow-y:scroll;   ">
                  <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPNRIDOST%2Fvideos%2F1259781891549177%2F&show_text=false&width=560&t=0" width="700" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

                  <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPNRIDOST%2Fvideos%2F525144669633910%2F&show_text=false&width=560&t=0" width="700" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

                  <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPNRIDOST%2Fvideos%2F1353067728799571%2F&show_text=false&width=560&t=0" width="700" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                  
                  <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPNRIDOST%2Fvideos%2F882039702822348%2F&show_text=false&width=560&t=0" width="700" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                  
                </div>

				    <div class="tab " id="registration" style="min-height: 100vh;max-height: 900px;">
              
				      <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1PJ2BHQkmrK1zBSPw8QNxc16jU1l5fIrw/preview" width="640" height="480" allow="autoplay"></iframe>
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