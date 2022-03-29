<section class="px-15px bg-light-brown-gray py-30px sm:py-78px">
  <div class="flex max-w-1270px m-auto items-center justify-center xslg:justify-between gap-4 flex-col sm:flex-row">
    <div class="flex flex-col text-white">
      <h4 class="text-1xl font-lobster-regular"><?php the_field('title_book_tour');?></h4>
      <p class="sm:text-md font-roboto-slab-regular max-w-600px xslg:max-w-full"><?php the_field('paragraph_book_tour');?></p>
    </div>
    <a class="bg-brown-primary hover:bg-light-b-h-gray duration-300 text-white font-roboto-slab-medium min-w-200px text-center uppercase px-30px xslg:px-45px py-10px sm:py-13px rounded-40px text-tn sm:text-sm inline-block" href="<?php the_field('button_link_book_tour')?>"><?php the_field('button_text_book_tour')?></a>
  </div>
</section>