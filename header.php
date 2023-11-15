

<?php 
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<!-- <link rel="stylesheet" href="assets/animate.min.css"/> -->
<meta property="og:title" content="Atomic Energy Week @ 51"/>
<meta property="og:image" content="https://aew.pnri.dost.gov.ph/aew/2023/assets/aew51_Website_thumbnail.png"/>
<meta property="og:description" content="Atomic Energy Week @ 51"/>
<meta property="og:url" content="https://aew.pnri.dost.gov.ph/aew/2023"/>
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="627" />
<!-- <link rel="icon" type="image/png" href="https://aew.pnri.dost.gov.ph/aew/2023/assets/logo/2023-AEW51-Logo-Smallv2.png"> -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="assets/PPTelegraf-UltraBold.otf" rel="stylesheet">
<link href="assets/PPTelegraf-Regular.otf" rel="stylesheet">
<link href="assets/Rubik-Regular.ttf" rel="stylesheet">

<link href="assets/css/style.min.css" rel="stylesheet" />
<link href="assets/css/bootstrap.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap'); 
@font-face { font-family: Gabarito-Bold; src: url("assets/font/Gabarito/static/Gabarito-Bold.ttf"); } 
@font-face { font-family: Gabarito-Regular; src: url("assets/font/Gabarito/static/Gabarito-Regular.ttf"); } 
@font-face { font-family: DarumadropOne-Regular; src: url("assets/font/Darumadrop_One/DarumadropOne-Regular.ttf"); } 
  ::-webkit-scrollbar {
  width: 10px;
}
/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
*{
      /*font-family: 'Poppins', sans-serif;*/
      /* font-family: 'Gabarito-Bold', sans-serif; */
}


  /* Parallax base styles
  --------------------------------------------- */

  .parallax {
    height: 500px; /* fallback for older browsers */
    height: 100vh;
    overflow-x: hidden;
    overflow-y: auto;
    -webkit-perspective: 300px;
    perspective: 300px;
    scroll-behavior: smooth;
  }
  .about_section{
    line-height: 20px;
  }
  .parallax__group {
    position: relative;
    height: 500px; /* fallback for older browsers */
    height: 100vh;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }

  .parallax__layer {
    position: absolute;
    width:100vw;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .parallax__layer--fore {
    -webkit-transform: translateZ(90px) scale(.7);
    transform: translateZ(90px) scale(.7);
    z-index: 1;
  }

  .parallax__layer--base {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    z-index: 4;
  }

  .parallax__layer--back {
    -webkit-transform: translateZ(-300px) scale(2);
    transform: translateZ(-300px) scale(2);
    z-index: 3;
  }

  .parallax__layer--deep {
    -webkit-transform: translateZ(-600px) scale(3);
    transform: translateZ(-600px) scale(3);
    z-index: 2;
  }

  .imgsmallatoms {
        right: 9vw;
        top:22em; 
        width: 8vw;
      }

  .imgbird {
    right: 16vw;top:14em; 
  }

  .imgyellowshine {
        right: 20vw;top:25em; 
        width: 5vw;
      }
  .imgwoman{
    left: 9vw;top:23em;
  }

  .imgdna {
    /* top:28em; */
    top:75vh;
  }

  .imgblackwhiteatom{
    top: 20vh;
    left: 10vw;
    width: 7vw;
  }
  .imgpinkgrass{
    top:9vh;
    left:37vw;
    width: 5vw;
  }
  .imgbrownbird{
    top:15vh;
    right:14vw;
    width: 9vw;
  }
  .imgblackwhitecloud{
    top:13vh;
    left:55vw;
    width: 7vw;
  }

  .aew_wave {
    top:10vh;
    left:58vw;
  }

  .aew_cloud {
    top:35vh;
    right:58vw;
  }

  .aew_atom {
    top:35vh;
    right:48vw;
  }

  .aew_stars {
    top:43vh;
    right:26vw;
  }

  .aew_mail {
    top:44vh;
    left:2vw;
  }


  body, html {
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  }
  * {
    margin:0;
    padding:0;
  }

  #flink{
    display:flex;
  }
  /* #flink a > img:hover
  {
    border-radius: 80%;
    background: #FF997D;
  } */

  #flink a
  {
    border-radius: 50%;
    color:#ffffff;
    background-color:#9D1F45;
    margin: 0 5px;
  }

  #flink a.website:hover
  {
    background-color: #FF997D;
    /* border-radius: 40px; */
    border-radius: 50%;
  /* box-shadow: 0 0 2px #888; */
    /* padding:  0.6em 0.6em; */
    margin: 0 5px;
  }

  #flink a.website:after
  {
    background-color: #FF997D;
    /* border-radius: 50%; */
    position:absolute;
    width:100%;
    height:100%;
  /* box-shadow: 0 0 2px #888; */
  /* padding:  0.6em 0.6em; */
  margin: 0 5px;
  }

   /* centre the content in the parallax layers */
  .title {
    text-align: center;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }



  #group1 {
    z-index: 5;
  }
  #group1 .parallax__layer--base {
    background: rgb(102,204,102);
  }

  #group2 {
    z-index: 3; 
  }
  #group2 .parallax__layer--back {
    background: rgb(123,210,102);
  }

  #about_pnri,#group3 {
    z-index: 4;
  }
  #group3{
    margin-top: -20rem;background:#fbb329; height: fit-content;
  }
  #group3 .parallax__layer--base {
    background: rgb(153,216,101);
  }

  #group4 {
    z-index: 2;
  }
  #group4 .parallax__layer--deep {
    background: rgb(184,223,101);
  }

  #schedule, #group5 {
    z-index: 3;
  }
  #group5 .parallax__layer--base {
    background: rgb(214,229,100);
  }

  #group6 {
    z-index: 2;
  }
  #group6 .parallax__layer--back {
    background: rgb(245,235,100);
  }

  #group7 {
    z-index: 3;
  }
  #group7 .parallax__layer--base {
    background: rgb(255,241,100);
  }


