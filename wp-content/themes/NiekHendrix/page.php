<?php get_header() ?>
<?php 
while(have_posts()){
    the_post();?>
    <h1><?php the_title();?>
    <div class="test"><?php the_content();?></div>
    <?php
}
?>