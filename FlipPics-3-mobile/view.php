<?
	include( "albums/_data.php" );
	$album		= $albums[ $_REQUEST[ "album" ] ];
	$albumtitle	= $album[ "title" ];
	$albumname	= $album[ "name" ];

	$images		= $album[ "images" ];
	$img		= intval( $_REQUEST[ "img" ] );
	$imgdata	= $images[ $img - 1 ];
	
	$nextimg	= $img + 1;
	if( $nextimg > count( $images ) ){
		$nextimg = 1;
	}
	
	$previmg	= $img - 1;
	if( $previmg === 0 ){
		$previmg = count( $images );
	}

	$title	= $imgdata[ "title" ];
	$desc	= $imgdata[ "desc" ];
	$file	= "albums/$albumname/med/$img.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title?> | <?=$albumtitle?></title>
	
	<? include( "_head.php" ); ?>
</head>
<body class="view interior">
	<div class="welcome">
		<p><a href="albums.php"><img src="_images/logo-black.png" alt="FlipPic"></a></p>
	</div>
	<div data-role="page" class="view interior">
		<p><a href="album.php?album=<?=$albumname?>" class="close" data-transition="flip" data-direction="reverse"><?=$albumtitle?></a></p>

		<img src="<?=$file?>" alt="<?=$title?>">
		
		<div class="info">
			<h1><?=$title?></h1>
			<p><?=$desc?></p>
		</div>

		<ul data-role="pagination">
			<li class="ui-pagination-prev"><a href="view.php?album=<?=$albumname?>&amp;img=<?=$previmg?>">Prev</a></li>
			<li class="ui-pagination-next"><a href="view.php?album=<?=$albumname?>&amp;img=<?=$nextimg?>">Next</a></li>
		</ul>
	</div>
</body>
</html>