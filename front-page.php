<?php get_header();  ?>

<div class="hero">  
    
  <?php 
     $heroImage = get_field('hero_image');
   ?>
  <header class="hero" style="background-image:url(<?php echo $heroImage['url'] ?>)">

  <h2 class="brand_name"> <?php the_field('brand_name') ?></h2>

  <h1 class="home_title"> <?php the_field('home_title') ?></h1>

  <h3 class="explore_the_magic"> <?php the_field('explore_the_magic') ?></h3>

</div>


<?php get_footer(); ?>



   





