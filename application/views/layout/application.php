<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHP - Project Starter</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/assets/stylesheets/normalize.css">
        <link rel="stylesheet" href="/assets/stylesheets/fonts.css">
        <link rel="stylesheet" href="/assets/stylesheets/main.css">
        <script src="/assets/javascripts/vendor/modernizr-2.6.1.min.js"></script>
        
        <meta property="og:title" content="OG_TITLE" />
        <meta property="og:description" content="OG_DESCRIPTION" />
        <meta property="og:url" content="OG_URL" />
        <meta property="og:image" content="OG_IMAGE" />
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
		<div id="fb-root"></div>
		<header>
			<h1>Isso é um header</h1>
		</header>
        <div role="main">
			<?= $content_for_layout; ?>
        </div>
		<footer>
			<p>Foooooooooooooooooter</p>
		</footer>
		<script src="//connect.facebook.net/en_US/all.js"></script>
    <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : 'APP_ID'
      });
      FB.Canvas.setAutoGrow();
    }
    </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/javascripts/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="/assets/javascripts/plugins.js"></script>
        <script src="/assets/javascripts/main.js"></script>
		<!--[if lt IE 9]>
			<script src="/assets/javascripts/vendor/html5shiv.js"></script>
		<![endif]-->
		
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
