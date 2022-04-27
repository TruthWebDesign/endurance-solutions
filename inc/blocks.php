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

    acf_register_block(array(
      'name'				=> 'content-w-image',
      'title'				=> __('Content with Image'),
      'description'		=> __('A custom Content with Image block.'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'content-w-image' ),
      'mode'        => 'edit',
    ));
    
    acf_register_block(array(
      'name'				=> 'book-tour',
      'title'				=> __('Book a Tour'),
      'description'		=> __('A custom Book a Tour block.'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'book-tour' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'serv-amenities',
      'title'				=> __('Service and amenities'),
      'description'		=> __('A custom Service and amenities block.'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'serv-amenities' ),
      'mode'        => 'edit',
    ));
    
    acf_register_block(array(
      'name'				=> 'block-map',
      'title'				=> __('Map Block'),
      'description'		=> __('A custom Map Block block.'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'block-map' ),
      'mode'        => 'edit',
    ));
        
    acf_register_block(array(
      'name'				=> 'gallery-block',
      'title'				=> __('Gallery Block'),
      'description'		=> __('A custom Gallery Block block.'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'gallery-block' ),
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