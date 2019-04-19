<!DOCTYPE html >

<html <?php language_attributes();?>>
	<head>
	
		<!-- <meta charset="utf-8" /> -->
		<meta charset="<?php bloginfo('charset')?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <?php wp_head();?>
	</head>
	<body  <?php body_class( 'is-preload' ); ?> >
		<?php  if(is_home()){ ?>
        <!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">Who we are</a></li>
							<li><a href="#two">What we do</a></li>
							<li><a href="#three">Get in touch</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<?php } else {?>
			<!-- Header -->
			<header id="header">
				<a href="<?php echo site_url() ?>" class="title">Daytona Dev Solutions</a>
				<nav>
					<!-- <ul>
						<li><a href="<?php  echo site_url();?>">Home</a></li>
						<li><a href="<?php  echo site_url('/privicy-policy');?>" class="active">Privicy & policy</a></li>
						<li><a href="<?php  echo site_url('/test')?> ">Elements</a></li>
					</ul> -->
					<?php 
					wp_nav_menu(array(

						'theme_location' => 'headerMenuLocation'
					));
					?>
				</nav>
			</header>
		<?php } ?>