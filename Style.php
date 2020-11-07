<?php
namespace com\xingchaovv\chao2020;

class Style {

	public function __construct() {
		$this->init();
	}

	private function init() {
		$this->registerStyles();
	}

	private function registerStyles() {
		add_action('wp_enqueue_scripts', function(){
			wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
		});
	}
}