.aew {
  width:50vw; max-width: 900px;
  /*width:100%; max-width: 755px;*/
  animation: fadeIn;
  animation-duration: 3s;
}
.aew_dec{
  margin-top:200px;
  max-width: 350px;
  width: 80vw;
}
.cfront1 {
  animation: slideInLeft;
  animation-duration: 2s;
}
.cfront2 {
  animation: slideInRight;
  animation-duration: 2s;
}
.nav {
    position: fixed;
    top: 0;
    width: 100%;
    /*height: 100px;*/
    height: 90px;
    background: #fff;
    z-index: 11;
    /*border-bottom: 1px solid #08bf68;*/
    border-bottom: 6px solid #9D1F45;

}


.schedules{
  /*width: 50vw;margin:auto;*/
}
.schedules > a{
  display: block;
  padding: 0.8rem 2rem;
  /*border: 1px solid #000;*/
  font-size: 12pt;
  background: #d4935d;
  cursor: pointer;
  width: 350px;
  text-decoration: none;
  color: #fff;
  margin-bottom: 0.5rem;
  font-family: 'Gabarito-Bold';
}
.m2{
  /*background: #f9a11c !important;*/
 background: #FFCC24 !important; 
}
.m3{
  background: #d7f47d;
  padding: 1em;
  text-decoration: none;
  color: black;
  font-weight: 600;
}

.schedules > a:hover{
  background: #ffcf73;
}
.sessions{
  display: grid;
}
li.portal:hover{
  background: #9D1F45; 
}
li.lg-screen:hover a{
  color: white !important;
}
li.active {
    /*background-color: #08bf68;*/
    background-color:#9D1F45;
}
li.active a{
  color: white !important;
}

/* background color for hover in header menu */
.dropdown-content a:hover{
  /*background-color: #e0e0e0;*/
  background: #FECCD9;
}

