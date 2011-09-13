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
	
	<? 
		include( "_head.php" );
		include( "albums/_data.php" );
	?>	
</head>
<body class="albums interior">

	<div class="welcome">
		<p><a href="albums.php"><img src="_images/logo-black.png" alt="FlipPic"></a></p>
	</div>

	<div data-role="page" class="albums interior">
		<div data-role="header">
			<h1><?=$username?>'s Albums</h1>
			<p><a href="signout.php" class="signout" data-rel="dialog">Sign Out</a></p>
		</div>
		<ol data-role="listview">
			<? foreach ( $albums as $album ) {?>
				<li>
					<a href="album.php?album=<?=$album[ "name" ]?>">
						<img src="albums/<?=$album[ "name" ]?>/thm/1.jpg"  alt="<?=$album[ "title" ]?>">
						<h2><?=$album[ "title" ]?></h2>
						<p class="ui-li-count"><?=count( $album[ "images" ])?></p>
						<p><?=$album[ "date" ]?></p>
					</a>
				</li>
			<? } ?>
		</ol>
	</div>
</body>
</html>