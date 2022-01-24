<?php
//register your custom gutenberg block using ACF init hook

add_action('acf/init', 'acf_accordion_block');

function acf_accordion_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		acf_register_block(array(
			'name'				=> 'post-accordion',
			'title'				=> __('Post Accordion'),
			'description'		=> __('A custom block for post accordion anchor links.'),
			'render_template'	=> 'template-parts/blocks/post-accordion/block-post-accordion.php',
			'category'			=> 'widgets',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'accordion' ),
		));
	}
}
?>