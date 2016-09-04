<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();

?>

    <div class="the_title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <p class="the_excerpt">
    	<?php the_excerpt(); ?>
    </p>

<?php
endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();

?>
