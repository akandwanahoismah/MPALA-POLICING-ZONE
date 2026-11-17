<?php get_header(); ?>

<div class="welcome">
    <h2>Welcome to Mpala, How can we help you today?</h2>
    <p>We are not just officers in uniform, we are your neighbours</p>
</div>

<div class="container">
    <div class="main-image">
        <div class="slideshow" id="slideshow">
            <img src="<?php echo esc_url( get_theme_file_uri( 'images/admin.jpg' ) ); ?>" class="active" alt="OC Mpala" data-text="OC Mpala - Serving with dedication">
            <img src="<?php echo esc_url( get_theme_file_uri( 'images/criminal.jpg' ) ); ?>" alt="Criminal Records Office" data-text="Criminal Records Office - Fast &amp; Accessible">
            <img src="<?php echo esc_url( get_theme_file_uri( 'images/dept.jpg' ) ); ?>" alt="Departments" data-text="Departments - Find the right person">
            <img src="<?php echo esc_url( get_theme_file_uri( 'images/services.jpg' ) ); ?>" alt="Our Services" data-text="Our Services - Here to help">
            <div class="slide-text" id="slideText">OC Mpala - Serving with dedication</div>
        </div>
        <div class="dots">
            <span class="dot active"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
        </div>
    </div>

    <?php get_template_part( 'sidebar', null, [ 'variant' => 'home' ] ); ?>
</div>

<?php get_footer(); ?>
