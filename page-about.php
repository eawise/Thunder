<?php get_header();  ?>

<div class="aboutTop">
	
	<h5><?php the_field('about_title'); ?></h5>
	<p><?php the_field('about_text'); ?></p>

</div>


<div class="aboutLeft">	

<?php while ( have_rows('about_icon_info') ) : the_row(); ?>
	<?php $iconImage = get_sub_field('about_icon'); ?>	
	<img src="<?php echo $iconImage['url']; ?>" alt="<?php echo $iconImage['alt']; ?>"> 
	<h5><?php the_sub_field('about_icon_title'); ?></h5>
	<p><?php the_sub_field('about_icon_content'); ?></p>
<?php endwhile; ?>

</div>

<div class="aboutRight">
	<?php $aboutImage = get_field('about_image_info'); ?>
	<img src="<?php echo $aboutImage['url']; ?>" alt="<?php echo $aboutImage['alt']; ?>"> 
	<p><?php the_field('about_image_content'); ?></p>
	<p><?php the_field('about_image_name'); ?></p>

</div>
	

<?php get_footer(); ?>




    
      
      
     


     



