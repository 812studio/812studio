<div id="recentWorkCarousel" class="borderBottom">
	<div class="recentWorkContainer">
        <ul class="recentWorkSlides">
        	
        	<?php query_posts('cat=3,4,5,6,41&posts_per_page=8'); ?>
        	
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
										
			<li>	
				<a class="recentThumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(196,196)); ?></a>
				<?php echo get_the_term_list($post->ID, 'client', '<h3>', '', '</h3>'); ?>
				<!--<span class="date"><?php the_time('M j, Y ') ?></span>-->
					
			</li>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
		</ul>
        
	</div>
	<div class="controls">
		<ul class="recentWorkPagination">
		
		</ul>
		<a href="#" class="previous">previous</a>
		<a href="#" class="next">next</a>
	</div
</div><!-- End Recent Calousel-->
