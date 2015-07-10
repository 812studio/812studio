<h6><a href="/work/">Recent Work</a></h6>

<ul id="recentWork_4_up">
   	
    	<?php query_posts('cat=3,4,5,6,41&posts_per_page=4'); ?>
    	
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
									
		<li>	
			<a class="recentThumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(400,198)); ?></a>
			<?php echo get_the_term_list($post->ID, 'client', '<h3>', '', '</h3>'); ?>
			<!--<span class="date"><?php the_time('M j, Y ') ?></span>-->
				
		</li>
		<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
</ul><!-- End Recent Work-->
