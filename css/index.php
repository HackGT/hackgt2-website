<?php
function isMobile() {
  return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>HackGT // Atlanta, GA // September 25-27, 2015</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta property="og:url" content="http://hackgt.com"/>
        <meta property="og:title" content="HackGT // Atlanta, GA // September 25-27, 2015"/>
        <meta property="og:image" content="http://i.imgur.com/LhXNAJA.png"/>
        <meta property="og:description" content="Discover the uncharted."/>
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <link rel="stylesheet" type="text/css" href="css/flashlight.css">;
        <script src="js/vendor/modernizr-2.7.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style type="text/css">
    #content {
      background-image: url('img/content-bg.png');
      background-repeat: no-repeat;
      background-position: top;
    }
    .slide {
      min-height: 100vh;
      max-width: 100%;
      display: block;
      padding: 40px;
    }
    p {
      color: white;
    }
    .row, .container {
      margin-left: 0px;
      margin-right: 0px;
      width: 100%;
    }
    .container {
      display: table;
      padding: 0px;
    }
    .vertical-center {
      min-height: 100vh;
      display: flex;
      align-items: center;
    }
      body {
        background-color: black;
      }
      .back-link a {
        color: #4ca340;
        text-decoration: none; 
        border-bottom: 1px #4ca340 solid;
      }
      .back-link a:hover,
      .back-link a:focus {
        color: #408536; 
        text-decoration: none;
        border-bottom: 1px #408536 solid;
      }
      h1 {
        text-transform: uppercase;
        font-family: 'Plak Black Extra Condensed', sans-serif;
        color: #FFFFFF;
        margin-bottom: 10px;
        font-size: 6em;
        letter-spacing: 5px;
        line-height: 1em;
        display: block;
        -webkit-text-shadow: 0px 0px 15px #222222;
        -text-shadow: 0px 0px 15px #222222;
        text-shadow: 0px 0px 15px #222222;
        -moz-text-shadow: 0px 0px 15px #222222;
        -o-text-shadow: 0px 0px 15px #222222;
        -ms-text-shadow: 0px 0px 15px #222222;
        -khtml-text-shadow: 0px 0px 15px #222222;
        margin: 0px !important;
      }
      h2 {
        font-family: 'Lato', sans-serif;
        color: #97b4ca;
        font-size: 1.3em;
        margin-bottom: 10px;
        -webkit-text-shadow: 0px 0px 15px #DDDDDD;
        -text-shadow: 0px 0px 15px #DDDDDD;
        text-shadow: 0px 0px 15px #DDDDDD;
        -moz-text-shadow: 0px 0px 15px #DDDDDD;
        -o-text-shadow: 0px 0px 15px #DDDDDD;
        -ms-text-shadow: 0px 0px 15px #DDDDDD;
        -khtml-text-shadow: 0px 0px 15px #DDDDDD;
      }
      h3 {
        text-transform: uppercase;
        font-family: 'Plak Black Extra Condensed', sans-serif;
        color: #FFFFFF;
        margin-bottom: 20px;
        font-size: 3em;
        letter-spacing: 5px;
        line-height: 1em;
        display: inline-block;
        -webkit-text-shadow: 0px 0px 15px #222222;
        -text-shadow: 0px 0px 15px #222222;
        text-shadow: 0px 0px 15px #222222;
        -moz-text-shadow: 0px 0px 15px #222222;
        -o-text-shadow: 0px 0px 15px #222222;
        -ms-text-shadow: 0px 0px 15px #222222;
        -khtml-text-shadow: 0px 0px 15px #222222;
      }
      h4 {
        color: #FFFFFF;
        margin-bottom: 20px !important;
      }
      p {
      }
      .entry-header .inner {
        text-align: left;
        margin: 0 auto 20px auto;
        width: 800px;
      }
      .entry-header { padding-top: 20px; background-color: #fff; width:100%; position: fixed; top: 0; left: 0; z-index: 999999}
      .socialLinks {
        text-align: center;
        margin-top: 20px;
      }
      .arrow {
        color: gray;
        display: inline-block;
        margin: 50px;
        border-right: 12px solid;
        border-bottom: 12px solid;
        width: 30px; height: 30px;
        transform: rotate(45deg);
      }
      .apply-button {
        display: block;
        margin-top: 40px;
        margin-bottom: 30px;
        padding: 0;
        width: 250px;
        height: 70px;
        border: 2px solid #FFD700;
        border-radius: 40px;
        background: transparent;
        color: #FFD700;
        letter-spacing: 1px;
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
        -webkit-tap-highlight-color: transparent;
        -webkit-transition: background-color 0.3s, color 0.3s, width 0.3s, border-width 0.3s, border-color 0.3s;
        transition: background-color 0.3s, color 0.3s, width 0.3s, border-width 0.3s, border-color 0.3s;
      }

      .apply-button:hover {
        border: 2px solid #FFD700;
        background-color: #FFD700;
        color: #fff;
      }

      .schedule-list {
        padding-left: 0px;
      }
      .schedule-list li {
        display: table-row;
      }

    .social-media {
      color: #FFFFFF;
      text-decoration: none;
      font-family: "socialicoregular";
      font-size: 50px;
      margin-left: 10px;
      margin-right: 10px;
      -webkit-text-shadow: 0px 0px 15px #000000;
      -text-shadow: 0px 0px 15px #000000;
      text-shadow: 0px 1px 1px #000000;
      -moz-text-shadow: 0px 0px 15px #000000;
      -o-text-shadow: 0px 0px 15px #000000;
      -ms-text-shadow: 0px 0px 15px #000000;
      -khtml-text-shadow: 0px 0px 15px #000000;
      -webkit-transition: all ease 0.7s;
      -moz-transition: all ease 0.7s;
      -o-transition: all ease 0.7s;
      -ms-transition: all ease 0.7s;
      transition: all ease 0.7s;
    }

    .social-media:hover {
      color: #AAAAAA;
      text-decoration: none;
      -webkit-transition: all ease 0.7s;
      -moz-transition: all ease 0.7s;
      -o-transition: all ease 0.7s;
      -ms-transition: all ease 0.7s;
      transition: all ease 0.7s;
    }

    #sponsor-section .row {
      margin-bottom: 50px;
    }

    #sponsor-section .row div img{
      margin-bottom: 20px;
    }
    .grayHover{
      -webkit-filter: grayscale(100%); 
      filter: grayscale(100%);
    }
    .grayHover:hover{
      -webkit-filter: grayscale(0%); 
      filter: grayscale(0%);
    }
    </style>
    </head>
    <body style="padding: 0px;" class="loading">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
            
     <main data-top="background-color: rgba(0,0,0,1)" data-center-bottom="background-color: rgba(0,0,0,1)" data--200p-top="background-color: rgba(0,0,0,1)" data-anchor-target="#slide-1">
      
      <?php
      if(!isMobile()) {
      ?>
      <section id="slide-1" class="homeSlide" data-bottom="opacity: 0;" data--10p-bottom="opacity: 1;" data-anchor-target="#slide-1">
        <div class="bcg" data-top="opacity: 1; width: 120%; height: 120%; top: -10%; left: -10%;" data-center="opacity: 1; width: 110%; height: 110%; top: -5%; left: -5%;" data-bottom="opacity: 0; width: 100%; height: 100%; top: 0%; left: 0%;" data-anchor-target="#slide-1"></div>
        <div class="plaxEl" data-top="opacity: 1; position: fixed; top: 5%; width: 100%; left: 0;" data-center="opacity: 1;" data-10p-bottom="opacity: 0;" data-bottom="opacity: 0;" data-anchor-target="#slide-1">
      <?php
      }
      else
      {
      ?>
        <div style="background-image: url(img/map.jpg);">
      <?php
      }
      ?>
          <div id="title-slide" class="slide row" id="splash">
            <div id="splash-background"> </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <center>
                  <img src="img/hackgt-logo.svg" style="width: 200px; height: 200px;">
                  <h1>HACKGT // ATLANTA, GA</h1>
                  <h1>SEPTEMBER 25-27, 2015</h1>
                  <form action="https://hackgt1.typeform.com/to/AeDIjx">
                    <button class="apply-button" style="width: 150px; height: 50px;">Apply Now</button>
                  </form>
                  <form action="http://www.hackgt.com/sponsors">
                    <button style="border-width: 0; margin-top: 30px;"><img id="down-arrow" src="img/arrow-down.png" style="width: 36px;"/></button>
                  </form>
                </center>
            </div>
          </div>
        </div>
      <?php
      if(!isMobile()) {
      ?>
      </section>
      <?php
      }
      ?>

      <div id="quote-section" class="slide row" style="background-color: black;">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="vertical-center">
            <div style="display: block; margin-left: auto; margin-right: auto; width: 50em;">
              <center>
                <p>You're standing at the edge of a remote jungle, machete in hand, adventure in your soul. About to begin a journey of a lifetime. You're anxious. On one hand, there's wayward failure. On the other, the opportunity to be a trailblazing hero, a modern Indiana Jones.</p>
                <p style="margin-top: 20px;">Take that first step. Make a difference. Discover the uncharted.</p>
                <button style="border-width: 0; margin-top: 100px;"><img id="down-arrow-2" src="img/arrow-down2.png" style="width: 36px;"/></button>
              </center>
            </div>
          </div>
        </div>
      </div>
      
      <?php
      if(!isMobile()) {
      ?>
      <div class="slide row" style="background-color: black; height: 100vh;">
        <div class="col-sm-0 col-md-0 col-lg-6">&nbsp;</div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          <div class="row">
            
            </div>
          </div> 
        </div> <!-- content columns -->
      </div> <!-- slide -->
      <?php
      }
      ?>
      
      <div id="content">
      <center>
      <div class="slide row" style="width: 75em;">
        <div class="col-sm-12 col-md-12 col-lg-12" id="faq-section">
          <div class="row">
            <div class="twelve columns">
              <h3 style="text-align: center;">FAQ's</h3>
            </div>
          </div>
          <div class="row">
            <div class="four columns">
              <h4>What is HackGT?</h4>
              <p>HackGT is the second iteration of Georgia Tech's official national hackathon. Over 1,000 hackers from across the nation will travel by bus and plane to represent their universities at the biggest event of its kind in the South. Grab up to 3 teammates and prepare to rock.</p>
            </div>
            <div class="four columns">
              <h4>What will I eat?</h4>
              <p>In true Southern hospitable fashion, we'll be providing the best food you can eat, fresh and healthy.</p>
            </div>
            <div class="four columns">
              <h4>Do you offer travel reimbursement?</h4>
              <p>We're offering up to $300 in travel reimbursements for eligible hackers. Indicate your needs in your application and we'll reach out personally to take care of you.</p>
            </div>
          </div>
          <div class="row">
            <div class="four columns">
              <h4>What should I bring?</h4>
              <p>Everything you need to be a healthy and hygienic human being for two nights. After you pack your laptops, phones, chargers, headphones, and other electronic gear, be sure to grab your toothbrush, toothpaste, deodorant, contact solution, towel, and whatever else you may need. Keep it minimal.</p>
            </div>
            <div class="four columns">
              <h4>Am I allowed to use past projects?</h4>
              <p>Using past code is heavily discouraged - do you really want to ruin the fun? However, you're more than welcome to use open-source projects and libraries (e.g., Bootstrap) as well as existing platforms and services (like Twilio's API).</p>
            </div>
            <div class="four columns">
              <h4>What's the cost of attending?</h4>
              <p>HackGT is absolutely, 100% free of charge. We'll cover all of your meals and associated costs for the entire weekend. Take advantage of this.</p>
            </div>
          </div> 
        </div> <!-- content columns -->
      </div> <!-- slide -->

      <div class="slide row" style="width: 50em;">
        <div class="col-sm-12 col-md-12 col-lg-12" id="schedule-section">
          <div class="row">
            <div class="twelve columns">
              <h3 style="text-align: center;">Schedule</h3>
            </div>
          </div>
          <div class="row">
            <div class="four columns">
              <h4>Friday</h4>
              <ul class="schedule-list">
                <li><p>4-7 PM // Registration</p></li>
                <li><p>4:30-6:30 PM // Opening ceremonies</p></li>
                <li><p>6:30-8:00 PM // Dinner</p></li>
                <li><p>8 PM // Start of hacking</p></li>
                <li><p>12 AM // Midnight snack</p></li>
              </ul>
            </div>
            <div class="four columns">
              <h4>Saturday</h4>
              <ul class="schedule-list">
                <li><p>12 AM-10 PM // SnackGT</p></li>
                <li><p>10 PM // SnackGT part II</p></li>
              </ul>
            </div>
            <div class="four columns">
              <h4>Sunday</h4>
              <ul class="schedule-list">
                <li><p>9AM // End of hacking</p></li>
                <li><p>7:30 AM // Start of breakfast</p></li>
                <li><p>9:30 AM-12:30 PM // Expo and judging</p></li>
                <li><p>1-2 PM // Finalist demos</p></li>
                <li><p>2-3:30 PM // Closing ceremonies</p></li>
              </ul>
            </div>
          </div> 
        </div> <!-- content columns -->
      </div>

      <div class="slide row">
        <center><h3>Sponsors</h3></center><br>
        <div class="col-sm-0 col-md-1 col-lg-2">&nbsp;</div>
        <div class="col-sm-12 col-md-10 col-lg-8" id="sponsor-section">
          <div class="row">
            <div class="six columns">
              <img src="img/mantech.png" class='grayHover' style="width: 300px; margin-top: 30px; padding-right: 20px;"/>
            </div>
            <div class="six columns">
              <img src="img/Apple.png" class='grayHover' style="height: 110px; margin-left: 90px;"/>
            </div>
          </div>
          <div class="row">
            <div class="four columns">
              <img src="img/Microsoft.png" class='grayHover' style="width: 250px; margin-top: 30px;"/>
            </div>
            <div class="four columns">
              <center><img src="img/ea.png" class='grayHover' style="width: 250px;"/></center>
            </div>
            <div class="four columns">
              <img src="img/airwatch.png" class='grayHover' style="width: 250px;"/>
            </div>
          </div>
          <div class="row">
            <div class="two columns">
            &nbsp;
            </div>
            <div class="four columns">
              <img src="img/Bloomberg.png" class='grayHover' style="width: 300px; margin-right: 30px; <?php if(!isMobile()) { ?> padding-right: 100px; <?php } ?>"/>
            </div>
            <div class="four columns">
              <img src="img/a16z.png" class='grayHover' style="max-width: 100px;"/>
            </div>
            <div class="two columns">
            &nbsp;
            </div>
          </div>
        </div>
        <div class="col-sm-0 col-md-1 col-lg-2">&nbsp;</div>
      </div>

      <div class="slide row">
        <center>
          <h3>Partnered with</h3>
          <br>
          <img src="img/mlh-logo-small.png" style="width: 12em; margin-top: 30px; <?php if(!isMobile()) { ?> margin-left: 40px; margin-right: 40px; <?php } ?>"/>
          <h3 style="<?php if(isMobile()) { ?> margin-left: 40px; margin-right: 40px; <?php } ?>">and</h3>
          <img src="img/techsquare.png" style="width: 15em; <?php if(!isMobile()) { ?> margin-left: 40px; <?php } ?>"/>
        </center>
      </div>

      <div class="slide row">
        <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
          <h3>Judges</h3>
          <h4>Coming soon...</h4>
        </div>
      </div>

      <div class="slide row">
        <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
          <div class="vertical-center">
            <div style="display: block; margin-left: auto; margin-right: auto;">
              <form action="https://hackgt1.typeform.com/to/AeDIjx">
                <button class="apply-button">Apply now</button>
              </form>
              <a href="http://hackgt.com/sponsor" style="text-decoration: none;"><h4>Sponsor us</h4></a>
              <a id="facebook" class="social-media" href="http://facebook.com/hackgt">F</a>
              <a id="twitter" class="social-media" href="http://twitter.com/thehackgt">T</a><br>
            </div>
          </div>
        </div>
      </div>
      </center>
    </main>

    <div class="flContainer flPiece">
      <div class="fl flPiece" id="fl">
        <div class="block1 flPiece"></div>
        <div class="block2 flPiece"></div>
        <div class="flspot flPiece"></div>
        <div class="block3 flPiece"></div>
        <div class="block4 flPiece"></div>
      </div>
    </div>

    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/imagesloaded.js"></script>
    <?php
    if(!isMobile())
    {
    ?>
    <script src="js/skrollr.js"></script>
    <script src="js/_main.js"></script>
    <?php
    }
    ?>
    <script type="text/javascript">
    $(document).ready(function() {
      $(".flPiece").css({
        display: "none"
      });
      $(".flContainer").css({
        display: 'block'
      });
      $("#fl").css({
        top: ($(window).height()/2 - 2400) + "px",
        left: ($(window).width()/2 - 2400) + "px"
      });

      $("#down-arrow").click(function() {
        $('html, body').animate({
            scrollTop: $("#quote-section").offset().top
        }, 2000);
      });

      $("#down-arrow-2").click(function() {
        $('html, body').animate({
            scrollTop: $("#faq-section").offset().top
        }, 2000);
      });

      var flashlightOn = false;
      var touchFlag = false;
      var emptyFunction = function(e) { touchFlag = true; };
      $("body").on('touchstart', emptyFunction);
      $("body").on('touchmove', emptyFunction);
      $("body").on('touchend', emptyFunction);
      $(document).mousemove(function(e){
        if(!touchFlag)
        {
          if(flashlightOn) {
            $("#fl").css({
              top: (e.pageY - $(window).scrollTop() - 2400) + "px",
              left: (e.pageX - 2400) + "px"
            });
          }
        }
      });

      // fallback for IE
      $("#fl").click(function (event) {
        $(this).toggle();
        var link = document.elementFromPoint(event.clientX, event.clientY); // IE & FF
        $(this).toggle();
        if (link.tagName.toLowerCase() == 'a') {
          window.location.href = link.href;
        }
        $(link).trigger('click');
      });
      var fldiv = document.getElementById('fl');
      fldiv.style.display = 'block';

      //$('.slide').not('#quote-section,#title-slide').css('background-image',"url('img/content-bg.png')"); // pav

      var radius = 200;
      updateFlashlight(radius);
      $(window).scroll(function() {
        var vpH = $(window).height(), // Viewport Height
        st = $(window).scrollTop(), // Scroll Top
        y = $("#quote-section").offset().top,
        elementHeight = $("#quote-section").height();
        if(y < (vpH + st - 2*elementHeight)) {
          $(".flPiece").css({
            display: "block"
          });
          flashlightOn = true;
        }
        else {
          $(".flPiece").css({
            display: "none"
          });
          flashlightOn = false;
        }

        /*
        if(radius-50 > 0) {
          radius -= 50;
        }
        console.log(radius);
        updateFlashlight(radius);
        */
      });
    });
    

    function updateFlashlight(radiusOffset) {
      radiusOffset -= 1;
        $(".flspot").css({
          top: "-=" + radiusOffset/2 + "px",
          left: "-=" + radiusOffset/2 + "px",
          width: "+=" + radiusOffset + "px",
          height: "+=" + radiusOffset + "px"
        });
        $(".flContainer .fl .block1").css({
          height: "-=" + radiusOffset/2 + "px"
        });
        $(".flContainer .fl .block2").css({
          top: "-=" + radiusOffset/2 + "px",
          width: "-=" + radiusOffset/2 + "px",
          height: "+=" + radiusOffset + "px"
        });
        $(".flContainer .fl .block3").css({
          top: "-=" + radiusOffset/2 + "px",
          left: "+=" + radiusOffset/2 + "px",
          width: "-=" + radiusOffset/2 + "px",
          height: "+=" + radiusOffset + "px"
        });
        $(".flContainer .fl .block4").css({
          top: "+=" + radiusOffset/2 + "px",
          height: "-=" + radiusOffset/2 + "px"
        });
    }

    function checkVisible(elm) {
      var vpH = $(window).height(), // Viewport Height
      st = $(window).scrollTop(), // Scroll Top
      y = $(elm).offset().top,
      elementHeight = $(elm).height();

      return ((y < (vpH + st)) && (y > (st - elementHeight)));

    }
    </script>
    </body>
</html>
