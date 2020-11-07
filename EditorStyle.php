<?php
namespace com\xingchaovv\chao2020;

class EditorStyle {

	public function __construct() {
		$this->init();
	}

	private function init() {
		$this->registerBlockEditorStyles();
	}

	private function registerBlockEditorStyles() {
		add_action( 'enqueue_block_editor_assets', function(){
			wp_enqueue_style(
				'chao-block-editor-styles',
				get_theme_file_uri('assets/css/chao-editor-style-block.css')
			);
		});
	}
}
