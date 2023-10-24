<!doctype html> 
<?php

session_start();

?>
<html lang="en"> 
<head> 
    <meta charset="UTF-8" />
    <meta property="og:image" content="https://aew.pnri.dost.gov.ph/aew/2022/Assets for Webdesign/aew_logo_no_date.png" />
<meta name="viewport" content= "width=device-width, user-scalable=no">
<meta property="og:description" content="AEW49 Virtual Tours. Learn about the facilities of PNRI" />

<meta property="og:url"content="https://aew.pnri.dost.gov.ph/aew/2022/" />

<meta property="og:title" content="Atomic Energy Week 50 Virtual Tour" />

    <title>AEW50 Virtual Tour</title>
    <link href="assets/AEW50-Favicon01.png" rel="icon">
    <link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="dist/phaser.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="jquery.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <style type="text/css">
      /* fallback */
      @font-face {
        font-family: 'Material Icons';
        font-style: normal;
        font-weight: 400;
        src: url(assets/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
      }

      .material-icons {
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        line-height: 1;
        letter-spacing: normal;
        text-transform: none;
        display: inline-block;
        white-space: nowrap;
        word-wrap: normal;
        direction: ltr;
        -webkit-font-feature-settings: 'liga';
        -webkit-font-smoothing: antialiased;
      }

      :root {
        --pixel-size: 6;
      }


      #question_danger{
        display: none;
        color: #c5421a;
        text-align: center;
        font-size: 16pt;
        bottom: -6em;
        height: 0px;
    }



      @font-face {
       font-family: 'VT323', monospace;
    }


      body {
          margin: 0;
         font-family: 'VT323', monospace;
          overflow: hidden;
      }
      canvas {
        border: 4px solid;
        
      }

        #scene_box{
            width: calc(800px - 2em);
            margin: auto;
            /*background: #c7ffe0;*/
            background: #ffdbbc;
            border: 4px solid;
            padding: 1em;
            position: absolute;
            cursor: pointer;
            min-height: 100px;
            height: 100vh;
            width:100vw;
            z-index: 1;
        }
        .close{
          cursor: pointer;
          position: absolute;top: 0;right:0.3em;
        }
        .close:hover{
          color: #f9a11c;
        }
        #modal{
          display: none;
        }
        

        .character{
          width: calc(64px * var(--pixel-size));
          height: calc(64px * var(--pixel-size));
          overflow: hidden;
          margin: auto;
          margin-left: 53%;
        }

        .character-sm{
          --pixel-size: 3;
          width: calc(64px * 3);
          height: calc(64px * 3);
          overflow: hidden;
          margin: auto;
          margin-left: 53%;

        }

        .smile {
           margin-top: calc(-64px * 3);
        }

        .Character_spritesheet {
          -webkit-animation: moveSpritesheet 1s steps(2) infinite;
          animation: moveSpritesheet 1s steps(2) infinite;
          width: calc(128px * var(--pixel-size));
          /*position: absolute;*/
        }

        .pixelart {
          -ms-interpolation-mode: nearest-neighbor;
          image-rendering: -moz-crisp-edges;
          image-rendering: pixelated;
        }

        .pixel, .pixel2 {
  font-size: 25px;
  color: white;
  height: auto;
  margin: 10px;
  font-family: 'VT323';
  
  position: relative;
  display: inline-block;
  vertical-align: top;
  text-transform: uppercase;
  
  cursor: pointer;
  
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.pixel:active, .pixel2:active {
  top: 2px;
}

.pixel {
  line-height: 0;
  
  image-rendering: optimizeSpeed;
  image-rendering: -moz-crisp-edges; /* Firefox */
  image-rendering: -o-crisp-edges; /* Opera */
  image-rendering: -webkit-optimize-contrast; /* Webkit (non-standard naming) */
  image-rendering: crisp-edges;
  -ms-interpolation-mode: nearest-neighbor; /* IE (non-standard property) */
  
  border-style: solid;
  border-width: 20px;
  -moz-border-image: url(https://i.imgur.com/sREM8Yn.png) 20 stretch;
  -webkit-border-image: url(https://i.imgur.com/sREM8Yn.png) 20 stretch;
  -o-border-image: url(https://i.imgur.com/sREM8Yn.png) 20 stretch;
  border-image: url(https://i.imgur.com/sREM8Yn.png) 20 stretch;
}

.pixel p {
  display: inline-block;
  vertical-align: top;
  position: relative;
  width: auto;
  text-align: center;
  margin: -20px -20px;
  line-height: 20px;
  padding: 10px 20px;
  
  background: #f9a11c;
  background:
    linear-gradient(135deg, transparent 10px, #f9a11c 0) top left,
    linear-gradient(225deg, transparent 10px, #f9a11c 0) top right,
    linear-gradient(315deg, transparent 10px, #f9a11c 0) bottom right,
    linear-gradient(45deg,  transparent 10px, #f9a11c 0) bottom left;
  background-size: 50% 50%;
  background-repeat: no-repeat;
  background-image:
    radial-gradient(circle at 0 0, rgba(204,0,0,0) 14px, #f9a11c 15px),
    radial-gradient(circle at 100% 0, rgba(204,0,0,0) 14px, #f9a11c 15px),
    radial-gradient(circle at 100% 100%, rgba(204,0,0,0) 14px, #f9a11c 15px),
    radial-gradient(circle at 0 100%, rgba(204,0,0,0) 14px, #f9a11c 15px);
}

.pixel2 {
  position: relative;
  display: block;
  margin: 10px;
  font-family: 'VT323';
  text-transform: uppercase;
  
  font-size: 25px;
  color: white;
}
.person{
  margin-top:0.5em;
  font-size: 30pt;
  color: black; 
}
.dialog{
  color: #464646;
  font-size:17pt;
  text-align: justify;
  line-height: 1.5;
}

.dialog_box{
  min-height:100px;border: 9px solid #d4935d;max-width: 600px; width: calc(100vw - 4em);
  margin: auto;background: white;border-radius: 8px;padding: 2em;
  padding-top: 0.4em;margin-top: 5rem;font-size: 21pt;font-weight: 500;
}
.pixel2::before {
  content: "";
  display: block;
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: -10px;
  right: -10px;
  background: #f9a11c;
  z-index: -1;
}

.pixel2::after {
  content: "";
  display: block;
  position: absolute;
  top: 4px;
  bottom: 4px;
  left: -6px;
  right: -6px;
  background: #f9a11c;
  z-index: -1;
}

.pixel2 {
  padding: 10px 10px;
  position: relative;
  background: #f9a11c;
  width: auto;
  z-index: 2;
}

/* width */
.modal::-webkit-scrollbar {
  width: 7px;
}

/* Track */
.modal::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.modal::-webkit-scrollbar-thumb {
  /*background: #08bf68;*/ 
  background:#d4935d;
}

/* Handle on hover */
.modal::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

#info::-webkit-scrollbar {
  width: 7px;
}

/* Track */
#info::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
#info::-webkit-scrollbar-thumb {
  background: #08bf68; 
}

/* Handle on hover */
#info::-webkit-scrollbar-thumb:hover {
  background: #555; 
}


.pixel2:hover{
  background: #b9730a;
}
.pixel2:hover::after{
  background: #b9730a;
}
.pixel2:hover::before{
  background: #b9730a;
}

#places{
  display: none;
  position: absolute;
  color: #080505;
  font-weight: 900;
  font-size: 30pt;
  left: 0.8em;
  z-index: 30;
  padding: 0.2em;
  top: 0.1em;
  background: white;
  border: 4px solid #f9a11c;
  /*z-index: 1;*/
}
#person{
  margin-bottom:0.5em;
}
#modal{  
  width: 100vw;
  height: 100vh;
  position: absolute;
  background: #efffe538;
  z-index: 4;
}
::-webkit-input-placeholder { /* Edge */
  font-family: 'VT323';
  font-size: 13pt;
}

::placeholder {
  font-family: 'VT323';
  font-size: 13pt;
}
#seconds{
  text-align: center;
}
.modal{
  height: 100vh;
  max-height: 600px;
  overflow-y: scroll;
  position: relative;
  max-width: 600px;
  width: calc(100vw - 4em);
  /*background: #efffe5;*/
  background: #ffdbbc; 
  margin: auto;
  padding: 2em;
  margin-top: 6em;
  border: 4px solid;
}
.modal-title{
  margin-top: -0.5em;
}
.question{
  max-width: 544px;
  width: calc(100% - 1em);
  background: #2b6f97;
  color: white;
  padding: 0.5em;
  margin-bottom: 0.5em;
  border: 1px solid #2b6f97;
  border-radius: 10px;
}

.question >div:first-child {
    color: #bcddf1;
}
#start_button{
  width: 150px; text-align: center; margin:auto;margin-top: 2em; padding: 1em;
}
#content{
  display: none;
}
textarea {
  display: block;
  box-sizing: padding-box;
  overflow: hidden;
  padding: 10px;
  width: 250px;
  font-size: 14px;
  margin: 50px auto;
  border-radius: 6px;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
  border: 0;
}
#question_success{
  display: none;
  position: absolute;color: green;font-size: 16pt;bottom: -6em;
}
textarea:focus {
  border: none;
  outline: none;
}
.form-btn{
  width: 100px; text-align: center; margin:auto;margin-top: 2em;
}
.form-control{
  width: calc(100% - 2em);
  border: 2px solid #fff;
  height: 3em;
  border-radius: 0;
  padding-left: 1em;
  box-shadow: 2px 2px 8px rgb(0 0 0 / 30%);
}

.screenbtn{
  cursor: pointer;
  height: 60px;
  width: 60px;
  background: #f9a11c73;
  border-radius: 50%;
  color: black;
  position: absolute;
  z-index: 111111;
  border: 2px solid;
  font-size: 20pt;
  font-weight: 800;
  font-family: fantasy;
  background-size: contain;
}
.up{
  bottom: 4em;
  left: 4em;
  background-image: url('Tiles/up.png');
}
.zoom_control{
  cursor: pointer;
  height: 40px;
  width: 40px;
  background: #f9a11c82;
  border: 2px solid;
}
.home_title{
  font-weight: 700;color: #f98c13;font-size: 60pt;margin-bottom: 0;line-height:1px;margin-top: 29px;text-align: center;
}
.logo{
  width: calc(100vw - 1em);
  /*max-width:500px;*/
  max-width:250px;
}
.down{
  bottom: 1.4em;
  left: 4em;
  background-image: url('Tiles/down.png');
}
.left{
 bottom: 2.7em;
  left: 1.8em;
  background-image: url('Tiles/left.png');
}
.right{
bottom: 2.7em;
  left: 6.2em;
  background-image: url('Tiles/right.png');
}
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}

.sc{
  position:absolute;bottom: 0;z-index: 0;
  display: none;

}
@-webkit-keyframes moveSpritesheet {
  from {
    transform: translate3d(0px, 0, 0);
  }
  to {
    transform: translate3d(-100%, 0, 0);
  }
}
@media (max-width:864px){
#places{
  font-size: 25pt;
  left: 0.8em;
 }
}

/*@media (max-width:442px){ */
	@media (max-width:767px){
 
 .person{
  font-size: 25pt;
 }
 .dialog_box{
  padding: 1em;
  margin-left: 0;
  margin-top: 3rem;
 }
 .dialog{
  font-size:13pt;
 }
 #start_button{
  padding:0.2em
 }
 #return_button{
  padding:0.2em;
  font-size: 20px;
  width: 120px !important;
 }
 .character{
  margin-left: 25%;
 }
 .home_title{
  font-size: 25pt;
 }
}
#info{
  display: none;
}

