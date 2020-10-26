<?php
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
});

/**
 * Meta 位置显示文章阅读数
 */
add_action('twentytwenty_end_of_post_meta_list', function(){
	if (!function_exists('the_views')) {
		return;
	}
	$viewHtml = the_views(false);
	echo <<<HEREDOC
<li class="meta-wrapper">
   <span class="meta-icon">📰️</span>
   <span class="meta-text">{$viewHtml}</span>
</li>
HEREDOC;
});
