<?php get_header(); ?> 
<h1>Mon premier modèle Wordpress</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php $lien = " ... <a class='boutton' href='"
        . get_permalink() . "'>". get_the_title(). "</a>";
        echo $lien; ?>

<p><?= wp_trim_words(get_the_content(), 20, $lien); ?></p> 


    <?php endwhile; ?>
<?php endif; ?>    

<?php get_footer(); ?>