@media (max-height:767px){ 
 .modal{
  /*margin-top: 0;*/
 }
}

    </style>
</head>
<body>
<audio id="bg" loop>
  <source src="game retro.mp3" type="audio/mpeg">
<p>If you are reading this, it is because your browser does not support the audio element.     </p>
</audio>

  <div id="info" style="position: absolute; min-height: 100vh; max-height: 100vh; overflow-y:scroll; width: calc(100vw - 4em); max-width:600px; padding:2em; /*background: #d6e3a5;*/background: #ffdbbc; z-index: 3">
  
    <h2 style="margin: 0;text-align: right; " id="lbl_name"><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h2>
    <h3 style="margin-top: 0; text-align: right;" id="lbl_email"><?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?></h3>
    <!-- PNRI Interactive Map PDF-->
    <div style="position: relative; width: 100%; height: 0; padding-top: 141.4286%; padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden; border-radius: 8px; will-change: transform;">  
      <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"    
        src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFTgdy8Ruw&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">  
      </iframe>
    </div>
    <!--<img src="facilities/info.png" style="width: calc(100vw - 4em);max-width: 600px;">-->
  </div>

  <div id="modal">
    <div class="modal animate__animated  animate__zoomIn">
      <h1 class="close" onclick="hideModal()"><span class="material-icons md-24">close</span></h1>
      <h1 class="modal-title"></h1>


      <div class="modal-body" style="margin-top: 3em;">
        <div id="modal-person" class="person">Security</div>
        <div id="modal-dialog" class="dialog">
          <p>Hold it right there! You need to provide your name and email address.</p>
        </div>

        <input class="inputs form-control" id="name" type="text" placeholder="NAME" value="<?php echo (isset($_GET['name'])?$_GET['name']:'')?>">
        <br><br>
        <input class="inputs form-control" id="email" type="email" placeholder="EMAIL" value="<?php echo (isset($_GET['email'])?$_GET['email']:'')?>">

        <h5 id="question_danger">Provide both name and email!</h5>
        
        <div class="inputs pixel2 form-btn" onclick="scene_graphics(2)">SUBMIT</div>
        
        
        <div id="guard" class="character-sm" style="/* margin-top: -24rem; */margin-left: 0;/* position: absolute; */">
          <img class="Character_spritesheet" src="smarty_animations/guard_stand.png" alt="smarty">
        </div>
      </div>
      <div id="content">
        <div id="video_div" style="position: relative;  overflow: hidden;  width: calc(100%; - 1em -10px);  padding-top: 56.25%; border: 5px solid #f9a11c;">
          <iframe id="video_frame" class="responsive-iframe"  src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>

        <!-- General Medina Contents -->
        <div id="static_frame" style="position: relative;  overflow: hidden;  display:none; width: calc(100%; - 1em -10px); height: 400px;  padding-top: 56.25%; border: 5px solid #f9a11c;">
          <iframe class="responsive-iframe"  src="https://www.canva.com/design/DAExdiiK3Io/view?embed" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>


        <div>
          <!--<h2>Community Questions:</h2>-->
           <h2>Virtual Tour FAQs:</h2>
          <div style="font-size: 16pt;" id="question_list">
            

