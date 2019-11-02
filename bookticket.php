<!DOCTYPE html>
<head>
<title>Book Ticket</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Link to style.css -->
<link href="showYtVideo.css" rel="stylesheet" type="text/css"><!-- Link to showYtVideo.css -->

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="jquery.showYtVideo.js"></script>

</head>
<style>
	.l1{
		height:700px;
		width:1344px;
		clear:both;
		text-align:center;
	}
	fieldset{
		width:100%px;
		height:680px;
		align:center;
	}
	legend{
font-size:20px;
}
			
.error{
	color:red;
		font-size:15px;
}

input[type=text]
{
	width:200px;
	padding:10px;
}
input[type=password]
{
	margin:2px;
	width:200px;
	padding:10px;
	
}
input[type=number]
{
	margin:2px;
	width:200px;
	padding:10px;
	
}
input[type=submit]
{
	width:20%;
	font-size:1.5em;
	padding:10px;
	margin:5px;	
}
input[id=extra]
{
	width:20%;
	font-size:1.5em;
	padding:10px;	
}

.success{	
	color:green;
	padding:25px;
	text-align:center;
	font-size:20px;
}
form fieldset a{
	width:50px;
	height:50px;
	padding:10px;
	
}
</style>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="index.php">B2B Movies</a></h1>
    <div id="navigation">
      <ul>
        <li><a href="index.php" href="#">HOME</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="inthreater.php">IN THEATRES</a></li>
        <li><a href="comingsoon.php">COMING SOON</a></li>
        <li><a href="bookticket.php">BOOK TICKET</a></li>
		<li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
   </div>
</div>	
<div class="l1">
<form id="form" action="" method="post">	
			<fieldset>
				<legend>QFX,TICKET BOOKING SYSTEM</legend>	<br><br>			
				<label> Username: 
					<input id="name1" type="text" name="username">			
				</label>
				<br><br>
			<label> Email Address : 
					<input id="email" type="text" name="email">			
				</label><br><br>
				<label for="ex">Movie : </label>
					<select id="movie" name="level" >
					<option value="">Select a Movie</option>
					<option value="fate8">Joker</option>
					<option value="fist5">Housefull 4</option>
					<option value="logan">Chhichhore</option>
					<option value="ww">War</option>
					
					</select>
				<label for="ext">Seat: </label>
					<select id="seat" name="level" >
					<option value="">Select a Quantity</option>
					<option value="1">I</option>
					<option value="2">II</option>
					<option value="3">III</option>
					<option value="4">IV</option>
					<option value="5">V</option>
                                        <option value="6">VI</option>
                                        <option value="7">VII</option>
                                        <option value="8">VIII</option>
                                        <option value="9">IX</option>
                                        <option value="10">X</option>
					
					</select>
					<label for="ext">Show Time: </label>
					<select id="showtime" name="level" >
					<option value="">Select a Time</option>
					<option value="1">8:00AM</option>
					<option value="2">12:00PM</option>
					<option value="3">3:00PM</option>
					<option value="4">6:00PM</option>
					<option value="5">9:00PM</option>
					
					</select>
					<br><br>
				<p>Payment:
<label>
<input id="radio1" type="radio" name="payment" value="yes"/> Online
</label>

<input id="radio" type="radio" name="payment" value="noo"/> Cash on counter
</label><br>
</p>
<br>
			<label> ID : 
					<input id="card" type="number" name="card">			
				</label><br>
			<label> Amount : 
					<input id="amount" type="number" name="amount">			
				</label><br>
				<input type="submit" value="Book Now" />
				<br />
				<p id="errorMessage" class="error">					
				</p>	
			</fieldset>			
		</form>
		<p id="successMessage" class="success">					
		</p>
</div>
</div>

  <div id="footer">
  
  
			<tr>
				<td colspan="4" height="20">
				</td>
			</tr>
		</table>
		<table border="0px" cellspacing="0" cellpadding="0" width="960px" height="100" background:url('images/body-bg.gif');><!-- table for link to social medias -->
			<tr>
				<td>
				<center>
				<a href="http://www.facebook.com"><img src="css/social icons/facebook.png" height="30" width="30"></a><!-- link to facebook -->
				<a href="http://www.twitter.com"><img src="css/social icons/twitter.png" height="30" width="30"></a><!-- link to twitter -->
				<a href="http://www.youtube.com"><img src="css/social icons/youtube.png" height="30" width="30"></a><!-- link to youtube -->
				<a href="http://www.instagram.com"><img src="css/social icons/instagram.png" height="30" width="30"></a><!-- link to instagram -->
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
<script src="js/bookticket.js"></script>
<!-- END PAGE SOURCE -->
</body>
</html>