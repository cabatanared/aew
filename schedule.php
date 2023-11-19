 <?php 
   include 'header.php';
   ?>
<link href="assets/css/zoom.css" rel="stylesheet" />
   <style type="text/css">
     .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
      }
      .dl_pdf:hover{
        background: #FECCD9;
        color: #9D1F45;
     }
     .dl_pdf {
      padding: 0.8rem 2rem;
      /*border: 1px solid #000;*/
      font-size: 12pt;
      cursor: pointer;
      margin-bottom: 0.5rem;
      font-family: 'Gabarito-Regular';
      background: #9D1F45;
      color: #ffffff; 
     }
   </style>

   <a href="index.php" style="text-decoration: none;color: #2f2e2e;font-size: 10pt; margin-left: 8rem;"><i class="icofont-home"></i> Back to Home</a>
<div class="main_content2" style="padding: 1rem;background: #FFF6CE;">
  
  <center><div class="banner">
    <!-- <img src="assets/aew_banner.jpg" style="max-width: 1000px;width: 80vw;border: 1px solid;"> -->
  </div>
</center>

<div class="row">

<div class="article" style="margin: auto;">

<br>
<img style="max-width: 1000px;width: 100%;margin-bottom: 0.5rem" src="assets/banners/Activities.png" class="w3-container w3-center w3-animate-zoom">
        <div style="position: relative;min-height: 100vh; max-width: 1000px;width:100%">
          <a class="dl_pdf" href="https://drive.google.com/file/d/1hksEoZw0lsWy0RFVoWbHHw903LA1TjRq/view" target="_blank" style="text-decoration: none; position:absolute; z-index:2;">Download</a>
            <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1hksEoZw0lsWy0RFVoWbHHw903LA1TjRq/preview" height="480" allow="autoplay"></iframe>
              <!-- <br><br><br><h1 style="font-family: 'DarumadropOne-Regular', sans-serif;color: #9D1F45;">COMING SOON...</h1> -->
        </div>
        <br><br>

      </div>
</div>
  
    </div>


   <?php 
   include 'footer.php';
   ?>

</body>
</html>