<!--  <div>
              <textarea id="question" class='autoExpand' rows='3' data-min-rows='3'  autofocus style="max-width:560px;width: calc(100% - 2em - 10px);border: 2px solid #fff;height: 5em; border-radius: 0;" placeholder="Ask a question. We'll email you the answer."></textarea>
              <div class="pixel2 form-btn" onclick="submitQuestion()">SUBMIT</div>
              <h5 id="question_success" >Question submitted!</h5>
            </div> -->
          </div>
        </div>

        <div id="techEx"><h2>Exhibit(s) you can find in this facility:</h2><div style="display:flex"><img id="chemEx" src="../2022/assets/iRadiate-1-inFrame.jpg" style="position: relative; width: calc(100%; - 1em -10px); height: 400px; border: 2px solid #f9a11c;margin:3px"> <img id="nmrsEx" src="../2022/assets/NMRS-Technical Exhibit.jpg" style="position: relative; width: calc(100%; - 1em -10px); height: 400px; border: 2px solid #f9a11c;margin:3px"> <img id="rpssEx" src="../2022/assets/RPSS-Technical Exhibit.jpg" style="position: relative; width: calc(100%; - 1em -10px); height: 400px; border: 2px solid #f9a11c;margin:3px"></div></div>
      
      </div>
    </div>
  </div>
    
  <div id="scene_box">
  <div style="position: absolute;width: 100vw;">
          <a id="return_button" class="pixel2" style="text-decoration: none;width:150px" href="https://aew.pnri.dost.gov.ph/aew/2022/">RETURN TO SITE</a>
        </div>
    <div style="text-align: center;margin-top: 0;">
      <img src="../2022/assets/AEW50_Logo-with-DOST-PNRI.png" class="logo">
      <p id="date" class="home_title">INTERACTIVE MAP</p>
    </div>
    <!--<img src="../2022/Assets for Webdesign/Graphics/shape 3.png" style="opacity:0.3;position: absolute;left: -12vw;top: 10vh;width: 24vw;">-->
    <img src="../2022/Assets for Webdesign/Graphics/AEW50 Brand Elements (2).png" style="opacity:0.3;position: absolute;left: 6vw;top: 19vh;width: 10vw;">
    <img src="../2022/Assets for Webdesign/Graphics/woman-laptop.png" style="opacity:0.3;position: absolute;left: 0vw;bottom:0; width: 25vw;">
    <img src="../2022/Assets for Webdesign/Graphics/shape 1.png" style="opacity:0.3;position: absolute;right: -20vw;top:22vh; width: 25vw;">
    <img src="../2022/Assets for Webdesign/Graphics/shape 2.png" style="opacity:0.3;position: absolute;right: -6vw;top:-14vh; width: 25vw;">
    <img src="../2022/Assets for Webdesign/Graphics/man-earphones.png" style="opacity:0.3;position: absolute;right: 4vw;bottom:0; width: 22vw;">
    <!--<img src="../2022/Assets for Webdesign/Graphics/asterisk.png" style="opacity:0.3;position: absolute;right: 8vw;top:14vh; width: 12vw;">-->
    <img src="../2022/Assets for Webdesign/Graphics/AEW50 Brand Elements.png" style="opacity:0.3;position: absolute;right: 4vw;top:7vh; width: 12vw;">
      <div class="message">
        <div class="dialog_box">
          <div id="person" class="person">Smarty</div>
          <div id="dialog" class="dialog"></div>
        </div>
        <div style="position: absolute;width: 100vw;">
          <div id="start_button" class="pixel2" onclick="proceed()">START TOUR</div>
        </div>
           
           <div class="character">
            <img class="Character_spritesheet" src="smarty_animations/intro2.png" alt="smarty">           
          </div>
          
        </div>
    </div>
    <div style="width:100vw;height:100vh;background: black;background: #efffe5">
      <div id="places"  style="display: flex">
        <div style="display: grid;">
        <span style="font-size: 17pt;">Progress:</span>
        <span id="counter">0/11</span>
      </div>

      <div style="margin:auto; margin-left:0.2em">
        <svg xmlns="http://www.w3.org/2000/svg" width="48px" height="48px" viewBox="0 0 48 48" style="cursor: pointer;" onclick="$('#info').toggle()">
        <style>
          /* <![CDATA[ */
          #MenuFrame rect,
          #MenuText path {
                fill: rgb(31, 38, 46);
          }
          #MenuLines rect,
          #MenuLines polygon {
                fill: currentColor;
          }
          /* ]]> */
        </style>
        <g id="MenuBg">
          <rect x="2" y="8" fill="#f9a11c" width="44" height="38"/>
        </g>
        <g id="MenuFrame">
          <rect x="2" y="6" width="4" height="2"/>
          <rect x="42" y="6" width="4" height="2"/>
          <rect x="0" y="8" width="2" height="38"/>
          <rect x="46" y="8" width="2" height="38"/>
          <rect x="2" y="46" width="44" height="2"/>
        </g>
        <g id="MenuLines">
          <rect x="14" y="17" width="20" height="3"/>
          <rect x="14" y="25" width="20" height="3"/>
          <polygon points="28,33 14,33 14,36 29.5,36"/>
        </g>
        
        <g id="MenuText">
          <path d="M8.16941,1.8945h1.23828l2.21875,2.22656l2.21875-2.22656h1.23828v6.10547h-1.23828V3.60934 l-2.21875,2.13672L9.40769,3.60934v4.39062H8.16941V1.8945z"/>
          <path d="M17.66975,1.8945h5.19922v1.08594h-3.96094v1.21875h3.50781v1.01953h-3.50781v1.69922H22.951v1.08203 h-5.28125V1.8945z"/>
          <path d="M25.16623,1.8945h1.23828l3.80469,1.99219V1.8945h1.23828v6.10547H30.2092V5.19919l-3.80469-1.98047 v4.78125h-1.23828V1.8945z"/>
          <path d="M33.79153,1.8945h1.23828v3.36328c0,0.27607,0.0377,0.52148,0.11328,0.73633 c0.07549,0.21484,0.18809,0.39648,0.33789,0.54492c0.14971,0.14844,0.33525,0.26113,0.55664,0.33789 c0.22129,0.07686,0.4791,0.11523,0.77344,0.11523c0.2916,0,0.54883-0.03838,0.77148-0.11523 c0.22266-0.07676,0.40879-0.18945,0.55859-0.33789c0.14971-0.14844,0.26231-0.33008,0.33789-0.54492 c0.07549-0.21484,0.11328-0.46025,0.11328-0.73633V1.8945h1.23828v3.51172c0,0.40107-0.06777,0.76562-0.20312,1.09375 c-0.13545,0.32812-0.33203,0.60938-0.58984,0.84375s-0.57363,0.41543-0.94727,0.54297 c-0.37373,0.12754-0.80019,0.19141-1.2793,0.19141c-0.4792,0-0.90566-0.06387-1.2793-0.19141 c-0.37373-0.12754-0.68945-0.30859-0.94727-0.54297S34.13,6.82809,33.99465,6.49997 c-0.13545-0.32812-0.20312-0.69268-0.20312-1.09375V1.8945z"/>
        </g>
      </svg>  
      </div>

