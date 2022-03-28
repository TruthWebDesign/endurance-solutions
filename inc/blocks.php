<?php 
  add_action('acf/init', 'my_acf_init_second');
  function my_acf_init_second() {

    // register a testimonials block
    acf_register_block(array(
      'name'				=> 'hero',
      'title'				=> __('Hero'),
      'description'		=> __('A custom Hero block.'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'hero' ),
      'mode'        => 'edit',
    ));
  }

  function my_acf_block_render_callback( $block ) {
    $slug = str_replace('acf/', '', $block['name']);
    if( file_exists(STYLESHEETPATH . "/template-parts/blocks/{$slug}.php") ) {
        include( STYLESHEETPATH . "/template-parts/blocks/{$slug}.php" );
    }
  }
?> 