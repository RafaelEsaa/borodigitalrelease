<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title><?php get_the_title()?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
    <link rel="" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Kalam:300,400|Quicksand:300,400" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<?php wp_head();?>
</head>
<header>
	<div class="row">
		<div class="col-12 no-padding menu">
			<nav class="navbar navbar-toggleable-md navbar-light">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<div class="icon" onclick="myFunction(this) ">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
					</div>
				</button>
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<img src="<?php echo $image[0]; ?>" class="logo-header" alt="">
				<div class="collapse navbar-collapse" id="navbarText">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'top-menu',
								'container' => '',
								'container_id'    => 'bs4navbar',
								'container_class' => 'collapse navbar-collapse rafael',
								'menu_id'         => false,
								'menu_class'      => 'navbar-nav navbar-menu',
								'depth'           => 2,
								'fallback_cb'     => 'bs4navwalker::fallback',
								'walker'          => new bs4navwalker()
							)
						)
						?>
				</div>
			</nav>
		</div>
	</div>
</header>
<body>