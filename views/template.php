
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=580, initial-scale=1.0">
    <meta name="description" content="Kies de beste docent van het jaar!">
    <meta name="author" content="Herman Banken">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="https://ch.tudelft.nl/sites/default/themes/CHallenge/favicon.ico">

    <!-- Le styles -->
    <link href="<?php echo URL::site("assets/css/bootstrap.css") ?>" rel="stylesheet">
    <link href="<?php echo URL::site("assets/css/bootstrap-responsive.min.css") ?>" rel="stylesheet">
    <link href="<?php echo URL::site("assets/css/app.css") ?>" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
		
		<meta name="root_url" content="<?php echo URL::base(); ?>">
  </head>

  <body class="<?php echo Request::current()->controller()." ".Request::current()->controller()."-".Request::current()->action(); ?>">
	<div class="full">
    
		<?php echo $menu; ?>
		<div class="menu-padding"></div>
		
		<?php
		$content = (string) $content;
		
		if($flash = Session::instance()->get("flash", false)){
			echo "<div class='container-narrow'><div class='alert alert-$flash[type]'>$flash[message]</div></div>";
			Session::instance()->delete("flash");
		}
		?>
		
    <?php echo $content; ?>

    <div class="section footer">
			<div class="container-narrow">
				<p>&copy; W.I.S.V. 'Christiaan Huygens' <?php echo date("Y"); ?></p>
			</div>
		</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo URL::site("assets/js/combined.js") ?>"></script>
    <script src="<?php echo URL::site("assets/js/app.js") ?>"></script>

	</div>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-3854592-13', 'wisv.ch');
	  ga('send', 'pageview');

	</script>
</body>
</html>