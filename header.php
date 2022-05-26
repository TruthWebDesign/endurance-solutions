<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php if(str_contains(get_permalink(), 'https')):?>
		<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<?php endif;?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-light-brown text-gray-900 antialiased' ); ?>>
<?php do_action( 'tailpress_site_before' ); ?>


<?php do_action( 'tailpress_header' ); ?>
	<header class="px-15px">
		<div class="header max-w-1270px m-auto flex py-20px items-center justify-between">
			<a href="/" ><img  class=" max-w-100px sm:max-w-100%"src="<?php the_field('logo_header','option')?>" /></a>
			<div class="flex items-center gap-3 xslg:gap-11 menu-header">
				<a class="lg:hidden" href="#"  onclick="MenuShow()"><?php echo do_shortcode( '[icon name="menu"]' )?></a>
				<a href="/" <?php if(is_front_page()): ?> class="is-homepage"<?php endif;?> ><?php echo do_shortcode( '[icon name="home"]' )?></a>
				<?php
					wp_nav_menu(
						array(
							'menu'        => 'Menu 1',
						)
					);
					?>
				<?php 
				
				/* <a class="bg-brown-primary hover:bg-light-brown-gray duration-300 text-white font-roboto-slab-medium  uppercase px-15px sm:px-25px xslg:px-45px py-4px sm:py-13px rounded-40px text-tn sm:text-sm " href="<?php the_field('button_link_header','option')?>"><?php the_field('button_text_header','option')?></a> */
				?>
			</div>
		</div>
	</header>
	<div id="container-menu-mobile" class="left-0 top-0 absolute w-full  hidden z-40">
				<div id="mySidenav" class="sidenav h-full w-0 fixed z-10 top-0 left-0  duration-500 ">
					<div class="container-menu h-full ">
						<div class="bg-brown-primary max-w-302px h-full relative ">
						<a href="javascript:void(0)" class="closebtn  text-white cursor-pointer absolute top-0 right-6 text-1xl p-0 mt-10px " onclick="MenuClose()">&times;</a>
						<?php
							wp_nav_menu(
								array(
									'menu'        => 'Menu 1',
								)
							);
							?>
						</div>
					</div>
				</div>
			</div>
	<script>
	function MenuShow() {
		document.getElementById("container-menu-mobile").style.display = "block";
		document.getElementById("mySidenav").style.width = "100%";
		var body = document.body;
		body.classList.add("overflow-body");
	}
	function MenuClose(){
		document.getElementById("container-menu-mobile").style.display = "none";
		document.getElementById("mySidenav").style.width = "0";
		var body = document.body;
		body.classList.remove("overflow-body");
	}
</script>
		<main>
