<?php
get_header();?>
<section class="film_single">
	<div class="container">
		<div class="row justify-content-center">
			<?php if(have_posts()) : while(have_posts()) : the_post();?>
		<div class="col-sm-12 col-md-10">
				<?php the_title();
    				echo '<div class="entry-content">';?>
	    				<div class="post_image" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?>">
							
						</div>
    			<?php echo '</div>';
				the_content(); 
    			?>
		</div>
    
<?php endwhile; endif;?>
		</div>
	</div>
	
</section>

<?php get_footer(); ?>