ul.portal {
    list-style-type: none;
    width: 90vw;
    display: flex;
    /*height: 100px;*/
    height: 90px;
    margin: auto;
    padding: 0;
    position: relative;
}
li.portal a, .dropbtn {
    /*font-family: 'Poppins', sans-serif;*/
    font-family: 'Gabarito-Bold', sans-serif;
    display: inline-block;
    color: #43414E;
    letter-spacing: 1.2px;
    font-size: 17px;
    font-weight: 500;
    text-align: center;
    /*padding: 45px 16px;*/
    padding: 33px 20px;
    padding-top: 35px;
    text-decoration: none;
}


.article{
  /*width: 80vw;*/margin:auto; margin-top:2rem;max-width: 1000px;
}

#newss > h2{
  font-family: 'DarumadropOne-Regular', sans-serif;
  color: #9D1F45;
}

li.portal{
    /*border-bottom: 3px solid #08bf68;*/
}
 .center_contain{
   margin-top: 1em;
 }
.stats{
  font-size: 11pt;
  font-weight: 400;
  margin-top: 8px;
  margin-left: 1rem;
  min-width: 250px;
  text-align: left;
}
.pencil{
  width: 300px;position: absolute;left: 0;top: -40px;margin-top: 0;
}

#athumb{
  display: flex;padding: 14px 16px;
}
.statsnum{
  margin: auto;display: inline-flex;
  font-family: 'Fira Sans', sans-serif;
}

#schedule{
  width: 30vw;margin:5rem; margin-top: 2rem
}
.statsnum span{
 font-size: 31pt; min-width: 100px;color: #166e81;
}
.row{
  display: flex;
}
.col-md4{
  width: 33.33%
}
.col-md8{
  width: 66.66%
}
.mb{
  margin-bottom: 9px;
}
.logos{
  right: 0;
  width: 250px;
  margin-top: 3.5rem;
}
.arta{
  color: #0b677c;text-decoration: underline;
    font-weight: bold;
}
.particles {
  min-height: 2rem;
  position:absolute;
  background:red;
  transition: width 1s ease, height 1s ease;
}
.navlogo{
  /*width: 175px;*/
  width: 200px;
}
.main_content{
  margin:4rem;
}
.main_content2{
  padding:4rem;
}
.news{
  width: 100%;margin:3rem;  margin-top: 2rem;
}
#navaew{
   padding: 12px 16px;
   /*padding-top: 25px;*/
   padding-top: 20px;
}


p{
  font-size: 11pt;line-height: 20px;
}
input, textarea{
  background: #fafafa;
  min-height: 20px;
  min-width: 300px;
  padding: 0.31rem 4px;
  border-radius: 3px;
  border: 1px solid #4c8e9d
}

#smarty,#land{
 
  animation: slideInUp;
  animation-duration: 1s;
}


#foot{
  width:60%
}
.fs{
  color:black;font-size: 13pt;
}

 .dropdown {
  position: relative;
  display: inline-block;
  
}

.dropdown-content {
  font-family: 'Gabarito-Regular' !important;
  font-weight: normal;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  opacity: 90%;
}

.dropdown:hover .dropdown-content {
  display: block;
  background: #f9f9f9;
}

.picnews{
  max-height: 230px;
  margin-right:1rem;
  margin-bottom:1rem;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

#countdown{
    text-align: center;
    background: white;
    border: 5px solid #08bf68;
    width: 500px;
    margin: auto;
    font-size: 33pt;
    padding: 1em;
    height: 2em;
    max-width: 500px;
    width: 65vw;
    font-weight: 900;
    color:#f9a01b;
}

