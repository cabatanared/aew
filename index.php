   <?php 
       include 'header.php';
       ?>

<style type="text/css">
  @font-face {
    font-family: Gagalin;
    src: url(assets/Gagalin-Regular.woff);
  }
  body{
    overflow: hidden;
  }
  h2{
    font-weight: 600;
    margin-bottom: .7rem;
    padding-top: 0.75rem;
  }
 
  #land{
    bottom: -30px !important;
  }
 
  #smarty{
    position: absolute;
    width: 200px;
    z-index: 9999;
    margin: auto;
    margin-top: -3rem;
  }
  :root{
  --radius-1: 70%;
  --radius-2: 30%;
  --radius-3: 30%;
  --radius-4: 70%;
  --radius-5: 60%;
  --radius-6: 40%;
  --radius-7: 60%;
  --radius-8: 40%;
}

.bub {
  text-decoration: none;
  display: block;
  max-width: 300px;
  transform: translatey(0px);
  -webkit-animation: float 5s ease-in-out infinite;
          animation: float 5s ease-in-out infinite;
  mix-blend-mode: multiply;
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 3px;
  font-size: 15px;
  color: #08bf68;
  background-color: #fff;
  padding: 50px;
  border-radius: 11px;
  position: relative;
  box-shadow: 20px 20px #83af9b;
}

.bub:after {
  transform: translatey(0px);
  -webkit-animation: float2 5s ease-in-out infinite;
          animation: float2 5s ease-in-out infinite;
  content: ".";
  font-weight: bold;
  -webkit-text-fill-color: #fff;
  text-shadow: 22px 22px #799f8e;
  text-align: left;
  font-size: 55px;
  width: 55px;
  height: 11px;
  line-height: 30px;
  border-radius: 11px;
  background-color: #fff;
  position: absolute;
  display: block;
  bottom: -30px;
  right: 0;
  box-shadow: 22px 22px #83af9b;
  z-index: -2;
}

@-webkit-keyframes float {
  0% {
    transform: translatey(0px);
  }
  50% {
    transform: translatey(-20px);
  }
  100% {
    transform: translatey(0px);
  }
}

@keyframes float {
  0% {
    transform: translatey(0px);
  }
  50% {
    transform: translatey(-20px);
  }
  100% {
    transform: translatey(0px);
  }
}
@-webkit-keyframes float2 {
  0% {
    line-height: 30px;
    transform: translatey(0px);
  }
  55% {
    transform: translatey(-20px);
  }
  60% {
    line-height: 10px;
  }
  100% {
    line-height: 30px;
    transform: translatey(0px);
  }
}
@keyframes float2 {
  0% {
    line-height: 30px;
    transform: translatey(0px);
  }
  55% {
    transform: translatey(-20px);
  }
  60% {
    line-height: 10px;
  }
  100% {
    line-height: 30px;
    transform: translatey(0px);
  }
}

.gear {
  position: absolute;
	opacity: 0;
	animation: change-img-anim 10s infinite, float2 5s ease-in-out infinite;
  /* top: 21vw; */
  left: 26vw;
}
.gear:nth-of-type(1) {
	animation-delay: 0s;
}
.gear:nth-of-type(2) {
	animation-delay: 5s;
}
@keyframes change-img-anim {
	0%{ opacity: 0;}
	50%{ opacity: 1;}
	100%{ opacity: 0;}
}

.bubble
{
  font-family: Gagalin;
position: relative;
width: 265px;
height: 85px;
padding: 5px;
background: #4fa9ac7a;
-webkit-border-radius: 77px;
-moz-border-radius: 77px;
border-radius: 77px;
margin:auto;
z-index: 10;
}

.bubble:after
{
content: '';
position: absolute;
border-style: solid;
border-width: 15px 14px 0;
border-color: #4fa9ac7a transparent;
display: block;
width: 0;
z-index: 1;
bottom: -15px;
left: 167px;
}
 .bubble{
    margin-top: 10vh;
  }
