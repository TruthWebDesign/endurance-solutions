
</main>
	<?php do_action( 'tailpress_content_after' ); ?>

	<footer class="px-15px">

		<div class="flex flex-col sm:flex-row justify-between max-w-1270px m-auto footer-container pt-47px sm:gap-11 items-start xslg:items-center">
			<div class="left w-full max-w-full sm:max-w-302px ">
				<img class="m-auto" src="<?php the_field('logo_footer','option')?>"/>
				<?php
					wp_nav_menu(
						array(
							'menu'        => 'Footer Menu',
						)
					);
				?>
			</div>
			<div class="right max-w-845px w-full pt-20px sm:pt-40px">
				<h3 class=" text-sm lg:text-lg font-roboto-slab-regular text-navy-blue max-w-700px"><?php the_field('paragraph_footer','option')?></h3>
				<div class="xslg:border-y-2 border-lbg-opac flex justify-between xslg:items-center mt-25px sm:mt-60px flex-col xslg:flex-row gap-4 xslg:gap-0">
						<div class="map-container w-full xslg:max-w-410px">
							<?php $location = get_field('map','option');
							if( $location ): ?>
								<div class=" acf-map w-full xslg:max-w-410px h-263px " data-zoom="7">
									<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
								</div>
							<?php endif; ?>
						</div>
						<div class="info pr-40px">
							<h5 class="text-sm text-navy-blue-gray font-roboto-slab-medium">Address</h5>
							<a class="text-sm text-navy-blue-gray font-roboto-slab-medium mb-15px sm:mb-25px inline-block"  href="<?php the_field('address_link__footer','option')?>" ><?php the_field('address_text_footer','option')?></a>
							<h5 class="text-sm text-navy-blue-gray font-roboto-slab-medium mb-14px">Call: <a href="/"><?php the_field('phone_footer','option')?></a></h5>
							<h5 class="text-sm text-navy-blue-gray font-roboto-slab-medium  mb-15px sm:mb-25px">Fax: <?php the_field('fax_footer','option')?></h5>
							<h5 class="text-sm text-navy-blue-gray font-roboto-slab-medium">Email: <a href="mailto:<?php the_field('email_footer','option')?>" class="underline " ><?php the_field('email_footer','option')?></a></h5>
						</div>
				</div>
			</div>
		</div>
		<div class="flex justify-between max-w-1270px m-auto items-center pt-20px sm:pt-0 gap-4 sm:gap-11 flex-col sm:flex-row">
			<div class="flex w-full sm:max-w-302px bg-navy-blue justify-center items-center py-60px gap-30px">
				<?php
					if( have_rows('social_media_footer','option') ):
						while( have_rows('social_media_footer','option') ) : the_row();
				?>
					<img src="<?php the_sub_field('image')?>" />
				<?php 
						endwhile;
					endif;
				?>
			</div>
			<div class="flex w-full max-w-845px flex-col xslg:flex-row gap-4 xslg:gap-0 justify-between items-center">
				<h5 class="text-tn sm:text-sm text-navy-blue-gray font-roboto-slab-regular text-center"><?php the_field('copyright_footer','option')?></h5>
				<div class="flex">
				<?php
					if( have_rows('links_footer','option') ):
						$i = 1 ;
						while( have_rows('links_footer','option') ) : the_row();
				?>
					<a class="text-tn sm:text-sm text-navy-blue-gray font-roboto-slab-regular" href="<?php the_sub_field('link')?>"><?php the_sub_field('text')?></a> <?php if( $i < count(get_field('links_footer','option'))):?>&nbsp; &nbsp;/  &nbsp; &nbsp; <?php endif;?>
				<?php 
						$i++;
						endwhile;
					endif;
				?>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
