<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign out</title>
	
	<? include( "_head.php" );	?>
</head>
<body class="signout">

	<div data-role="dialog" data-theme="d" class="signout">
	
		<div data-role="header" data-theme="d">
			<h1>Sign out</h1>
		</div>
	
		<div data-role="content" data-theme="d">
			<p>Do you want to sign out?</p>
	
			<form action="index.php" class="logout" data-transition="flip">
				<a href="albums.php" data-role="button" data-theme="c">No, back to albums!</a>
				<input type="submit" value="Yes, sign out" data-icon="check" data-theme="b">
			</form>
		</div>
	</div>
</body>
</html>