#note{
  text-align: center;
  margin-top: 1em;
  color: #1fb375;

}
.clogo{
  width: 65px;padding-top: 13px;margin-left: auto; margin-right: 1em;
}
.large{
  font-size: 16pt !important;
}
#burger-menu{
  display: none;
}
#burger-menu a{
  /*background: #efffe5;*/
  background:#FECCD9;
  text-decoration: none;
  color: black;
  border-bottom: 1px solid #9D1F45;
  padding: 0.75em;
}
#burger-menu:hover a{
  background: #9D1F45;
}
#copyright{
  /*font-size: 10pt; left: 0; position:absolute; width:100%;bottom: 5rem;text-align: center;*/
  font-size: 10pt; left: 0;  width:100%;bottom: 5em;margin-top:3rem;text-align: center;
}
.burger{
  cursor: pointer;
  display: none;
}
#countdown_contain{
  height: 245px; display: inline-table;width: 80vw;max-width: 720px;
 }

.burger > span{
  font-size: 27pt;padding: 30px;padding-right: 5px;
}
 #group3{
    border-top: 1px solid #d4935d;
    /*background: #efffe5;*/
    background: #ffdbbc;
    margin-top: -3rem;
  }

.main_content{
  margin-top: 100px !important;
}
.main_content2{
  padding-top: 100px !important;
}

.foot_contain{
  /* background: #d4935d; */
  background:#ffffff;
  background-size: cover;
  background-position-x: center;
  /*min-height: 500px;*/
  min-height: 350px;
  padding: 5.5rem;
  position: relative;
  height: calc(100vh- 6em);
}
.foot_title{
  font-size: 13pt;line-height: 25px;
}

@media (max-width: 1700.98px){
 
 #land{
  bottom: 17vh;
 }

}

@media (max-width: 1196.98px){
 ul.portal{
  width: 100vw;
 }
}


@media (max-width: 1076.00px){
  .clogo{
    width: 50px;
    padding-top: 25px;
    margin-right: 0.3em;
   }
}


@media (max-width: 1015.98px){
 
 .lg-screen{
   display: none;
 }
 .burger{
  display: block;
 }
 #burger-menu{
  display: grid;
 }
}

@media (max-width: 924.98px){
  ul.portal{
    width: 100vw;
  }

}

@media (max-width: 900.98px){
  #event_title{
    margin: auto !important;
  }
  .news{
    width: unset;margin:2rem;
  }
  #schedule{
     width: unset;margin:1rem;
  }
  #schedule > h2{
     text-align: center;
  }
  .schedules > a{
    margin: 10px auto;
    text-align: center;
  }
  #foot{
    width:unset
  }
  .fs{
    color:black;font-size: 12pt;
  }
  .row{
    display: block;
  }

  .pencil{
    left: 26vw;
    top: -80px;
  }
}
@media (max-width: 777.98px){
  
li.portal a, li.portal p{
   font-size: 13px;
  }

   #land{
    bottom: 30vh;
   }

  .foot_contain{
    padding:3rem;
  }
}

@media (max-width: 700.98px){
.pencil{
    left: 22vw;
    top: -80px;
  }
}

@media (max-width: 600.98px){
.pencil{
    left: 13vw;
    top: -80px;
  }

  
}


@media (max-width: 580.98px){
 
  li.portal a {
      font-size: 12px;
      padding-left: 10px;
      padding-right: 10px;
  }
  .main_content{
    margin:2rem;
  }

  #land{
    bottom: 33vh;
   }
}





@media (max-width: 560.98px){
 
 #flink{
  display: flex;
 }
 #flink > a{
  margin-bottom: 1em;
  width:75vw !important;

 }
 #countdown_contain{
  height: 170px;
 }    

}

@media (max-width: 530.00px){
  .clogo{
  width: 50px;
 }
}


@media (max-width: 520.98px){
  #countdown{
    font-size: 2em;
  }
  #note{
    font-size: 10pt;
  }
    
  #lithumb{
    display: none;
  }
  
  #thumb{

    margin-right: 0;
  }
  #navaew{
    padding: 14px 4px;
  }
  #athumb{
    display: flex;padding: 14px 5px;
  }
}

