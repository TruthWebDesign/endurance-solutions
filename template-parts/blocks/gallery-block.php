<?php 
 $images = get_field('images_gallery');
 $categories = array('all');
?>
<?php foreach($images as $image) : ?>
  <?php array_push($categories, $image['category']); ?>
<?php endforeach; ?>
<section class="max-w-1310px m-auto pb-60px lg:pb-134px">
  <ul class="category-list flex-wrap  items-start sm:flex-row flex gap-2 sm:gap-30px xlg:gap-90px justify-center  px-15px ">
    <?php foreach(array_unique($categories) as $category) : ?>
      <li id="<?php echo $category; ?>" class=" relative category-item cursor-pointer text-sm uppercase font-roboto-slab-medium  <?php echo $_GET['category'] == $category ? ' active' : !isset($_GET['category']) && $category == 'all' ? ' active' : ''; ?>"><?php echo str_replace('_', ' ', $category); ?><span class="aboslute w-full border-1"></span></li>
    <?php endforeach; ?>
  </ul>
  <hr class="line mt-27px">
  <?php if( have_rows('images_gallery') ):?>
    <ul class=" images-list pt-30px lg:pt-74px flex flex-wrap px-15px  justify-center gap-x-4 gap-y-12">
      <?php while( have_rows('images_gallery') ) : the_row();?>
        <li category="<?php the_sub_field('category')?>"  ><img src="<?php the_sub_field('image')?>" /></li>
      <?php endwhile;?>
    </ul> 
  <?php endif;?>
</section>