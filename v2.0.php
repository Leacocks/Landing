<?php 
	require_once(dirname(__FILE__).'/../code/common.php');
	$nav = leacocks_nav(); 
	
	function getTimThumbPhotoURL($url, $w, $h){
		return "http://leacocks.com/home/thumb.php?src=".urlencode($url)."&zc=1&q=100&w=$w&h=$h";
	}
	
	function absurl($relative){
		return "http://" . $_SERVER['SERVER_NAME'] . (($_SERVER['SERVER_NAME'] == "localhost") ? "/Leacocks" : "") . $relative;
	}
	
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?= leacocks_meta(); ?>
	<title>Leacock's Online Arts Magazine</title>
	<meta name="author" content="<?=$nav['Who We Are']?>">
	<!-- Date: 2011-04-25 -->
	<link rel="alternate" type="application/rss+xml" title="Leacock's Online Mag" href="http://www.leacocks.com/Feed/" /> 
	<link rel="shortcut icon" href="http://leacocks.com/FeaturesBlog/wp-content/uploads/2010/08/favicon.jpg"/>
	<link href='http://leacocks.com/code/common.css' rel='stylesheet' type='text/css'>
	<link href="<?php echo absurl("/home/stylesheets/v2.0.css"); ?>" rel="stylesheet" type="text/css">
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(	['_setAccount', 'UA-11221838-1'], /*['_setDomainName', 'www.leacocks.com'],*/ ['_trackPageview'] );
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	  document.onreadystatechange = function(){
		  if(this.readyState == "complete"){
			  document.getElementById("banner_a").onclick = function(){
			  	_gaq.push(['_trackEvent', 'banner', this.title, document.location.pathname + document.location.hash]);
			  };
		  }
	  };
	  </script>
</head>
<body>
    <div id="container">
        <header>
            <div id="features-link">
                <a href="/FeaturesBlog/">Features</a>
            </div>
            <div id="about-us-link">
                <a href="/WhoWeAre/">About Us</a>
            </div>
            <div id="leacocks-logo"></div>
            <div id="campuspot-link">
                <a href="/CampuSPOT/">CampuSPOT</a>
            </div>
            <div id="photos-link">
                <a href="/Photos/">Photos</a>
            </div>
        </header>
        <div id="landing">
            <section id="features">
                <header>
                    <span>The</span> Latest
                </header>
                <img src="<?php echo absurl("/home/front-page/features1.jpg"); ?>" height="187" width="440" alt="Features Blog" id="features-1">
                <img src="<?php echo absurl("/home/front-page/features2.jpg"); ?>" height="187" width="450" alt="Features Blog" id="features-2">
            </section>
            <section id="campuspot">
                <header>
                    <span>The</span> SPOT
                </header>
                <img src="<?php echo absurl("/home/front-page/campuspot.jpg"); ?>" height="187" width="293" alt="CampuSPOT">
            </section>
            <section id="photos">
                <header>
                    <span>The</span> Album
                </header>
                <img src="<?php echo absurl("/home/front-page/photos.jpg"); ?>" height="187" width="293" alt="Photos">
            </section>
            <section id="sessions">
                <header>
                    <span>The</span> Session
                </header>
                <img src="<?php echo absurl("/home/front-page/sessions.jpg"); ?>" height="187" width="293" alt="Sessions">
            </section>
        </div>
        <footer>
            
        </footer>
    </div>
</body>
</html>