@media (max-width: 480.00px){
  .about_section{
    line-height: 17px;
  }
  .about_section > span{
    font-size: 9pt!important;
  }

  .foot_title{
    font-size: 11pt;line-height: 20px;
  }
}

 
@media (max-width: 460.00px){
  .burger>span{
    padding-left: 0.4em;
  }
  .navlogo {
    margin-top:16px;
    width: 165px;
  }
  .clogo{
    margin-right: 0;
    display: none;
  }
  li.portal a {
      font-size: 11px;
      padding-left: 8px;
      padding-right: 8px;
  }

  #thumb{
    margin-right: 0.5em;
  }
}


@media (max-width: 440.98px){
  
  .schedules > a{
    width: 300px;
    padding: 0.4rem 1rem;
  }

  video{
    width:200px !important;
    height: 160px !important;
  }
}

@media (max-width: 412.00px){
  .clogo{
    margin-top: 8px;
    width: 45px;
 }
}

@media (max-width: 425.98px){
.pencil{
    left: 8vw;
    top: -80px;
  }
  #group3 {
    margin-top: 8em;
  }
  #countdown_contain {
    height: 100px;
  }
  .gear {
  top: 80vw;
 }
}


@media (max-height: 1366.98px){
  
 #group3{
    margin-top: -26rem;
  }
}

@media (max-height: 1024.98px){
  
 #group3{
    margin-top: -10em;
  }
}

@media (max-height: 975.98px){
  
 #group3{
    margin-top: 2rem;
  }
}
@media (max-height: 800.98px){
  
 #group3{
    margin-top: 0;
  }
}


@media(max-height: 734px){
  #copyright{
    bottom: 1em;
    font-size: 9pt;
  }
  #event_title{
    display: none;
  }
  #group3{
    margin-top: -4em;
  }
}

@media (max-height: 590.98px){
 
 #group3{
    margin-top: 7rem;
  }

.foot_contain{
  padding: 0;
}

}



@media (max-height: 500.98px){
 
 #land{
  bottom: 15vh;
 }
 #group3{
    margin-top: -11rem;
  }

}

@media screen and (max-width: 1500px) and (max-height: 500px) {
   #land{
  bottom: 0;
 }
 #group3{
    margin-top: -11rem;
  }

}

@media (max-width: 499px){
 
 .picnews {
  width: 100%;
  max-height: unset;
 }


}

@media screen and (min-width: 400px) and (max-width: 1120px){
 
 .imgyellowshine {
  top: unset;
  bottom:33em;
  width:10vw;
 }

 .imgwoman {
  top: unset;
  bottom:35em;
 }


}

@media screen and (min-width: 760px) and (max-height: 1180px){
  .imgsmallatoms{
    right: 11vw;
    top:30em;
  }
 .imgyellowshine {

  top:45em;
  
 }

 .imgwoman {

  top:35em;
 }

}

@media screen and (min-width: 641px) and (max-width: 890px){
 
 .aew {
  width: 65vw;
 }


}

@media (max-width: 640px){
 
 .aew {
  width: 80%;
 }
 .imgblackwhiteatom{
  top:40vh;
  width:10vw;
 }
 .imgblackwhitecloud{
  top:17vh;
  width:12vw;
  left: 10vw;
 }
 .imgpinkgrass{
  top:15vh;
  width:8vw;
 }
 .imgbrownbird{
  top:17vh;
  width:12vw;
 }
 .aew_wave{
  top:48vh;
  left:45vw;
 }

 .aew_cloud{
  top:41vh;
  right:4vw;
 }
 .aew_atom{
  top:41vh;
  /* right:4vw; */
 }

 .aew_stars{
  top:58vh;
  /* right:4vw; */
 }
 .gear {
  top: 90w;
 }
}

@media (max-width: 439px){
 
 .parallax__group {
  height: 65vh;
 }

}

@media only screen and (min-width: 375px) and (max-width: 900px) { .parallax__group {
  height: 53vh;
 } }

