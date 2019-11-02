
<?php require 'controller/authcontroller.php';


?>

<!DOCTYPE html>
<head>
<title>B2B Movies</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- link to style.css-->
<link href="css/showYtVideo.css" rel="stylesheet" type="text/css"><!-- link to showYtVideo.css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"><!--bootstrap-->

</head>
<style>
example_f {
   border-radius: 4px;
   background: linear-gradient(to right, #67b26b, #4ca2cb);
   border: none;
   color: #FFFFFF;
   text-align: center;
   text-transform: uppercase;
   font-size: 30px;
   padding: 20px;
   width: 200px;
   transition: all 0.4s;
   cursor: pointer;
   margin: 5px;
 }
 .example_f span {
   cursor: pointer;
   display: inline-block;
   
   transition: 0.4s;
 }
 .example_f span:after {
   content: '\00bb';
   position: absolute;
   opacity: 0;
   top: 0;
   right: -20px;
   transition: 0.5s;
 }
 .example_f:hover span {
   padding-right: 25px;
 }
 .example_f:hover span:after {
   opacity: 1;
   right: 0;
 }


</style>

<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header"><!-- div for header -->
    <h1 id="logo"><a href="index.php">B2B Movies</a></h1>
    <div id="navigation">
  <tr style="display:inline-block;">
  <td style="display:inline-block;border: solid black 1px;align:right;" colspan= "1" height="50" align="right">

<?php if(!isset($_SESSION['verified'])): ?>
<div class="button_cont" align="right"><button style="
padding:10px;height:40px;width:100px;background-color:red;margin-bottom:2px;background: linear-gradient(to right, #67b26b, #4ca2cb);color:black;"><a class="example_f" href="login.php"><span style="color:blue;">Login </a></button></div>

<?php endif; ?></td>
<td style="display:inline-block;border: solid black 1px;align:right;" colspan= "1" height="50" align="right">

<?php if(isset($_SESSION['verified'])): ?>
<div class="button_cont" align="right"><button style="
padding:10px;height:40px;width:100px;background-color:red;margin-bottom:2px;background: linear-gradient(to right, #67b26b, #4ca2cb);color:black;"><span style="color:blue;"><?php echo $_SESSION['username']; ?></button></div>
<?php endif; ?>
</td>

  <td style="display:inline-block;border: solid black 1px;position:relative;left:30px;align:left;" colspan= "1" height="50" align="left">
      <?php if(!isset($_SESSION['verified'])):?>
<div class="button_cont" align="right"><button style="
padding:10px;height:40px;width:100px;background-color:red;margin-bottom:2px;background: linear-gradient(to right, #67b26b, #4ca2cb);color:black;"><a class="example_f" href="registration.php" target="_blank" rel="nofollow"><span style="color:blue;">Register</a></button></div><?php endif; ?>
      </td>

<td style="display:inline-block;border: solid black 1px;align:right;" colspan= "1" height="50" align="right">

<?php if(isset($_SESSION['verified'])): ?>
  <div class="button_cont" align="right"><button style="
padding:10px;height:40px;width:100px;background-color:red;margin-bottom:2px;background: linear-gradient(to right, #67b26b, #4ca2cb);color:black;"><a class="example_f" href="index.php"><span style="color:blue;">logout</a></button></div>

<?php endif; ?>
        
      </td>
     
  </tr>   
      <ul><!-- unordered list-->
        <li><a href="index.php">HOME</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="inthreater.php">IN THEATERS</a></li>
        <li><a href="comingsoon.php">COMING SOON</a></li>
        <li><a href="bookticket.php">BOOK TICKET</a></li>
		<li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
    <div id="sub-navigation"><!-- start of div -->
      <ul><!-- unordered list-->
        <li><a href="#">ALL LATEST TRAILERS</a></li>
      </ul>
      <div id="search"><!-- div search-->
        <form action="#" method="get" accept-charset="utf-8">
          <label for="search-field">SEARCH</label>
          <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button" />
        </form>
      </div>
    </div>
  </div>
  <div id="main">
    <div id="content">
      <div class="box">
        <div class="head">
          <?php if(!isset($_SESSION['verified'])): ?>
          <h2>Please login to watch trailers of latest movies...</h2>
<?php endif; ?>

        
        <?php if(isset($_SESSION['verified'])): ?>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">Chhichhore</span></span> <a href="#"><img src="css/images/Chhichhore.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
            <a href="https://www.youtube.com/watch?v=tsxemFX0a7k" target="_blank"><button  id="tsxemFX0a7k" type="button" class="show-video">Play Trailer</button></a><!-- button-->

			</div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">JOKER</span></span> <a href="#"><img src="css/images/joker.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">13</span> </div>
            <a href="https://www.youtube.com/watch?v=zAGVQLHvwOY">
			<button id="zAGVQLHvwOY" type="button" class="show-video">Play Trailer</button></a>

        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">Abominable</span></span> <a href="#"><img src="css/images/Abominable.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">11</span> </div><a href="https://www.youtube.com/watch?v=Ap0NRJD-2ts">
			<button  id="Ap0NRJD-2ts" type="button" class="show-video">Play Trailer</button></a>

        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">Maleficient</span></span> <a href="#"><img src="css/images/magnificent.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div><a href="https://www.youtube.com/watch?v=n0OFH4xpPr4">
			<button id="n0OFH4xpPr4" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">Dream Girl</span></span> <a href="#"><img src="css/images/Dream Girl.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">10</span> </div><a href="https://www.youtube.com/watch?v=nf39Jpi3ZQ4">
			<button id="nf39Jpi3ZQ4" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie last">
          <div class="movie-image"> <span class="play"><span class="name">Saand Ki Aankh</span></span> <a href="#"><img src="css/images/beti.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">16</span> </div><a href="https://www.youtube.com/watch?v=-uA-ONin_5M">
			<button id="-uA-ONin_5M" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="box">
        <div class="head">
          
          
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">Housefull 4</span></span> <a href="#"><img src="css/images/Housefull 4.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">15</span> </div><a href="https://www.youtube.com/watch?v=gcHH34cEl3Y">
			<button id="gcHH34cEl3Y" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">Made in china</span></span> <a href="#"><img src="css/images/mic.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">10</span> </div><a href="https://www.youtube.com/watch?v=eA6PFnSHo-E">
			<button id="eA6PFnSHo-E" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">KUNG FU PANDA 3</span></span> <a href="#"><img src="css/images/kungfupanda3.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">09</span> </div><a href="https://www.youtube.com/watch?v=10r9ozshGVE">
			<button id="10r9ozshGVE" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">War</span></span> <a href="#"><img src="css/images/War.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">07</span> </div><a href="https://www.youtube.com/watch?v=tQ0mzXRk-oM">
			<button id="tQ0mzXRk-oM" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">kaithi</span></span> <a href="#"><img src="css/images/kaithi.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">13</span> </div><a href="https://www.youtube.com/watch?v=g79CvhHaj5I">
			<button id="g79CvhHaj5I" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie last">
          <div class="movie-image"> <span class="play"><span class="name">beautyandthebeast</span></span> <a href="#"><img src="css/images/beautyandthebeast.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">15</span> </div><a href="https://www.youtube.com/watch?v=OvW_L8sTu5E">
			<button id="OvW_L8sTu5E" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="box">
        <div class="head">
          
          
        </div>
        <div class="movie">
          <div class="movie-image "> <span class="play"><span class="name">Hirkani</span></span> <a href="#"><img src="css/images/Hirkani.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">11</span> </div><a href="https://www.youtube.com/watch?v=BtCK1TgX7pw">
			<button id="BtCK1TgX7pw" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">sky is pink</span></span> <a href="#"><img src="css/images/sky is pink.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">13</span> </div><a href="https://www.youtube.com/watch?v=prwUFBsDRLk">
			<button id="prwUFBsDRLk" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">zombieland double</span></span> <a href="#"><img src="css/images/zombieland le double.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">10</span> </div><a href="https://www.youtube.com/watch?v=ZlW9yhUKlkQ">
			<button id="ZlW9yhUKlkQ" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">spidermanhomecoming</span></span> <a href="#"><img src="css/images/spidermanhomecoming.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">13</span> </div><a href="https://www.youtube.com/watch?v=DiTECkLZ8HM">
			<button id="DiTECkLZ8HM" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">warofape</span></span> <a href="#"><img src="css/images/warofape.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">11</span> </div><a href="https://www.youtube.com/watch?v=JDcAlo8i2y8k">
			<button id="JDcAlo8i2y8" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="movie last">
          <div class="movie-image"> <span class="play"><span class="name">kingsman2</span></span> <a href="#"><img src="css/images/kingsman2.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">10</span> </div><a href="https://www.youtube.com/watch?v=6Nxc-3WpMbg">
			<button id="6Nxc-3WpMbg" type="button" class="show-video">Play Trailer</button></a>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
    </div>
<?php unset($_SESSION['verified']); ?>
  <?php endif; ?>
    <div id="news">
      <div class="head">
        <a href="news.php"><strong> NEWS! </strong></a><!-- link to news-->
        
      </div>
      <div class="content">
        <p class="date">17.04.09</p>
        <h4>TAYLOR SWIFT</h4>
        <p>Most of us are lucky if our Fourth of July party host remembers to buy enough ice to last the gang until after the fireworks go off... </p>
        <a href="news.php">Read more</a> </div>
      <div class="content">
        <p class="date">17.04.09</p>
        <h4>Michael Nyqvist Dies; Veteran Actor Was 56</h4>
        <p>Michael Nyqvist, a Swedish actor who took on the lead role in the initial big screen adaption of The Girl with the Dragon Tattoo, died on Tuesday in Stockholm.
			He was 56 years old....</p>
        <a href="news.php">Read more</a> </div>
      <div class="content">
        <p class="date">16.04.09</p>
        <h4>Spider-Man: Homecoming is the latest film to feature trailer scenes you’ll never see</h4>
        <p>In the official trailers for Spider-Man: Homecoming, the web-slinging superhero can be seen soaring through the sky next to Robert Downey Jr.’s Iron Man...</p>
        <a href="news.php">Read more</a> </div>
    </div>
    <div id="coming">
      <div class="head">
        <a href="comingsoon.php">COMING SOON !</a>
        
      </div>
      <div class="content">
        <h4>IRON MAN 4 </h4>
        <a href="#"><img src="css/images/coming-soon1.jpg" alt="" /></a>
        <p>When Marvel announced their massive Phase Three lineup back in October, the studio revealed nine movies that will conclude with the release of Avengers: Infinity War Part 2 in May 2019...</p>
        <a href="comingsoon.php">Read more</a> </div>
      <div class="cl">&nbsp;</div>
      <div class="content">
        <h4>THOR RAGNAROK </h4>
        <a href="#"><img src="css/images/coming-soon2.jpg" alt="" /></a>
        <p>Thor: Ragnarok is an upcoming American superhero film based on the Marvel Comics character Thor, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. ...</p>
        <a href="comingsoon.php">Read more</a> </div>
    </div>
    <div class="cl">&nbsp;</div>
  </div>
  <div id="footer"><!-- div for footer -->
  
			<tr>
				<td colspan="4" height="20">
				</td>
			</tr>
		</table>
		<table border="0px" cellspacing="0" cellpadding="0" width="960px" height="100" background:url('images/body-bg.gif');><!-- table for link to social medias -->
			<tr>
				<td>
				<center>
				<a href="http://www.facebook.com"><img src="css/social icons/facebook.png" height="30" width="30"></a>
				<a href="http://www.twitter.com"><img src="css/social icons/twitter.png" height="30" width="30"></a>
				<a href="http://www.youtube.com"><img src="css/social icons/youtube.png" height="30" width="30"></a>
				<a href="http://www.instagram.com"><img src="css/social icons/instagram.png" height="30" width="30"></a>
				<p>Copy Right &copy; Protected</p>
				</center>
				</td>
			</tr>
		</table>
  
    <p  <a href="#">B2B Movies</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="http://B2B Movies.com/">Pooja & Neha</a></p>
    <div style="clear:both;"></div>
  </div>
</div>


<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script><!-- link to javascript-->
<script>
  /**
 * @name jQuery showPopup plugin
 * @author Vlad Kozelsky
 * @description Show modal window
 * @version 1.0
 */

(function($) {
    $.showYtVideo = function(options) {

        options = $.extend({
            modalSize: 'm',
            shadowOpacity: 0.5,
            shadowColor: '#000',
            clickOutside: 1,
            closeButton: 1,
            videoId: ''
        }, options);

        var modal = $('<div class="modal size-' + options.modalSize + '"></div>');
        var closeButton = $('<div class="modal-close">&#215;</div>');

        if (options.closeButton) {
            closeButton.appendTo(modal);   
        }
        
        var modalBg = $('<div class="modal-bg"></div>');
        
        modal.appendTo('body');
        modalBg.appendTo('body');

        var videoWidth = modal.width();
        var videoHeight = modal.height();
        var modalWidth = modal.outerWidth();
        var modalHeight = modal.outerHeight();


        if (options.videoId) {
            var iframe = $('<iframe width="'
                + videoWidth
                + '" height="'
                + videoHeight
                + '" src="https://www.youtube.com/embed/'
                + options.videoId
                + '" frameborder="0" allowfullscreen></iframe>');

            iframe.appendTo(modal);      
        } else {
            console.error('showYtVideo plugin error: videoId not specified');
        }

        modal.css({
            marginLeft: -modalWidth/2,
            marginTop: -modalHeight/2
        });

        modalBg.css({
            opacity: options.shadowOpacity,
            backgroundColor: options.shadowColor
        });


        closeButton.on('click', function() {
            $(this).parent().fadeOut(350, function() {
                $(this).detach();
                modalBg.detach();
            })
        });
        

        if (options.clickOutside) {
            $(document).mouseup(function(e) {
                if (!modal.is(e.target) && modal.has(e.target).length === 0) {
                    modal.fadeOut(350, function() {
                        $(this).detach();
                        modalBg.detach();
                    });
                }
            });
        }
    }   
})(jQuery);
</script><!-- link to java script-->
<script>

 jQuery(document).ready(function ($) {
            $('.show-video').on('click', function () {
			     var id = this.id;

                $.showYtVideo({
                    videoId: id
                });
            });
        });
</script>

<!-- END PAGE SOURCE -->
</body><!-- end of body-->
</html>