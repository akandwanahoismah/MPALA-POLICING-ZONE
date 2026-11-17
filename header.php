<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">MPALA POLICE STATION</a></div>
    <nav>
        <?php
        wp_nav_menu( [
            'theme_location' => 'primary',
            'container'      => false,
            'depth'          => 1,
            'fallback_cb'    => 'mpala_fallback_menu',
        ] );
        ?>
    </nav>
</header>