</div>
<div style="position: absolute;width: 100vw;left:13em">
          <a id="return_button2" class="pixel2" style="text-decoration: none;width:150px" href="https://aew.pnri.dost.gov.ph/aew/2022/">RETURN TO SITE</a>
        </div>
      <div style="width:100vw;height:100vh;max-width: 1696px;margin:auto;position: relative;" id="game-container" style="text-align: center;">
      </div>

    </div>
   <div class="sc"><button class="screenbtn up"></button></div>
   <div class="sc"><button class="screenbtn down"></button></div>
   <div class="sc"><button class="screenbtn left"></button></div>
   <div class="sc"><button class="screenbtn right"></button></div>

<div style="position:absolute;bottom: 7em;right: 0;">
  <button  class="zoom_control" onclick="action ='zoom';"><span class="material-icons">add</span></button>
</div>
<div style="position:absolute;bottom: 5.3em;right: 7px;font-weight: 600;"> Zoom</div>
<div style="position:absolute;bottom: 2em;right: 0;"><button  class="zoom_control" onclick="action ='zoom_out';"><span class="material-icons">minimize</span></button></div>

<script type="text/javascript">
  var timeLeft = 3;
  var progress = [];
  var action = 0;

  function setAction(){
    action ='zoom';
  }
  function countdown() {
    timeLeft--;
    document.getElementById("seconds").innerHTML = String( timeLeft );
    if (timeLeft > 0) {
      setTimeout(countdown, 1000);
    }
    else{
      $('#modal').hide();
    }
  };



  $('#places').hide();
  $('#return_button2').hide();
   var i = 0, timeOut = 0;
   var up = 0;
   var left = 0;
   var right = 0;
   var down = 0;
  $(document).ready(function() {
    var i = 0, timeOut = 0;
     //Game config here

   $('#bg').prop('volume', '0.2');
    $('.up').on('mousedown touchstart', function(e) {
      $(this).addClass('active');
      timeOut = setInterval(function(){
        if(modal == 0){
          up =1;
        }
        else{
         up =0; 
        }
        update();

      }, 100);
    }).bind('mouseup mouseleave touchend', function() {
      $(this).removeClass('active');
      up = 0;
      clearInterval(timeOut);
    });

   

    $('.right').on('mousedown touchstart', function(e) {
      $(this).addClass('active');
      timeOut = setInterval(function(){
        if(modal == 0){
          right =1;
        }
        else{
         right =0; 
        }
        update();

      }, 100);
    }).bind('mouseup mouseleave touchend', function() {
      $(this).removeClass('active');
      right = 0;
      clearInterval(timeOut);
    });


    $('.left').on('mousedown touchstart', function(e) {
      $(this).addClass('active');
      timeOut = setInterval(function(){
        if(modal == 0){
          left =1;
        }
        else{
         left =0; 
        }
        update();

      }, 100);
    }).bind('mouseup mouseleave touchend', function() {
      $(this).removeClass('active');
      left = 0;
      clearInterval(timeOut);
    });

    $('.down').on('mousedown touchstart', function(e) {
      $(this).addClass('active');
      timeOut = setInterval(function(){
        if(modal == 0){
          down =1;
        }
        else{
         down =0; 
        }
        update();

      }, 100);
    }).bind('mouseup mouseleave touchend', function() {
      $(this).removeClass('active');
      down = 0;
      clearInterval(timeOut);
    });
  
  });


