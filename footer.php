
</main>
	<?php do_action( 'tailpress_content_after' ); ?>

	<footer class="px-15px">

		<div class="flex flex-col sm:flex-row justify-between max-w-1270px m-auto footer-container pt-47px sm:gap-11 items-start xslg:items-center">
			<div class="left w-full max-w-full sm:max-w-302px ">
				<a href="/"><img class="m-auto" src="<?php the_field('logo_footer','option')?>"/></a>
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
							<a class="text-sm text-navy-blue-gray hover:text-navy-blue duration-300 font-roboto-slab-medium mb-15px sm:mb-25px inline-block" target="_blank" href="<?php the_field('address_link__footer','option')?>" ><?php the_field('address_text_footer','option')?></a>
							<h5 class="text-sm text-navy-blue-gray font-roboto-slab-medium mb-14px">Call: <a href="tel:<?php the_field('phone_footer','option')?>"><?php the_field('phone_footer','option')?></a></h5>
							<!-- <h5 class="text-sm text-navy-blue-gray font-roboto-slab-medium  mb-15px sm:mb-25px">Fax: <?php the_field('fax_footer','option')?></h5> -->
							<h5 class="text-sm text-navy-blue-gray  font-roboto-slab-medium">Email: <a href="mailto:<?php the_field('email_footer','option')?>" class="underline hover:text-navy-blue duration-300" ><?php the_field('email_footer','option')?></a></h5>
						</div>
				</div>
			</div>
		</div>
		<div class="flex justify-between max-w-1270px m-auto items-center py-20px sm:py-0 gap-4 sm:gap-11 flex-col sm:flex-row">
			<div class="flex w-full sm:max-w-302px bg-navy-blue justify-center items-center py-60px gap-30px">
				<?php
					if( have_rows('social_media_footer','option') ):
						while( have_rows('social_media_footer','option') ) : the_row();
				?>
					<a href="<?php the_sub_field('link')?>" target="_blank"><img class="hover:opacity-50 duration-300" src="<?php the_sub_field('image')?>" /></a>
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
					<a class="text-tn sm:text-sm text-navy-blue-gray hover:text-navy-blue duration-300 font-roboto-slab-regular" href="<?php the_sub_field('link')?>"><?php the_sub_field('text')?></a> <?php if( $i < count(get_field('links_footer','option'))):?>&nbsp; &nbsp;/  &nbsp; &nbsp; <?php endif;?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
<script>
	(function( $ ) {
  /**
   * initMap
   *
   * Renders a Google Map onto the selected jQuery element
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @return  object The map instance.
   */
  function initMap( $el ) {
  
      // Find marker elements within map.
      var $markers = $el.find('.marker');
  
      // Create gerenic map.
      var mapArgs = {
          zoom        : $el.data('zoom') || 16,
          mapTypeId   : google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map( $el[0], mapArgs );
  
      // Add markers.
      map.markers = [];
      $markers.each(function(){
          initMarker( $(this), map );
      });
  
      // Center map based on markers.
      centerMap( map );
  
      // Return map instance.
      return map;
  }
  
  /**
   * initMarker
   *
   * Creates a marker for the given jQuery element and map.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @param   object The map instance.
   * @return  object The marker instance.
   */
  function initMarker( $marker, map ) {
  
      // Get position from marker.
      var lat = $marker.data('lat');
      var lng = $marker.data('lng');
      var latLng = {
          lat: parseFloat( lat ),
          lng: parseFloat( lng )
      };
  
      // Create marker instance.
      var marker = new google.maps.Marker({
          position : latLng,
          map: map
      });
  
      // Append to reference for later use.
      map.markers.push( marker );
  
      // If marker contains HTML, add it to an infoWindow.
      if( $marker.html() ){
  
          // Create info window.
          var infowindow = new google.maps.InfoWindow({
              content: $marker.html()
          });
  
          // Show info window when marker is clicked.
          google.maps.event.addListener(marker, 'click', function() {
              infowindow.open( map, marker );
          });
      }
  }
  
  /**
   * centerMap
   *
   * Centers the map showing all markers in view.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   object The map instance.
   * @return  void
   */
  function centerMap( map ) {
  
      // Create map boundaries from all map markers.
      var bounds = new google.maps.LatLngBounds();
      map.markers.forEach(function( marker ){
          bounds.extend({
              lat: marker.position.lat(),
              lng: marker.position.lng()
          });
      });
  
      // Case: Single marker.
      if( map.markers.length == 1 ){
          map.setCenter( bounds.getCenter() );
  
      // Case: Multiple markers.
      } else{
          map.fitBounds( bounds );
      }
  }
  
  // Render maps on page load.
  $(document).ready(function(){
      $('.acf-map').each(function(){
          var map = initMap( $(this) );
      });
  });
  
  })(jQuery);
</script>