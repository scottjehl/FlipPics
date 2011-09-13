<?
	include( "albums/_data.php" );
	$album = $albums[ $_REQUEST[ "album" ] ];	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$album[ "title" ]?></title>
	<meta charset="utf-8">
</head>
<body>
	<p><a href="albums.php"><img src="_images/logo-black.png" alt="FlipPic"></a></p>
	<h1><?=$album[ "title" ]?></h1>
	<p><a href="albums.php">Albums</a></p>
	<p><a href="signout.php">Sign Out</a></p>
	
	<ol>
		<? for( $i = 1; $i <= count( $album[ "images" ] ); $i++ ){ ?>
		<li>
			<a href="view.php?album=<?=$album[ "name" ]?>&img=<?=$i?>">
				<img src="albums/<?=$album[ "name" ]?>/thm/<?=$i?>.jpg" alt="<?=$album[ "images" ][ $i-1 ][ "title" ]?>">
			</a>
		</li>	
		<? } ?>
	</ol>
</div>
</body>
</html>