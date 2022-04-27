<section class="px-30px">
  <h2 class="text-center text-1xl uppercase font-roboto-bold mb-21px text-navy-blue"><?php the_field('title_serv');?></h2>
  <p class="text-center text-rg mb-74px"><?php the_field('paragraph_serv');?></p>
  <?php if( have_rows('items_serv') ):?>
    <div class="flex flex-wrap xlg:justify-between gap-y-30px xlg:gap-y-95px">
      <?php while( have_rows('items_serv') ) : the_row();?>
        <div class="w-full basis-full sm:basis-1/3 lg:basis-1/4 xlg:basis-18.394% flex flex-col items-center justify-between">
          <img class=" mb-15px sm:mb-25px" src="<?php the_sub_field('image');?>"/>
          <h2 class="mb-16px uppercase font-roboto-medium text-navy-blue text-lg text-center"><?php the_sub_field('title')?></h2>
          <p class="font-roboto-regular text-navy-blue-gray text-rg text-center mb-15px sm:mb-28px"><?php the_sub_field('paragraph');?></p>
          <a href="<?php the_sub_field('link')?>" class="uppercase underline text-sm text-navy-blue font-roboto-medium">Find out more</a>
        </div>
      <?php endwhile;?>
    </div>
  <?php endif;?>
  <hr class=" my-60px lg:my-114px "/>
</section>