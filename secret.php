<?php 
	require_once(dirname(__FILE__).'/../code/common.php');
	$nav = leacocks_nav(); 
	
	function getTimThumbPhotoURL($url, $w, $h){
		return "http://leacocks.com/home/thumb.php?src=".urlencode($url)."&zc=1&q=100&w=$w&h=$h";
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?=leacocks_meta()?>
	<title>Leacock's</title>
	<meta name="author" content="<?=$nav['Who We Are']?>">
	<!-- Date: 2011-04-25 -->
	<link rel="alternate" type="application/rss+xml" title="Leacock's Online Mag" href="http://www.leacocks.com/Feed/" /> 
	<link rel="shortcut icon" href="http://leacocks.com/FeaturesBlog/wp-content/uploads/2010/08/favicon.jpg"/>
	<link href='http://leacocks.com/code/common.css' rel='stylesheet' type='text/css'>
	<link href="/home/front-page/front-page.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(	['_setAccount', 'UA-11221838-1'], /*['_setDomainName', 'www.leacocks.com'],*/ ['_trackPageview'] );
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	  </script>
</head>
<body>
	<header>
		<img src="<?php echo getTimThumbPhotoURL('/home/front-page/LCslogo.jpg', 250, 87); ?>" alt="Leacock's Logo" title="Leacock's. Welcome." width="250" height="87">
		<a href="https://www.facebook.com/events/365554063461761/" title="Leacock's & Queer McGill Present: #DARK AND INTIMATE WITH RYAN O'CONNELL"><img border="0" src="<?php echo getTimThumbPhotoURL('/home/front-page/ryan_banner.jpg', 770, 85); ?>" alt="Leacock's & Queer McGill Present: #DARK AND INTIMATE WITH RYAN O'CONNELL" title=":)" height="85" width="770"></a>
	</header>
	<section id="content">
		<div class="row">
			<div class="left section">
				<a href="<?=$nav['Features']?>" title="Features">
					<img src="<?php echo getTimThumbPhotoURL('/home/front-page/features.jpg', 320, 320); ?>" alt="Features" width="320" height="320" />
					<span class="name">FEATURES</span>
					<span class="desc">&nbsp;Our Articles</span>
				</a>
			</div>
			<div class="middle section">
				<a href="<?=$nav['CampuSPOT']?>" title="CampuSPOT">
					<img src="<?php echo getTimThumbPhotoURL('/home/front-page/campuspot.jpg', 320, 320); ?>" alt="CampuSpot" width="320" height="320" />
					<span class="name">CAMPUSPOT</span>
					<span class="desc">&nbsp;Our Fashion Spots</span>
				</a>
			</div>
			<div class="right section">
				<a href="<?=$nav['Sessions']?>" title="Sessions">
					<img src="<?php echo getTimThumbPhotoURL('/home/front-page/sessions.jpg', 320, 320); ?>" alt="Sessions" width="320" height="320" />
					<span class="name" id="sessions">SESSIONS</span>
					<span class="desc">&nbsp;Our Concerts</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="left section">
				<a href="<?=$nav['Photos']?>" title="Photos">
					<img src="<?php echo getTimThumbPhotoURL('/home/front-page/photos.jpg', 320, 320); ?>" alt="Photos" width="320" height="320" />
					<span class="name">PHOTOS</span>
					<span class="desc">&nbsp;Our Photography</span>
				</a>
			</div>
			<div class="middle section">
				<a href="<?=$nav['Who We Are']?>" title="Who We Are">
					<img src="<?php echo getTimThumbPhotoURL('/home/front-page/who-we-are.jpg', 320, 320); ?>" alt="Who We Are" width="320" height="320" />
					<span class="name">WHO<br>WE ARE</span>
					<span class="desc">&nbsp;Our Contributors</span>
				</a>
			</div>
			<div class="right section">
				<div id="about">Leacock's is an online magazine about music, food, fashion, culture, photography and more.</div>
				<img src="/home/front-page/cock.png" alt="Cock" title="Yep, it's a rooster." id="cock">
			</div>
		</div>
	</section>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