var scene = 0;

//Allowed indices. Modal will pop-up only if collided with tiles with the following indices
var allowed = [
1651, 1554, 1737, 1694, /*gen. Medina*/
1597, 2233, 2234, /*NART*/
1640, 2031, 2032, /*TC-99*/
1683, 1777, 1691, 1649, /*NATAS*/
1726, 1719, 1633,  /*EBEAM*/
1727, 2377, 2379,  /*CO-60*/
1598, 1740, 1826, /*RPSS*/
1641, 2385, 2388, 2388, /*PRR1*/
1684, 2174, 2172, /*ARC*/
1555, 2394, 2396,  /*SOMER*/
1556, 1835, 1833,/*HGMS*/
];
var scene_dialog = [ 

<?php 
      if(isset($_SESSION['email']) && !empty($_SESSION['email'])){         
          echo '\'Welcome back, <u>'.$_SESSION['name'].'</u>! Are you ready explore more of PNRI facilities with me? Click the "Start Tour" button to play/start again.\'';
      }
      else{
        echo '\'Hello! My name is Smarty. I will be your guide during this Virtual Tour. Click the "Start Tour" button to begin.\'';
      }

    ?>,
'LETS GO!!',
'Hold it right there! You need to provide your name and email address.',
'My name is <input type="text" placeholder=""> <br> and you can contact me at <input type="email">'];
var scene_person = [
'Smarty',
'Smarty',
'Security Guard',
'???'
];
var hit = 0;
var modal = 0;
var facility = '';
$('#person').text(scene_person[0]);
$('#dialog').html(scene_dialog[0]);
 /*$('#scene_box').hide(1);*/
