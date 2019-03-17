<html>
<head>
<title>Tutorial theme</title>


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=ABeeZee|Lato|Montserrat|Noto+Sans|Nunito+Sans|Open+Sans|Roboto|Satisfy|Source+Sans+Pro" rel="stylesheet">

</head>
<body>

<header class="container mt-2">
	<div class="row">
		<div class="col-md-6 col-lg-8 text-center text-md-left">
			<img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo.svg'; ?>">
		</div>

  		<div class="col-md-6 col-lg-4 d-flex align-content-center flex-wrap">
  			<?php get_search_form(); ?>
  		</div>
	</div>
</header>


<nav id="mainNav" class="container navbar navbar-expand-lg navbar-dark bg-dark mb-3">  
	<button
		class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false"
		type="button" data-toggle="collapse" data-target="#navbarNav"  aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarNav">
		<?php
			wp_nav_menu(array(
			  'menu' => 'main-menu',
			  'container'      => 'ul',
			  'menu_class'     => 'navbar-nav'
			));
		?>
    </div>
</nav>
