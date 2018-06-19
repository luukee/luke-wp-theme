<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div>

	<header>
		
		<h1><a class="hidden-element" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			
		<nav>
			<?php wp_nav_menu( array( 
				'theme_location' => 'primary',
				'container' => 'ul',
				'menu_class' => 'vertical medium-horizontal dropdown menu' 
				)); ?>
		</nav>
    <div data-sticky-container>
      <div data-sticky data-options="marginTop:0;">

        <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle="example-menu"></button>
          <div class="title-bar-title">Menu</div>
        </div>

        <div class="top-bar" id="example-menu">
          <ul class="vertical medium-horizontal dropdown menu" data-responsive-menu="accordion medium-dropdown">
            <li class="menu-text">Site Title</li>
            <li>
              <a href="#">One</a>
              <ul class="menu vertical nested">
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
              </ul>
            </li>
            <li><a href="/contact.html">Contact</a></li>
            <li><a href="#">Three</a></li>
          </ul>
        </div>

      </div>
    </div>
	</header>
