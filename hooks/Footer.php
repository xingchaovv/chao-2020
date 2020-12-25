<?php
namespace com\xingchaovv\chao2020\hooks;

class Footer {

	public function __construct() {
		add_action('wp_footer', [$this, 'insertThemeDescByJS']);
	}

	public function insertThemeDescByJS() {
		$themeDesc = '主题：<a href="https://github.com/xingchaovv/chao-2020">Chao 2020</a>';
		echo <<<HEREDOC
<script type="text/javascript">jQuery(".footer-credits").append('<p class="powered-by-wordpress">{$themeDesc}</p>');</script>
HEREDOC;
	}
}
