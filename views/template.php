
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=580, initial-scale=1.0">
    <meta name="description" content="Kies de beste docent van het jaar!">
    <meta name="author" content="Herman Banken">

    <!-- Le styles -->
    <link href="<?php echo URL::site("assets/css/bootstrap.css") ?>" rel="stylesheet">
    <link href="<?php echo URL::site("assets/css/bootstrap-responsive.min.css") ?>" rel="stylesheet">
    <link href="<?php echo URL::site("assets/css/app.css") ?>" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="https://ch.tudelft.nl/sites/default/themes/CHallenge/favicon.ico">
		
		<script>var root_url = "<?php echo URL::base(); ?>";</script>
  </head>

  <body class="<?php echo Request::current()->controller()." ".Request::current()->controller()."-".Request::current()->action(); ?>">
	<div class="full">
    
		<?php echo $menu; ?>

    <?php echo $content; ?>

    <div class="section footer">
    	<p>&copy; W.I.S.V. 'Christiaan Huygens' <?php echo date("Y"); ?></p>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo URL::site("assets/js/jquery.js") ?>"></script>
    <script src="<?php echo URL::site("assets/js/jquery.hashchange.js") ?>"></script>
    <script src="<?php echo URL::site("assets/js/bootstrap.min.js") ?>"></script>
    <script src="<?php echo URL::site("assets/js/app.js") ?>"></script>
    <script src="<?php echo URL::site("assets/js/Placeholders.min.js") ?>"></script>

	</div>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-3854592-12']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>