.bubble p{
     margin-top: -10px;
    font-size: 18pt;
    text-align: center;
    line-height: 25px;
}

  /*.blob {
    position: absolute;
    margin: auto;
    margin-left: -41px;
    width: 260px;
    height: 150px;
    border-radius: var(--radius-1) var(--radius-2) var(--radius-3) var(--radius-4) / var(--radius-5) var(--radius-6) var(--radius-7) var(--radius-8);
    background-color: #a1d28696;
    box-shadow: 0 0 10px rgba(0, 0, 0, .3);
    top: 20px;
    left: 20px;
    z-index: -99;
}
}*/
.art-deco {
  width: 500px;
     border: 15px solid transparent; /* invisible space */
     outline: 4px solid #a8cf45;
     outline-offset: -10px; /* first box */
     background: linear-gradient(#f9a01b 0 0) top,
          linear-gradient(#f9a01b  0 0) left, linear-gradient(#f9a01b  0 0) bottom,
          linear-gradient(#f9a01b  0 0) right;
     background-size: 200% 4px, 4px 200%; /* second box */
     background-origin: padding-box;
     background-repeat: no-repeat;
}
.article-header{
  background: #f9a11c;
  padding-left: 1em;text-align: center;
  color: white;padding-bottom: 9px;padding-top: 9px;
}

</style>

<style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        /* background: #eee; */
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        /*background: #fff;*/
        background: #ffdbbc;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      :root{
        --swiper-theme-color:#5d5dd5 !important
      }

      .video-js{
        background: #ffdbbc;
      }

    </style>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <div class="parallax" id="parallax">
    <!-- <div id="group1" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
    </div> -->
    <div id="group2" class="parallax__group" style="margin-top: 90px !important;">
      <div class="parallax__layer parallax__layer--back" style="position: relative;height: 100vh;background: #FFF6CE;">

        <!--<img src="Assets for Webdesign/Graphics/shape 3.png" style="position: absolute;left: -12vw;top: 10vh;width: 24vw;">-->      
        <!-- <img class="imgscope" src="Assets for Webdesign/Graphics/AEW50 Brand Elements (2).png" style="position: absolute;left: 16vw;width: 13vw;"> -->
        <img class="imgpinkgrass" src="assets/PinkGrass.png" style="position: absolute;">
        <img class="imgblackwhitecloud" src="assets/BlackAndWhiteCloud.png" style="position: absolute;">
        <img class="imgblackwhiteatom" src="assets/BlackAndWhiteAtom.png" style="position: absolute;">
        <img class="imgwoman" src="assets/YellowPaperDoodle.png" style="position: absolute;transform:rotate(25deg); width: 15vw;">
        <!--<img src="Assets for Webdesign/Graphics/shape 1.png" style="position: absolute;right: -20vw;top:22vh; width: 25vw;">-->
        <!--<img src="Assets for Webdesign/Graphics/shape 2.png" style="position: absolute;right: -6vw;top:-14vh; width: 25vw;">-->
        <img class="imgsmallatoms" src="assets/BlackAndWhiteSmallAtoms.png" style="position: absolute; transform:rotate(25deg);">
        <img class="imgyellowshine" src="assets/YellowShine.png" style="position: absolute; transform:rotate(25deg);">
        <!--<img src="Assets for Webdesign/Graphics/asterisk.png" style="position: absolute;right: 8vw;top:14vh; width: 12vw;">-->
        <img class="imgbrownbird" src="assets/BrownBirdDoodle.png" style="position: absolute; transform:rotate(25deg);">


        <!-- <img src="Assets for Webdesign/Graphics/AEW50 Brand Elements (1).png" class="aew imgdna" style="position: absolute;transform:rotate(-75deg);width: 18vw;margin-left: auto;margin-right: auto;left: 0;
right: 0;"> -->
<img src="assets/BlackAndWhiteCursiveLine.png" class="aew imgdna" style="position: absolute;width: 15vw;margin-left: auto;margin-right: auto;left: 0;
right: 0;">
        
      </div>
    <!--   <div class="bubble" style="
    padding-top: 3em;
">
        <div class="pointer">
          <a href="https://2020aew.com" style="
    text-decoration: none;
        color: #656565;
    text-shadow: 1px 1px 9px #ffffff;    font-size: 20pt;
    font-weight: 600;
"><p>Go to the <br>AEW Virtual Platform</p></a>
        </div>
        <div class="pointerBorder" style="display: none">
        </div>
    </div> -->

   <!--  <center><img src="assets/smarty.gif" id="smarty" ></center> -->
      <div class="parallax__layer parallax__layer--base aewgear_grp" >
       <!-- <center> <img src="assets/logos.png" class="logos"></center>

         <img class="cfront1" src="assets/c1 back.png" style="position: absolute; right:2rem;top:60px;width: 6vw;">

          <img class="cfront2" src="assets/c2 back.png" style="position: absolute; left:10vw; bottom:50vh ;width: 16vw;"> -->

        
        <!-- <center><img src="assets/logo/2023-AEW51-GearUp-Logo-with-date.png" class="aew" style="margin-top:185px;-webkit-animation: float2 5s ease-in-out infinite;
          animation: float2 5s ease-in-out infinite;"><br>
          <img src="assets/51st_atomic_energy_week_text.png" class="gear">
          <img src="assets/Gearing_up_description.png" class="gear">
        </center> -->
        <center><img src="assets/2023-AEW51-GearUp.png" class="aew" style="-webkit-animation: float2 5s ease-in-out infinite;
          animation: float2 5s ease-in-out infinite;"><br>
          <img src="assets/2023-AEW51-GearUp-theme.png" class="gear" style="width:50vw;">
          <img src="assets/2023-AEW51-Logo-Text.png" class="gear" style="width:48vw;">
          <img src="assets/2023-AEW51-date.png" class="aewdate" style="margin-top:120px;-webkit-animation: float2 5s ease-in-out infinite;
          animation: float2 5s ease-in-out infinite; width:25vw;">
        </center>
        <!--<p id="date" style="font-weight: 700;color: #f98c13;font-size: 18pt;margin-bottom: 1em;text-align: center;">December 5-9, 2022</p>-->
          <center class="center_contain">
            <!--<a class="bub" href="https://aewph.com/lobby" target="_blank">Click here to visit the<br> AEW Platform!</a>-->
            <!--<img src="assets/smarty.gif" style="width: 210px;margin-right: -11em;">-->
            
            
          </center>

         <!-- <p id="countdown"></p> -->

         
    
        <!-- <img src="assets/land2.png" id="land" > -->
      </div>
    </div>

  <div  id="group3" class="parallax__group">
<center><!--<img src="Assets for Webdesign/Graphics/pencil with line.png" class="aew pencil" onclick="window.location.replace('schedule.php')">--></center>

   <!--<div class="row" style="background-image: url('Assets for Webdesign/Graphics/Midsection (Transparent).png');background-size: contain;
    background-position: right;
    background-repeat: no-repeat;">
      

     
        <div id="schedule">
              <h2 style="margin-top: 1.2em;margin-left: 1em;">AEW Activities</h2>
              <div class="schedules" style="margin-top:3em">
                <a class="m2" href="https://aew.pnri.dost.gov.ph/aew/2021/schedule.php">Schedule of Activities</a>
                <a target="_blank" href="files/AEW49 Programme - Opening Ceremonies.pdf">Opening Ceremonies</a>
                <a target="_blank" href="files/AEW49 Programme - Virtual Presser.pdf">Virtual Presser</a>
                <a  href="pnys.php">Philippine Nuclear Youth Summit</a>
                <a href="https://aew.pnri.dost.gov.ph/aew/2021/technical_session.php">Technical Sessions</a>
                <a href="https://aew.pnri.dost.gov.ph/aew/2021/technical_exhibit.php">Virtual Technical Exhibits and Tours</a>
                <a target="_blank" href="files/AEW Closing Ceremonies Programme_112221.pdf">Closing Ceremonies</a>
              </div>
           </div>
          <div class="news">
            <h2 class="article-header">NEWS</h2>
            <h3>Atomic Energy Week 2021 to brandish the latest in PH nuclear S&T innovations </h3><br>
            <p align="justify">

             This year’s celebration of the Atomic Energy Week (AEW) will showcase the latest developments in nuclear science and technology, particularly local researches and technologies that address the current needs in the society, especially in the new normal condition. Now on its 49th year, the AEW will be held December 6-10 to be led by the Department of Science and Technology-Philippine Nuclear Research Institute (DOST-PNRI)<br><br>

            With the theme “Agham at Teknolohiyang Pangnukleyar: Tugon sa Hamon ng Panahon”, the annual event  will mostly be held online for everyone’s safety as the country transitions to a more relaxed<br><br><a class="arta" href="Innovation.php">Read more ... </a>

            </p>
            <br><br>
            <h2 class="article-header">ARCHIVES</h2>
            <h3>Research confab features 73 local & int’l nuclear studies</h3><br>
              <p align="justify">

               Presenting their latest innovations, some 73 researches in the field of nuclear science will be on spotlight at the 2nd Philippine Nuclear Research and Development Conference (PNRDC 2020) to be hosted by the Department of Science and Technology-Philippine Nuclear Research Institute (DOST-PNRI) from December 8 to 10, 2020.<br><br>

              With the theme “AmBisyong Nukleyar Tungo sa Maunlad na Pilipinas,” the PNRDC highlights the growing role of the atom in national development, such as the diverse applications of nuclear energy that respond <br><br><a class="arta" href="confab.php">Read more ... </a>

              </p>
              <br>
            <h3>PH nuclear S&T innovations go online at Atomic Energy Week</h3><br>
              <p align="justify">
              Online is the way to go this season as the Department of Science and Technology-Philippine Nuclear Research Institute (DOST-PNRI) celebrates the 48th Atomic Energy Week (AEW) from December 7-11, 2020. Throughout the week, the Institute will use the online platform to showcase the latest developments in the local nuclear S&T community.<br><br>

            Comprising virtual events, contests, exhibits, and a research conference, this year’s online celebration will be simulcast across various social media platforms to reach more attendees while ensuring everyone’s safety. <br><br><a class="arta" href="aew.php">Read more ... </a>

            </p><br><br><br><br>
           </div> 

    
    </div>-->

    <div class="row" id="carusel">
    <!--<div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 0px; margin-bottom: 0px; overflow: hidden; border-radius: 8px; will-change: transform;">  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE1-VaTqvI&#x2F;watch?embed" allowfullscreen="allowfullscreen" allow="fullscreen">  </iframe></div>-->

    <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 0px; margin-bottom: 0px; overflow: hidden; border-radius: 8px; will-change: transform;">  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFS1_ZcREQ&#x2F;watch?embed" allowfullscreen="allowfullscreen" allow="fullscreen">  </iframe></div>

    <!--<div class="swiper">

        <div class="swiper-wrapper">

          <div class="swiper-slide"><video-js style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 0px; margin-bottom: 0px; overflow: hidden; border-radius: 8px; will-change: transform;"> <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;" src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFSoSozKmU&#x2F;watch?embed" allowfullscreen="allowfullscreen" allow="fullscreen">  </iframe></video-js></div>
          <div class="swiper-slide"><video-js style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 0px; margin-bottom: 0px; overflow: hidden; border-radius: 8px; will-change: transform;">  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFS1_ZcREQ&#x2F;watch?embed" allowfullscreen="allowfullscreen" allow="fullscreen">  </iframe></video-js></div>
          <div class="swiper-slide"><video-js style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 0px; margin-bottom: 0px; overflow: hidden; border-radius: 8px; will-change: transform;">  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFS1_acT68&#x2F;watch?embed" allowfullscreen="allowfullscreen" allow="fullscreen">  </iframe></video-js></div>
        </div>

        <div class="swiper-pagination"></div>


        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>


        <div class="swiper-scrollbar"></div>
      </div>-->
      
    </div>

    <!-- WEBSITE VISITS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.ipwhois.io/js/ipwhois.js"></script>

    <script>
        $(document).ready(function() {
            var ipaddress = "";
            var apiKey = ""; // Leave blank for free endpoint
            var ipwhois = request_ipwhois(ipaddress,'en',apiKey);
            console.warn(ipwhois)
        });
    </script>
    
    <!-- AEW OVER THE YEARS-->
    <script type="text/javascript">
      $( document ).ready(function() {
         // use setTimeout() to execute
          var swiper = new Swiper(".swiper", {
        slidesPerView: 1,
        spaceBetween: 5,
       // slidesPerGroup: 1,
        loop: true,
        /*autoplay: {
          delay: 2500,
          disableOnInteraction: false
        },*/
        //loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      

  $('.video-js').on("play", function () {
    swiper.autoplay.stop();
    console.log('nagplay')
  });
      });

        

    </script>

       <?php 
       include 'footer.php';
       ?>


  </div>

       <script type="text/javascript">
           /*  // Set the date we're counting down to
          var countDownDate = new Date("Dec 6, 2021 15:37:25").getTime();

          // Update the count down every 1 second
          var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();
              
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
              
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              
            // Output the result in an element with id="countdown"
            document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
              
            // If the count down is over, write some text 
            if (distance < 0) {
              clearInterval(x);
              document.getElementById("countdown").innerHTML = "EXPIRED";
            }
          }, 1000);*/
           </script>


    
  </div>

</body>
</html>