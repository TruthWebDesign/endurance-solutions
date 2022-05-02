<?php if(get_field('home_section_hero')):?>
  <section class="hero flex items-center justify-center px-15px h-300px sm:h-440px xlg:h-530px 16inch:h-770px bg-no-repeat bg-20% bg-left lg:bg-right  bg-cover" style=" background-color: #F5F5F5; background-image: url('<?php the_field('image_background_hero')?>');">
    <div class="w-full max-w-1270px ">
      <h1 class=" text-xl sm:text-1xl lg:text-2xl xslg:text-2/2xl font-lobster-regular text-navy-blue"><?php the_field('title_hero');?></h1>
      <h2 class=" text-md sm:text-lg lg:text-xl xslg:text-1xl font-roboto-slab-light text-light-black"><?php the_field('subtitle_hero');?></h2>
      <div class="flex mt-30px gap-3">
        <a class="bg-brown-primary hover:bg-light-brown-gray duration-300  flex justify-center items-center text-white font-roboto-slab-medium  uppercase min-w-120px sm:min-w-200px   py-4px sm:py-13px rounded-40px text-tn sm:text-sm " href="<?php the_field('button_first_link_hero')?>"><?php the_field('button_first_text_hero')?></a>
        <a class=" text-navy-blue font-roboto-slab-medium border-2 flex justify-center hover:text-light-brown-gray  hover:border-light-brown-gray duration-300  border-navy-blue uppercase min-w-120px sm:min-w-200px py-4px sm:py-13px rounded-40px text-tn sm:text-sm " href="<?php the_field('button_second_link')?>"><?php the_field('button_second_text_hero')?></a>
      </div>
    </div>
  </section>
  <section class="flex px-15px">
    <div class="flex justify-around w-full px-15px xlg:px-0 max-w-1500px m-auto bg-light-brown-gray sm:-mt-70px py-10px sm:py-40px">
    
    <?php if( have_rows('repeater_feature_hero') ):?>
      <?php while( have_rows('repeater_feature_hero') ) : the_row();?>
      <div class="flex gap-0 sm:gap-18px flex-col sm:flex-row items-center">
        <?php echo do_shortcode( '[icon name="star"]' )?>
        <div class="flex flex-col items-center xlg:items-start">
          <h5 class="font-roboto-slab-bold text-white text-ms xslg:text-lg"><?php the_sub_field('title')?></h5>
          <p class="font-roboto-slab-regular text-white text-sm xslg:text-rg text-center"><?php the_sub_field('subtitle')?></p>
        </div>
      </div>
        <?php endwhile;?>
    <?php endif;?>
    </div>
  </section>
  <?php else:?>
<section class="hero-mini h-200px lg:h-400px bg-cover bg-no-repeat flex pl-60px pr-15px" style=" background-color: #F5F5F5; background-image: url('<?php the_field('image_background_hero')?>');">
    <div class="max-w-1270px m-auto w-full">
      <h1 class="text-xl sm:text-1xl lg:text-2xl xslg:text-2/2xl font-lobster-regular text-navy-blue mb-20px"><?php single_post_title()?></h1>
      <div class="flex items-center  font-roboto-medium uppercase gap-3.5"><?php echo do_shortcode( '[icon name="home"]' )?><?php the_breadcrumb(); ?></div>
    </div>
</section>
<?php endif;?>