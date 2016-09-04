<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();

?>

    <h1 id="the_title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <p id="the_excerpt">
    	<?php the_excerpt(); ?>
    </p>

<?php
endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();

?>
