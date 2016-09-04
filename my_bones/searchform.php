<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label for="s" class="screen-reader-text"><?php _e('Search for:','bonestheme'); ?></label>
        <input type="text" value="" placeholder="Not all who wander are lost." name="s" id="s" />
        <button type="submit" id="searchsubmit" ><?php _e('Search','bonestheme'); ?></button>
    </div>
</form>
