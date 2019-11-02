
<?php require_once 'controller/authcontroller.php'; 

if (isset($_GET['token'])) {
	$token = $_GET['token'];
	verifyUser($token);
}


?>
<!DOCTYPE html>
<html>
<head>
<title>B2B Movies</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- link to style.css -->
<link href="css/showYtVideo.css" rel="stylesheet" type="text/css"><!-- link to showYtVideo.css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!-- bootstrap -->
</head>
<style type="text/css">
.welcome{
	position: relative;
	top: 20px;
}


.logout{
		position: relative;
		right: 200px;}

		.pos{
		position: relative;
		right: 210px;
		
	}

 .poo{
		position: relative;
		top: 100px;
		color: white;
	}

.rights{
	position: relative;
		top: 700px;
		left: -300px;
}

	.emojis{
		position: relative;
		top: 700px;
		left: 20px;
	}
.owner{
	position: relative;
		top: 700px;
		right: -700px;
}




</style>

<Body>

<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="index.php">WatchTrailer</a></h1>
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

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4 form-div login">
			<?php if(isset($_SESSION['message'])): ?>
			<div class="alert <?php echo $_SESSION['alert-class'];?> pos">
				<?php echo $_SESSION['message'];?>
				<?php unset($_SESSION['message']); ?>
				<?php unset($_SESSION['alert-class']); ?>

			</div>
<?php endif; ?>
		</div>

	</div>
</div>

<h3 class="welcome">Welcome, <?php echo $_SESSION['username']; ?></h3>
<a  class="welcome"href="#" class="logout">logout</a>


<?php if(!$_SESSION['verified']): ?>
	
	<p class="poo">
		Thank you for registering
	Please click on the link sent to your email account
	<?php echo $_SESSION['email']; ?> to verify.</p>
	<button type="button">Thank You</button><?php endif; ?>


<?php if($_SESSION['verified']): ?>
	<center>
		<p class="po">
		You are logged in <?php echo $_SESSION['email']; ?></p>
	<button type="button" class="btn btn-block btn-lg btn-primary">You are verified</button></center>
<?php endif; ?>





















	<div id="footer">
  
	<tr>
				<td colspan="4" height="20">
				</td>
			</tr>
		</table>
		
		<table border="0px" cellspacing="0" cellpadding="0" width="960px" height="100" background:url('images/body-bg.gif');><!-- link to social midea -->
			<div class="emojis">
			<tr>
				<td>
				<center>
					<div class="emojis">
				<a href="http://www.facebook.com"><img src="css/social icons/facebook.png" height="30" width="30"></a>
				<a href="http://www.twitter.com"><img src="css/social icons/twitter.png" height="30" width="30"></a>
				<a href="http://www.youttube.com"><img src="css/social icons/youtube.png" height="30" width="30"></a>
				<a href="http://www.instagram.com"><img src="css/social icons/instagram.png" height="30" width="30"></a>
				<p class="rights">Copy Right &copy; Protected</p>
				</div></center>
				</td>
			</tr>
		</table>
  
    <div class="rights"><p> <a href="#">B2B Movies</a> - All Rights Reserved</p></div>
      <div class="owner"> <p class="rf">Design by <a href="http://B2B Movies.com/">Pooja & Neha</a></p></div>
    <div style="clear:both;"></div>
  </div>

 

<!-- END PAGE SOURCE -->
</Body></html>