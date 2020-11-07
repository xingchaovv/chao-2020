<?php
namespace com\xingchaovv\chao2020;

class Post {

	public function __construct() {
		$this->init();
	}

	private function init() {
		add_action('twentytwenty_end_of_post_meta_list', [$this, 'showCountOfView'], 10, 3);
	}

	/**
	 * Meta 位置显示文章阅读数
	 */
	public function showCountOfView($post_id, $post_meta, $location) {
		if ($location != 'single-top') {
			return;
		}
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
	}
}
