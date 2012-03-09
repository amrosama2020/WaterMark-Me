<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title_for_layout;?> - <?php print Configure::read("siteTitle"); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Amr Osama">
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<?php
		echo $this -> Html -> meta('icon');
		echo $this -> Html -> css(array('bootstrap.min.css','main','bootstrap-responsive.min.css'));
		echo $this -> fetch('meta');
		echo $this -> fetch('css');
		echo $this -> fetch('script');
		?>
		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	</head>
	<body>
		<?php
		print $this->element("header");
		?>
		<div class="container">
			<h1><?php print $title_for_layout; ?></h1>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			
			<footer class="footer">
				<p class="pull-right"><a href="#">Back to top</a></p>
				<p>Amr Osama</p>
				<p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>.</p>
				<p>Powered by <a href="http://cakephp.org/"><img src='<?php print $this->webroot; ?>img/cake.power.gif' /></a> and <a href="http://twitter.github.com/bootstrap">Bootstrab CSS Framework</a></p>
			</footer>
		</div>
		<!-- /container -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="<?php print $this->Webroot ?>/js/bootstrap.min.js"></script>
	</body>
</html>
