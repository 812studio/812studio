<div id="featureSlider">
	<div class="projector">
        <ul class="slides">
	    	<?php query_posts('category_name=Featured'); ?>
	    	
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
										
			<li>	
				<a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(960,500)); ?></a>
				<?php // echo get_the_term_list($post->ID, 'client', '<h3>', '', '</h3>'); ?>
				<!--<span class="date"><?php // the_time('M j, Y ') ?></span>-->
			</li>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</ul><!-- End Recent Work-->
	</div>
	<a href="#" class="previous">&laquo;</a>
	<a href="#" class="next">&raquo;</a>
</div>