/**
 * Author: Michael Hadley, mikewesthad.com
 * Asset Credits:
 *  - Tuxemon, https://github.com/Tuxemon/Tuxemon
 */


function submitQuestion(){
  let question =  $('#question').val();

  if(question == ''){
    $('#question_success').text('Invalid question!').css('color', 'red').show().delay(3000).fadeOut();
  }
  else{
     $.ajax({
        url: "<?php echo 'https://aew.pnri.dost.gov.ph/aew/2022/api.php'; ?>",
        data: {action:'question', facility:facility, question:question},
        type: 'POST',
        async: false,
        success: function(d){
         $('#question').val('');
          $('#question_success').text('Question submitted!').css('color', 'green').show().delay(3000).fadeOut();
        }
      });
  }
 
}

function getQuestions(facility){
  $.ajax({
    url: "<?php echo 'https://aew.pnri.dost.gov.ph/aew/2022/api.php'; ?>",
    data: {action:'get_question', facility:facility},
    type: 'POST',
    async: false,
    success: function(d){
      $('.question, .note').remove();
      if(d == ''){
        
      }
      else{
        $('#question_list').prepend(d);  
      }
      
    }
  });
}

function scene_graphics(scene){
  $('#video_div').show();
  $('#static_frame').hide();
  switch(scene){
    case 1:
    
    <?php 
      if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
          echo 'modal = 0;getUser();document.getElementById(\'bg\').play();';
      }
      else{
        echo '
          $(\'.close\').hide();
          modal = 1;
          $(\'.modal-title\').text(\'REGISTER\');
          $(\'#scene_box\').hide();
          $(\'#places\').show();
          $(\'#modal\').show();
        ';
      }

    ?>
      
    break;
    case 2:

      let name = $('#name').val();
      let email = $('#email').val();

      if(name == '' || email == ''){
        $('#question_danger').text("Please provide both Name and Email!");
        $('#question_danger').show();
      }
      else{


         var hasError = false;
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       
            
          if(email == '') {
              hasError = true;
          } 
          else if(!emailReg.test(email)) {
              hasError = true;
          }
       
          if(hasError == true) { 
            $('#question_danger').text("Invalid Email!").show();
          }
          else{
            document.getElementById('bg').play();
            $('#lbl_name').text(name);
            $('#lbl_email').text(email);
            $('.close').show();
            $('#question_danger').hide();
            $('#modal-dialog').html('<p>Welcome <b><u>'+name+'</u></b>! Please take time to explore the tour and learn as much as you can!</p><h1 id="seconds">3</h1>');
            setTimeout(countdown, 1000);
            $('.inputs').remove();
            $('#guard > img').addClass('smile');
            modal = 0;
            submit_name(name, email);
          }       
      }
        

    break;
    case 1651:
    case 1554:
    case 1737:
    case 1694:
    /*GENERAL MEDINA*/
      facility = 'General Medina Monument';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      $('#video_div').hide();
      $('#static_frame').show();
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').hide();

    break;
    case 2233:
    case 2234:
    case 1597:
      facility = 'Nuclear Administration, Regulatory and Training Building';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/kOUkJNaWyfg';
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').hide();
      
    break;
    case 1640:
    case 2031:
    case 2032:
      facility = 'Technetium-99M Generator Facility';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/3706jI-hm1U';
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').hide();
      
    break;
    case 1683:
    case 1777:
    case 1691:
    case 1649:
      facility = 'Nuclear Analytical Techniques Applications Section';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/3cqLc7zheCE';
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').hide();
      
    break;
    case 1727:
    case 2377:
    case 2379:
      facility = 'Electron Beam Irradiation Facility';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/ENzLXkTyobA';
      getQuestions(facility);
      document.getElementById('bg').pause();
      $('#techEx').hide();
    break;
    
    case 1726:
    case 1719:
    case 1633:
      facility = 'Cobalt-60 Multipurpose Irradiation Facility';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/ENzLXkTyobA';
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').hide();
      
    break;
    case 1598:
    case 1740:
    case 1826:
      facility = 'Radiation Protection Services';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/iQhqlPhgQaU';
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').show();
      $('#rpssEx').show();
      $('#nmrsEx').hide();
      $('#chemEx').hide();
      
    break;

    case 1684:
    case 2174:
    case 2172:
      facility = 'Atomic Research Center';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/aRnE9eR8z18';
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').show();
      $('#rpssEx').hide();
      $('#nmrsEx').show();
      $('#chemEx').show();
      
    break;
    case 1641:
    case 2385:
    case 2388:
    case 2388:
      facility = 'Philippine Research Reactor - 1';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/OjCRaITLeHA';
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').hide();
      break;
    case 1555:
    case 2394:
    case 2396:
      facility = 'System for Online Monitoring of Environmental Radiation (SOMER)';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/AWItrRcTdpc';
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').hide();
      break;
    case 1556:
    case 1835:
    case 1833:
      facility = 'Humane Growth of Nuclear Science';
      counter(facility);
      progress.push(facility);
      $('.modal-title').text(facility);
      $('.modal-body').remove();
      $('#content').show();
      document.getElementById('video_frame').src = 'https://www.youtube.com/embed/hxcvnUY9Xso';
      getQuestions(facility);document.getElementById('bg').pause();
      $('#techEx').hide();
      break;
    case 4:
    $('#scene_box').hide(300);
    break;
  }


}

function counter(faci){
  if(modal != 1 && $.inArray( faci, progress ) == -1){
    modal = 1;
    hit+=1;
    $('#counter').text(hit+'/11'); 
  }  
}
function getUser(){

}
function submit_name(name, email){
  $.ajax({
    url: "<?php echo 'https://aew.pnri.dost.gov.ph/aew/2022/api.php'; ?>",
    data: {name:name, email:email, action:'register'},
    type: 'POST',
    async: false,
    success: function(d){}});
}
function proceed(){
  $('.sc').show();
  $('#scene_box').hide();
  $('#places').show();
  $('#return_button2').show();
  scene_graphics(1);
  /*  scene +=1;
    $('#dialog').text(scene_dialog[scene]);
    $('#person').html(scene_person[scene]);
    scene_graphics(scene);
    if(scene == 1){
      $('#start_button').text('NEXT');  
    }*/
    /*
    $('#smarty').attr('src', 'smarty_glow.png');
    $('#scene_box').delay(1).hide(300);*/
}

/*function resize() {
    var canvas = document.querySelector("canvas");
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;http://localhost/aew/2022/Assets%20for%20Webdesign/Graphics/shape%201.png
    var windowRatio = windowWidth / windowHeight;
    var gameRatio = game.config.width / game.config.height;

    if(windowRatio < gameRatio){
        canvas.style.width = windowWidth + "px";
        canvas.style.height = (windowWidth / gameRatio) + "px";
    }
    else {
        canvas.style.width = (windowHeight * gameRatio) + "px";
        canvas.style.height = windowHeight + "px";
    }
}*/

window.onload = function() {
   
}

const config = {
  type: Phaser.AUTO,
  width: '100vw',
  height: '100vh',
  parent: "game-container",
  pixelArt: true,
  
  physics: {
    default: "arcade",
    arcade: {
      gravity: { y: 0 },
      debug:false
    }
  },
  scene: {
    preload: preload,
    create: create,
    update: update
  }
};

const game = new Phaser.Game(config);
let cursors;
let player;
let showDebug = false;

function preload() {
  this.load.image("tiles", "Tiles/tile-set2.png");
  this.load.image("tiles2", "Tiles/natas.png");
  this.load.tilemapTiledJSON("map", "map.json");
  this.load.atlas("atlas", "atlas.png", "atlas.json");

  
}

function create() {
  const map = this.make.tilemap({ key: "map" });
  const tileset = map.addTilesetImage("tile-set2", "tiles");
  const tileset2 = map.addTilesetImage("natas", "tiles2");
  const belowLayer = map.createStaticLayer("Below Player", tileset, 0, 0);
  const midGard = map.createStaticLayer("Midgard", tileset, 0, 0);
  const PNRI = map.createStaticLayer("PNRI", tileset2, 0, 0);
  const worldLayer = map.createStaticLayer("World", tileset, 0, 0);
  const pins = map.createStaticLayer("pins", tileset, 0, 0);
  
  PNRI.setCollisionByProperty({ collides: true });
  worldLayer.setCollisionByProperty({ collides: true });
  
  PNRI.setDepth(5);
  pins.setDepth(5);
  worldLayer.setDepth(5);

  
  const spawnPoint = map.findObject("Objects", obj => obj.name === "Spawn Point");
  player = this.physics.add
    .sprite(spawnPoint.x, spawnPoint.y, "atlas", "misa-back")
    .setSize(32, 32);

  this.physics.add.collider(player, worldLayer);
  this.physics.add.collider(player, PNRI, HitScript);

  const anims = this.anims;
  anims.create({
    key: "misa-left-walk",
    frames: anims.generateFrameNames("atlas", { prefix: "misa-left-walk.", start: 0, end: 3, zeroPad: 3 }),
    frameRate: 10,
    repeat: -1
  });
  anims.create({
    key: "misa-right-walk",
    frames: anims.generateFrameNames("atlas", { prefix: "misa-right-walk.", start: 0, end: 3, zeroPad: 3 }),
    frameRate: 10,
    repeat: -1
  });
  anims.create({
    key: "misa-front-walk",
    frames: anims.generateFrameNames("atlas", { prefix: "misa-front-walk.", start: 0, end: 3, zeroPad: 3 }),
    frameRate: 10,
    repeat: -1
  });
  anims.create({
    key: "misa-back-walk",
    frames: anims.generateFrameNames("atlas", { prefix: "misa-back-walk.", start: 0, end: 3, zeroPad: 3 }),
    frameRate: 10,
    repeat: -1
  });

  const camera = this.cameras.main;
  camera.startFollow(player);
  camera.setBounds(0, 0, map.widthInPixels, map.heightInPixels);

  cursors = this.input.keyboard.createCursorKeys();


  
}


function hideModal(){
  $('#modal').hide();
  $('#video_frame').attr('src', '');
  document.getElementById('bg').play();
  modal = 0;
}
  function HitScript(player, target){
  
    console.log(target.index);
    if($.inArray( target.index, allowed ) != -1){
      scene_graphics(target.index);
      modal = 1;
      $('#modal').show();
      
    }
  }

/*  function resize() {

    // layer.offset.x += 50;

    if (layer.displayWidth !== undefined)
    {
        var w = layer.displayWidth + 100;
        var h = layer.displayHeight + 100;
        layer.resize(w, h);
    }
    else
    {
        if (layer.width < 800)
        {
            var w = layer.width + 100;
            var h = layer.height + 100;
            layer.resize(w, h);
        }
    }
}*/

function update() {

  
  const speed = 500;
  const prevVelocity = player.body.velocity.clone();
  player.body.setVelocity(0);
  if(action == 'zoom' && this.cameras.main.zoom < 2.8){
    let camera = this.cameras.main;
    this.cameras.main.zoom += 0.2;
    action ='';
  }

  if(action == 'zoom_out' && this.cameras.main.zoom > 0.8){
    let camera = this.cameras.main;
    this.cameras.main.zoom -= 0.2;
    action ='';
  }
   
  


  if(modal ==0){
    if (cursors.left.isDown || left ==1) {
      player.body.setVelocityX(-speed);
        
    } else if (cursors.right.isDown || right ==1) {
      player.body.setVelocityX(speed);
        
       
    }

    if (cursors.up.isDown || up ==1) {
      player.body.setVelocityY(-speed);
    } else if (cursors.down.isDown || down ==1) {
      player.body.setVelocityY(speed);
    }
    player.body.velocity.normalize().scale(speed);
  }



  if (cursors.left.isDown || left ==1) {
      player.anims.play("misa-left-walk", true);
    } else if (cursors.right.isDown || right ==1) {
      player.anims.play("misa-right-walk", true);
    } else if (cursors.up.isDown || up ==1) {
      player.anims.play("misa-back-walk", true);
    } else if (cursors.down.isDown || down ==1) {
      player.anims.play("misa-front-walk", true);
    } else {
      player.anims.stop();

      if (prevVelocity.x < 0) player.setTexture("atlas", "misa-left");
      else if (prevVelocity.x > 0) player.setTexture("atlas", "misa-right");
      else if (prevVelocity.y < 0) player.setTexture("atlas", "misa-back");
      else if (prevVelocity.y > 0) player.setTexture("atlas", "misa-front");
    }
}


/*

function getScrollHeight(elm){
  var savedValue = elm.value
  elm.value = ''
  elm._baseScrollHeight = elm.scrollHeight
  elm.value = savedValue
}

function onExpandableTextareaInput({ target:elm }){
  if( !elm.classList.contains('autoExpand') || !elm.nodeName == 'TEXTAREA' ) return
  
  var minRows = elm.getAttribute('data-min-rows')|0, rows;
  !elm._baseScrollHeight && getScrollHeight(elm)

  elm.rows = minRows
  rows = Math.ceil((elm.scrollHeight - elm._baseScrollHeight) / 16)
  elm.rows = minRows + rows
}

document.addEventListener('input', onExpandableTextareaInput)*/

</script>

</body>
</html>