<?php get_header(); ?>
<div class="container">
    <div class="main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        <?php endwhile; else : ?>
            <p>Nothing found.</p>
        <?php endif; ?>
    </div>
    <?php get_template_part( 'sidebar' ); ?>
</div>
<?php get_footer(); ?>
