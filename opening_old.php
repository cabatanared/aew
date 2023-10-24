 <?php 
   include 'header.php';
   ?>

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
      #btn-stream:hover {
        background: #FFCC24;
      }
   </style>

   <a href="index.php" style="text-decoration: none;color: #2f2e2e;font-size: 10pt; margin-left: 8rem;"><i class="icofont-home"></i> Back to Home</a>
<div class="main_content2" style="padding: 1rem;background: #ffdbbc;">
  
  <center><div class="banner">
    <!-- <img src="assets/aew_banner.jpg" style="max-width: 1000px;width: 80vw;border: 1px solid;"> -->
  </div>
</center>

<div class="row">

<div class="article" style="margin-top:0 !important">


<img style="max-width: 1000px;width: 85vw;margin-bottom: 5px;" src="assets/AEW50-Banners_Opening.png">
  <div class="row">
    <div class="schedules">
      <a  id="btn-stream" style="width:180px;font-family: PublicSans-Bold;" href="#">Watch the Livestream</a>
    </div>
    <div style="position: relative;min-height: 100vh; max-width: 1000px;width:80vw">

           <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1I1wrbq-ItgS9W_q3TnwytwiAhLjbnyC1/preview" height="480" allow="autoplay"></iframe>
           <!-- <iframe src="https://pnridostgovph-my.sharepoint.com/personal/information_pnri_dost_gov_ph/_layouts/15/embed.aspx?UniqueId=312d580b-ec32-47c6-a99d-57987d841b7f#zoom=100" width="100%" height="500" frameborder="0" scrolling="no" allowfullscreen title="AEW50-WebDoc_Opening.pdf"></iframe>-->

        </div>
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