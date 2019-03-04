<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>
<h4>Categories</h4>
<?php wp_list_cats(); ?>

<?php wp_list_pages() ?>