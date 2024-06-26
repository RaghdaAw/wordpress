<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <div class="Paintings">
<?php wp_nav_menu( array( 'theme_location' => 'menu', 'menu_class' => 'categories-filter' ) ); ?>
</div>
    <h1><?php the_title(); ?></h1>

    <div>
        <?php the_content();?>
    </div>
</div>

<?php get_footer(); ?>