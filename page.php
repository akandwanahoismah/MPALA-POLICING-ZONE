<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="welcome">
    <h2><?php the_title(); ?></h2>
    <p>Protect and Serve with Heart</p>
</div>
<div class="container">
    <div class="main-content">
        <?php if ( '' === trim( wp_strip_all_tags( get_the_content() ) ) ) : ?>
            <p>This page is under construction - content coming soon.</p>
        <?php else : ?>
            <?php the_content(); ?>
        <?php endif; ?>
    </div>
    <?php get_template_part( 'sidebar' ); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
