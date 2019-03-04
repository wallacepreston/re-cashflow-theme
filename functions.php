
<?php
add_filter('wp_list_pages', create_function('$t', 'return str_replace("<li ", "<li class=\"nav-item\" ", $t);'));
add_filter('wp_list_pages', create_function('$t', 'return str_replace("<a ", "<a class=\"nav-link\" ", $t);'));
?>