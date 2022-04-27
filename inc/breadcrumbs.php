<?php

function the_breadcrumb() {
	global $post;
	if (!is_home()) {
    echo "";
    if(is_single()):
      echo '<a href="/">Home</a>';
    else:
      
      echo '<a href="/">Home</a>';
    endif;
      echo " ".do_shortcode('[icon name = "arrow-bread"]')." ";
      if ( is_category() || is_single() ) {
          the_category(', ');
          if ( is_single() ) {
            echo " ".do_shortcode('[icon name = "arrow-bread"]')." ";
              the_title();
          }
      } elseif ( is_page() && $post->post_parent ) {
        echo '<a href="'. get_permalink($post->post_parent).'">'. apply_filters('the_title', get_the_title($post->post_parent)) .'</a>';
          echo " ".do_shortcode('[icon name = "arrow-bread"]')." ";
          echo the_title();
      } elseif (is_page()) {
          echo '';
          echo the_title();
          echo "";
      }
  }
}