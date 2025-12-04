<form method="GET" action="<?php echo get_bloginfo('url'); ?>" class="relative">
    <input type="text" name="s" class="max-w-40 border border-primary px-4 py-2 text-sm rounded-full" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search'); ?>">
    <button type="submit" class="absolute right-2 top-2 text-primary cursor-pointer">
        <i class="fas fa-search text-white"></i>
    </button>
</form>
