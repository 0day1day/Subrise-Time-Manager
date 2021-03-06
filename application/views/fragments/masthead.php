<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php
		if (isset($page_title))
			echo $page_title . ' | ';
	?>Subrise Games</title>
	<meta name="description" content="Subrise Games Time Management System">
	<meta name="author" content="Sammy Hubner">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/iconic/iconic.css">
	<script src="/assets/js/libs/modernizr-1.7.min.js"></script>

</head>

<body>
	<?php echo Msg::instance()->render();?>

	
	<ul id="menu_main" class="wrapper">
		<li><a href="<?php echo URL::site('project')?>">Projects</a></li>
		<?php if (Auth::instance()->logged_in('admin')) : ?>
		<li><a href="<?php echo URL::site('user')?>">Users</a></li>
		<?php endif; ?>
		<li><a href="<?php echo URL::site('account')?>">My account</a></li>
		<li><a href="<?php echo URL::site('auth/logout')?>">Logout</a></li>
	</ul><!-- #menu_main -->
