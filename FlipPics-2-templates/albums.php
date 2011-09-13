<?
	// Just some fake user name remembering :)
	if( isset( $_REQUEST[ "username" ] ) ){
		setcookie( "username", $_REQUEST[ "username" ] );
	}
	
	if( isset( $_COOKIE[ "username" ] ) ){
		$username = $_COOKIE[ "username" ];
	}
	else{
		$username = "Scott";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$username?>'s Albums</title>
	<meta charset="utf-8">
</head>
<body>

	<p><a href="albums.php"><img src="_images/logo-black.png" alt="FlipPic"></a></p>

	<h1><?=$username?>'s Albums</h1>
	<p><a href="signout.php">Sign Out</a>
	<ol>
		<? 
			include( "albums/_data.php" );
			foreach ( $albums as $album ) {?>
			<li>
				<a href="album.php?album=<?=$album[ "name" ]?>">
					<img src="albums/<?=$album[ "name" ]?>/thm/1.jpg" alt="<?=$album[ "title" ]?>">
					<h2><?=$album[ "title" ]?></h2>
					<p><?=count( $album[ "images" ])?></p>
					<p><?=$album[ "date" ]?></p>
				</a>
			</li>
		<? } ?>
	</ol>
</body>
</html>