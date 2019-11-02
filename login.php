<?php 
 require_once 'controller/authcontroller.php'; ?>

<!DOCTYPE html>
<head>
<title>B2B Movies</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- link to style.css -->
<link href="css/showYtVideo.css" rel="stylesheet" type="text/css"><!-- link to showYtVideo.css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!-- bootstrap -->


</head>
<style>
	.l1{
		height:700px;
		width:100%;
		clear:both;
		text-align:center;
	}
	fieldset{
		width:100%px;
		height:680px;
		align:center;
	}
	.clr{
		color: blue;

	}

	.white{
		color: white;
	}

	legend{

font-size:30px;
}
			
.error{
	color:white;
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
	<tr>
	<td colspan= "1" height="50" align="right">
				<a href="login.php"><img src="css/menu/logintop.png"></a>
			</td>
			<td colspan= "1" height="50" align="left">
			<a href="registration.php"><img src="css/menu/regestration.png"></a>
			</td>
	</tr>		
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="inthreater.php">IN THEATRES</a></li>
        <li><a href="comingsoon.php">COMING SOON</a></li>
        <li><a href="bookticket.php">BOOK TICKET</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
  </div>
  
</div>
<hr style="clear:both;">
<div class="l1">
<form id="form1" action="login.php" method="post">	
			<fieldset>
				<legend class="clr">Login </legend>			

<?php if (count($errors) > 0): ?>
<div class="alert alert danger">
	<?php foreach($errors as $error): ?>
	<li><?php echo $error; ?></li>
<?php endforeach; ?>
</div>
<?php endif; ?>
				
				<label class="clr" > Username/Email: 
					<input id="username" type="text" name="username" value="<?php echo $username?>">			
				</label><br>
				<label class="clr"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				 Password: 
					<input id="password" type="password" name="password">			
				</label><br>
								
				 <br/>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <br>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" value="Login" name="Login" />
				<br />
				<p id="errorMessage" class="error">					
				</p>	
			</fieldset>			
			<p class="white" style="color:red;position:relative;top:-350px;"> Not a member? <a href="registration.php">register</a></p>

		</form>
		<p id="successMessage" class="success">					
		</p>
</div>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/jquery.showYtVideo.js"></script>


<div id="footer"><!-- starting of footer -->
  
	<tr>
				<td colspan="4" height="20">
				</td>
			</tr>
		</table>
		<table border="0px" cellspacing="0" cellpadding="0" width="960px" height="100" background:url('images/body-bg.gif');><!-- link to social midea -->
			<tr>
				<td>
				<center>
				<a href="http://www.facebook.com"><img src="css/social icons/facebook.png" height="30" width="30"></a>
				<a href="http://www.twitter.com"><img src="css/social icons/twitter.png" height="30" width="30"></a>
				<a href="http://www.youttube.com"><img src="css/social icons/youtube.png" height="30" width="30"></a>
				<a href="http://www.instagram.com"><img src="css/social icons/instagram.png" height="30" width="30"></a>
				<p>Copy Right &copy; Protected</p>
				</center>
				</td>
			</tr>
		</table>
  
    <p <a href="#">B2B Movies</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="http://B2B Movies.com/">Pooja Mishra</a></p>
    <div style="clear:both;"></div>
  </div>
</div>

 

<!-- END PAGE SOURCE -->
</body>
</html>