<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-light-brown text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="">
<?php do_action( 'tailpress_header' ); ?>
	<header class="px-15px">
		<div class="header max-w-1270px m-auto flex py-20px items-center justify-between">
			<div class=""><img  class=" max-w-100px sm:max-w-auto"src="<?php the_field('logo_header','option')?>" /></div>
			<div class="flex items-center gap-3 xslg:gap-11 menu-header">
				<a class="lg:hidden" href="#"><?php echo do_shortcode( '[icon name="menu"]' )?></a>
				<a href="/" <?php if(is_front_page()): ?> class="is-homepage"<?php endif;?> ><?php echo do_shortcode( '[icon name="home"]' )?></a>
				<?php
					wp_nav_menu(
						array(
							'menu'        => 'Menu 1',
						)
					);
				?>
				<a class="bg-brown-primary text-white font-roboto-slab-medium  uppercase px-15px sm:px-25px xslg:px-45px py-10px sm:py-15px rounded-40px text-tn sm:text-sm " href="<?php the_field('button_link_header','option')?>"><?php the_field('button_text_header','option')?></a>
			</div>
		</div>
		
	</header>

	<div id="content" class="">
		<main>