@media screen and (min-width: 440px) and (max-width: 1119px){
 
 .parallax__group {
  height: 70vh;
 }

}



@media (min-height: 1180px){
 
 .parallax__group {
  height: 100vh;
 }

}

@media (max-width: 439px){
 
 .imgdna {
  top: 28em;
 }

}


.disabled{
  opacity: 0.4;
}
.form_link{
  text-decoration: none;color: #ffffff; background: #27c77b;padding: 1em;
}
.dropdown-content  a{
  font-family: 'Gabarito-Regular', sans-serif !important;
  width: 100%;
 
  text-align: left !important;
  /*background: #eeffe6;*/
  background: #fff;
  padding: 16px !important;
  border-bottom: 1px solid #9D1F45;
  color:#9D1F45
  font-weight: normal;
}

.dropdown-content2 a:hover{
  background-color: #FFCC24;
}

 .dropdown2 {
  position: relative;
  display: inline-block;
  width: 100%;
 
  text-align: left !important;
  /*background: #eeffe6;*/
  background: #fff;
  
}



.dropdown-content2 {
  left: 190px;
  top:0px;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown2:hover .dropdown-content2 {
  display: block;
  background: #FFCC24;
}

.dropdown-content2  a{
  width: 100%;
  text-align: left !important;
  /*background: #eeffe6;*/
  background: #fff;
  padding: 16px !important;
}

/* WEBSITE and VIRTUAL MAP VIEWS CSS */
/* .content.has-bg .content-bg:before{content:'';background:url(images/bg-content-cover.png);position:absolute;left:0;right:0;top:0;bottom:0} */
.milestone .title{
  top:8vh;
}
</style>
<!-- FAVICON -->
<link href="https://aew.pnri.dost.gov.ph/aew/2023/assets/logo/2023-AEW51-Website_favicon.png" rel="icon">
<title>Atomic Energy Week @ 51</title>
</head>


<link rel="stylesheet" href="assets/icofont/icofont.min.css">
<body>

  <div class="nav">
    <ul class="portal">
      <li style="pointer-events: none;" class="portal <?php echo ($lastUriSegment == 'index.php'?'active':'')?>">
      <a style="margin-top: 1px;height:127px;" href="#" id="navaew"><img src="assets/logo/2023-AEW51-Logo.png" class="navlogo"></a></li>
       <!-- <li class="portal dropdown"><a href="#" >AEW</a>
      <div class="dropdown-content">
            <a href="aew.php" style="
    width: 100%;
    padding: 1rem 0;
    text-align: left;
">&emsp;ABOUT AEW </a><br>
<a href="files/AEW Souvenir Program (Digital Copy).pdf" style="
    width: 100%;
    padding: 1rem 0;
    text-align: left;
" target="__blank"><p style="padding-left: 1em;">AEW Souvenir Program</p></a>
           <a href="https://bit.ly/PNRDC2020AttendeeReg" style="
    width: 100%;
    padding: 1rem 0;
    text-align: left;
" target="__blank">&emsp;PNRDC</a> 
          </div>
        </li>-->


     <!-- <li class="lg-screen portal <?php echo ($lastUriSegment == ''?'active':'')?>"><a href="https://aew.pnri.dost.gov.ph/aew/2022">HOME</a>
      <li class="lg-screen portal dropdown<?php echo ($lastUriSegment == 'aew.php'?'active':'')?>"><a href="https://aew.pnri.dost.gov.ph/aew/2022/aew.php">ABOUT AEW</a>
      <div class="dropdown-content">
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/schedule.php">Overview</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/nucleart.php" >AEW Over the Years</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/video_making.php" >News</a>
            
          </div></li>
      <li class="lg-screen portal dropdown"><a href="#">ACTIVITIES</a>
      <div class="dropdown-content">
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/schedule.php">Schedule of Activities</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/nucleart.php" >Opening Ceremonies</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/video_making.php" >Philippine Nuclear and Research Development Conference</a>
            <a class="dropdown" href="https://aew.pnri.dost.gov.ph/aew/2022/video_making.php" >Virtual Tours</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/video_making.php" >Contests</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/video_making.php" >Closing Ceremonies</a>

            
          </div>
        </li>

      <li class="lg-screen portal dropdown"><a href="https://aew.pnri.dost.gov.ph/aew/2022/souvenir.php">SOUVENIR PROGRAM</a>
      <div class="dropdown-content">
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/schedule.php">Souvenir Program</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2022/nucleart.php" >E-book</a>
            
          </div></li>
      <li class="lg-screen portal"><a href="#footer" >FOLLOW US</a></li>

      <li class="portal" style="margin-left: auto;">
        <img src="Assets for Webdesign/DOST_logo.png" class="clogo">
        <img src="Assets for Webdesign/PNRI_logo.png" class="clogo">
      </li>

      <li class="burger" onclick="$('#burger-menu').toggle()">
         <span class="material-icons">reorder</span>
      </li>
    
    </ul>

    <div id="burger-menu" style="border-bottom: 4px solid #08bf68;">
      <a href="https://aew.pnri.dost.gov.ph/aew/2022">HOME</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2022/aew.php">ABOUT AEW</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2022/schedule.php">Schedule of Activities</a>
      <a href="#">Contests</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2022/nucleart.php">&emsp;NucleART 3.0</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2022/video_making.php">&emsp;Nuclear Video Making</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2022/souvenir.php" target="_blank">SOUVENIR PROGRAM</a>
      <a href="#footer" >FOLLOW US</a>
    </div>
  </div>-->

  <!-- <li class="lg-screen portal <?php echo ($lastUriSegment == ''?'active':'')?>"><a href="https://aew.pnri.dost.gov.ph/aew/2023">HOME</a> -->
  <li class="lg-screen portal"><a href="https://aew.pnri.dost.gov.ph/aew/2023">HOME</a>
      <li class="lg-screen portal dropdown <?php echo ($lastUriSegment == 'aew.php'?'active':'')?>"><a href="">ABOUT</a>
      <div class="dropdown-content">
            <!-- <a href="https://aew.pnri.dost.gov.ph/aew/2023/aew.php" style="color:#9D1F45 !important">Overview</a> -->
            <a href="aew.php" style="color:#9D1F45 !important">Overview</a>
            <a href="news.php" style="color:#9D1F45 !important">News</a>
            <?php if($lastUriSegment == '') {?>
            <a href="#carusel" style="color:#9D1F45 !important">AEW Over the Years</a>
          <?php } else {?>
            <!-- <a href="https://aew.pnri.dost.gov.ph/aew/2023#carusel" style="color:#9D1F45 !important">AEW Over the Years</a> -->
            <a href="#carusel" style="color:#9D1F45 !important">AEW Over the Years</a>
          <?php } ?>
            <!-- <a href="https://aew.pnri.dost.gov.ph/aew/2023/news.php" style="color:#9D1F45 !important">News</a> -->
            
          </div></li>
      <li class="lg-screen portal dropdown"><a href="#">ACTIVITIES</a>
      <div class="dropdown-content">
            <!-- <a href="https://aew.pnri.dost.gov.ph/aew/2023/schedule.php"style="color:#9D1F45 !important">Schedule of Activities</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2023/opening.php" style="color:#9D1F45 !important">Opening Ceremonies</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2023/pnrdc.php" style="color:#9D1F45 !important">Philippine Nuclear Research and Development Conference</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2023/map.php" style="color:#9D1F45 !important">PNRI Interactive Map</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2023/contests.php"style="color:#9D1F45 !important">Contests</a>
            <a href="https://aew.pnri.dost.gov.ph/aew/2023/exhibit.php"style="color:#9D1F45 !important">Technical Exhibits</a> -->
            <!-- <a href="schedule.php"style="color:#9D1F45 !important">Schedule of Activities</a>
            <a href="opening.php" style="color:#9D1F45 !important">Opening Ceremonies</a>
            <a href="pnrdc.php" style="color:#9D1F45 !important">Philippine Nuclear Research and Development Conference</a>
            <a href="map.php" style="color:#9D1F45 !important">PNRI Interactive Map</a>
            <a href="contests.php"style="color:#9D1F45 !important">Contests</a>
            <a href="exhibit.php"style="color:#9D1F45 !important">Technical Exhibits</a>
            <a href="closing.php" style="color:#9D1F45 !important">Closing Ceremonies</a> -->
            <a href="schedule.php"style="color:#9D1F45 !important">Schedule</a>
            <a href="opening.php" style="color:#9D1F45 !important">Opening Ceremonies</a>
            <a href="pnrdc.php" style="color:#9D1F45 !important">Philippine Nuclear Science Olympiad</a>
            <a href="sessions.php" style="color:#9D1F45 !important">Technical Sessions</a>
            <a href="sessions.php" style="color:#9D1F45 !important">GAD Forum</a>
            <a href="map.php" style="color:#9D1F45 !important">Virtual Tour</a>
            <a href="exhibit.php"style="color:#9D1F45 !important">Technical Exhibits</a>
            <a href="closing.php"style="color:#9D1F45 !important">Closing Ceremonies</a>
            <!--<a href="#" >Feedback</a>-->

            
          </div>
        </li>

      <!-- <li class="lg-screen portal dropdown <?php echo ($lastUriSegment == 'souvenir.php'?'active':'')?>"><a href="https://aew.pnri.dost.gov.ph/aew/2023/souvenir.php">SOUVENIR PROGRAM</a>
      </li> -->
      <li class="lg-screen portal dropdown <?php echo ($lastUriSegment == 'souvenir.php'?'active':'')?>"><a href="souvenir.php">SOUVENIR PROGRAM</a>
      </li>
      <li class="lg-screen portal"><a href="#footer" >FOLLOW US</a></li>

      <li class="portal" style="margin-left: auto;pointer-events: none;">
        <img src="Assets for Webdesign/DOST_logo.png" class="clogo">
        <img src="Assets for Webdesign/PNRI_logo.png" class="clogo">
      </li>

      <li class="burger" onclick="$('#burger-menu').toggle()">
         <span class="material-icons">reorder</span>
      </li>
    
    </ul>

    <div id="burger-menu" style="border-bottom: 4px solid #9D1F45;">
      <a href="https://aew.pnri.dost.gov.ph/aew/2023">HOME</a>
      <a href="#">ABOUT</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/aew.php">&emsp;Overview</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/news.php">&emsp;News</a>
      <!--<a href="https://aew.pnri.dost.gov.ph/aew/2022">&emsp;AEW Over the Years</a>-->
      <?php if($lastUriSegment == '') {?>
            <a href="#carusel">&emsp;AEW Over the Years</a>
          <?php } else {?>
            <a href="https://aew.pnri.dost.gov.ph/aew/2023#carusel">&emsp;AEW Over the Years</a>
          <?php } ?>
      <a href="#">ACTIVITIES</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/schedule.php">&emsp;Schedule</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/opening.php">&emsp;Opening Ceremonies</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/pnrdc.php" style="margin-left:15px;border-bottom: 0px solid #9D1F45 !important">Philippine Nuclear Science Olympiad</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/map.php" style="border-top: 1px solid #9D1F45">&emsp;Technical Sessions</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/contests.php">&emsp;Virtual Tour</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/exhibit.php">&emsp;Technical Exhibits</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/closing.php">&emsp;Closing Ceremonies</a>
      <a href="https://aew.pnri.dost.gov.ph/aew/2023/souvenir.php">SOUVENIR PROGRAM</a>
      <a href="#footer" >FOLLOW US</a>
    </div>
  </div>

