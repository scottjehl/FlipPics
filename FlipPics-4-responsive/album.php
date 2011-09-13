<?
	include( "albums/_data.php" );
	$album = $albums[ $_REQUEST[ "album" ] ];	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$album[ "title" ]?></title>
	
	<? include( "_head.php" ); ?>
</head>
<body class="album interior">

<div class="welcome">
	<p><a href="albums.php"><img src="_images/logo-black.png" alt="FlipPic"></a></p>
</div>

<div data-role="page" class="album interior">
	<div data-role="header">
		<h1><?=$album[ "title" ]?></h1>
		<p><a href="albums.php" class="back-albums" data-direction="reverse">Albums</a></p>
		<p><a href="signout.php" data-rel="dialog" class="signout">Sign Out</a></p>
	</div>
	<ol>
		<? $repeat	= 3; for( $i = 1, $k = 0; $i <= count( $album[ "images" ] ); $i++ ){ ?>

		<li>
			<a href="view.php?album=<?=$album[ "name" ]?>&img=<?=$i?>" data-transition="flip">
				<img src="albums/<?=$album[ "name" ]?>/thm/<?=$i?>.jpg?medium=albums/<?=$album[ "name" ]?>/thm-lrg/<?=$i?>.jpg" alt="<?=$album[ "images" ][ $i-1 ][ "title" ]?>">
			</a>
		</li>	

		<? if( $i === count( $album[ "images" ] ) && $k < $repeat ){ $i = 1; $k++; } } ?>
	</ol>
</div>
</body>
</html>