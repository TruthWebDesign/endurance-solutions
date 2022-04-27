<div class="map-container w-full ">
  <?php $location = get_field('map','option');
  if( $location ): ?>
    <div class=" acf-map w-full  h-263px lg:h-585px " data-zoom="7">
      <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
  <?php endif; ?>
</div>