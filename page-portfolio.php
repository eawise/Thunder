<?php get_header();  ?>


<div class="portfolioTop">
	
	<h5><?php the_field('portfolio_title'); ?></h5>
	<p><?php the_field('portfolio_text'); ?></p>

</div>
	
<figure>
	
	<?php while ( have_rows('portfolio_piece') ) : the_row(); ?>
		<div class="figImage">
			<?php $portfolioImage = get_sub_field('portfolio_image'); ?>	
			<img src="<?php echo $portfolioImage['url']; ?>" alt="<?php echo $portfolioImage['alt']; ?>">
		</div>	
		<div class="figOverlay"></div>
		<figcaption><?php the_sub_field('portfolio_title'); ?><br><?php the_sub_field('portfolio_subtitle'); ?></figcaption>
	
	<?php endwhile; ?>

</figure>



<?php get_footer(); ?>



