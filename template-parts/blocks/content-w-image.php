<section class="flex flex-col xslg:flex-row justify-between items-center max-w-1864px px-15px xslg:px-50px py-30px sm:py-60px gap-3 sm:gap-7">
  <div class="left">
    <img src="<?php the_field('image_content_image')?>" />
  </div>
  <div class="right">
  <h3 class="xslg:max-w-542px text-lg sm:text-xls lg:text-1xl 2xlg:text-2xl font-lobster-regular text-navy-blue pb-14px"><?php the_field('title_content_image');?></h3>
  <p class="xslg:max-w-542px pb-15px sm:pb-25px 2xlg:pb-34px  font-roboto-slab-regular text-gray-navy text-sm 2xlg:text-md"><?php the_field('paragraph_content_image');?></p>
  <?php if( have_rows('list_content_image') ):?>
    <ul class="flex flex-col gap-14px pb-15px sm:pb-25px 2xlg:pb-34px text-gray-navy text-sm 2xlg:text-md">
     <?php while( have_rows('list_content_image') ) : the_row();?>
      <li class="flex gap-2 sm:gap-18px tems-center"><?php echo do_shortcode( '[icon name="valid"]' )?><?php the_sub_field('item')?></li>
      <?php endwhile;?>
    </ul> 
  <?php endif;?>
  <a class="bg-brown-primary    text-white font-roboto-slab-medium  uppercase px-30px xslg:px-66px py-10px sm:py-13px rounded-40px text-tn sm:text-sm inline-block" href="<?php the_field('button_link_content_image')?>"><?php the_field('button_text_content_image')?></a>
  </div>
</section>