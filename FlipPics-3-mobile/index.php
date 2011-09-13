<!DOCTYPE html>
<html lang="en">
<head>
	<title>FlipPics</title>
	
	<? include( "_head.php" );	?>
</head>
<body>
	
	<div class="welcome">
		<h1><a href="albums.php" data-direction="reverse"><img src="_images/logo-black.png" alt="FlipPic"></a></h1>
	</div>
	
	<div data-role="page" data-theme="d">
		<form action="albums.php" method="post" data-transition="flip" class="login ui-body-c ui-corner-all">
			<label for="username">Name</label>
			<input type="text" name="username" id="username" value="" placeholder="Joe Doe"  />
			<label for="pass">Password</label>
			<input type="password" name="" id="pass" value="" placeholder="Write anything" />
			<input type="submit" value="Sign in">
		</form>
		
		<p class="foot">
			<small>All Content Copyright &copy;2011 Scott Jehl. All Code is MIT Licensed (free). Logo icon by <a href="http://svengraph.deviantart.com/art/This-is-ART-Icons-155844990">Svengraph</a></small>
			<a href="http://jquerymobile.com" class="jqm">Built with jQuery Mobile</a>
		</p>
	</div>
</body>
</html>