<?php get_header();  ?>


<div class="blogTop">
	
	<h5><?php the_field('blog_title', get_option('page_for_posts')) ?></h5>
	<p><?php the_field('blog_text', get_option('page_for_posts')) ?></p>

</div>

<div class="blogPost">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
      <?php // Start the loop ?>

    <div class="blogImage">
    	
		<?php the_post_thumbnail(); ?>

    </div>

    <div class="blogContent">
    	
    	<h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    </div>	
        
    <?php endwhile; // end the loop?>


</div>
	
    

<?php get_footer(); ?>