<form method="GET" action="<?php echo get_bloginfo('url'); ?>" class="relative">
    <input type="text" name="s" class="border border-white px-4 py-2 text-sm rounded-full" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search'); ?>">
    <button type="submit" class="absolute right-2 top-2">
        <i class="fas fa-search"></i>
    </button>
</form>
