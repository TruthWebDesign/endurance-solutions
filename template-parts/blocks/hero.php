<section class="hero flex items-center justify-center px-15px h-300px sm:h-440px xlg:h-530px 16inch:h-770px bg-no-repeat bg-20% bg-left lg:bg-right  bg-cover" style=" background-color: #F5F5F5; background-image: url('<?php the_field('image_background_hero')?>');">
  <div class="w-full max-w-1270px ">
    <h1 class=" text-xl sm:text-1xl lg:text-2xl xslg:text-2/2xl font-lobster-regular text-navy-blue"><?php the_field('title_hero');?></h1>
    <h2 class=" text-md sm:text-lg lg:text-xl xslg:text-1xl font-roboto-slab-light text-light-black"><?php the_field('subtitle_hero');?></h2>
    <div class="flex mt-30px gap-3">
      <a class="bg-brown-primary flex items-center text-white font-roboto-slab-medium  uppercase px-15px sm:px-25px xslg:px-45px py-4px sm:py-13px rounded-40px text-tn sm:text-sm " href="<?php the_field('button_first_link_hero')?>"><?php the_field('button_first_text_hero')?></a>
      <a class=" text-navy-blue font-roboto-slab-medium border-2 border-navy-blue uppercase px-15px sm:px-25px xslg:px-45px py-4px sm:py-13px rounded-40px text-tn sm:text-sm " href="<?php the_field('button_second_link')?>"><?php the_field('button_second_text_hero')?></a>
    </div>
  </div>
</section>
<section class="flex px-15px">
  <div class="flex justify-around w-full px-15px xlg:px-0 max-w-1500px m-auto bg-light-brown-gray sm:-mt-70px py-10px sm:py-40px">
    <div class="flex gap-0 sm:gap-18px flex-col sm:flex-row items-center">
      <?php echo do_shortcode( '[icon name="star"]' )?>
      <div class="flex flex-col items-center xlg:items-start">
        <h5 class="font-roboto-slab-bold text-white text-ms xslg:text-lg">FEATURE</h5>
        <p class="font-roboto-slab-regular text-white text-sm xslg:text-rg text-center">Curabitur tristique a risus ut sollicitudin.</p>
      </div>
    </div>
    <div class="flex gap-0 sm:gap-18px flex-col sm:flex-row items-center">
      <?php echo do_shortcode( '[icon name="star"]' )?>
      <div class="flex flex-col items-center xlg:items-start">
        <h5 class="font-roboto-slab-bold text-white text-ms xslg:text-lg">FEATURE</h5>
        <p class="font-roboto-slab-regular text-white text-sm xslg:text-rg text-center">Curabitur tristique a risus ut sollicitudin.</p>
      </div>
    </div>
    <div class="flex gap-0 sm:gap-18px flex-col sm:flex-row items-center">
      <?php echo do_shortcode( '[icon name="star"]' )?>
      <div class="flex flex-col items-center xlg:items-start">
        <h5 class="font-roboto-slab-bold text-white text-ms xslg:text-lg">FEATURE</h5>
        <p class="font-roboto-slab-regular text-white text-sm xslg:text-rg text-center">Curabitur tristique a risus ut sollicitudin.</p>
      </div>
    </div>
  </div>
</section>