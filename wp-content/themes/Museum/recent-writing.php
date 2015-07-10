<div id="writing">

	<h6><a href="/blog/">Recent Writing</a></h6>
	
	<ul>
		<?php query_posts('category_name=writing'); ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		
			<li>
				<div class="content">
					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<?php global $more; $more = 0; ?>
					<?php // the_content('Check this out &raquo;'); ?>
				</div>
				
				<h3>
					<!-- <a class="recentThumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(50,50)); ?></a> -->
					<?php the_tags('','',''); ?>
				</h3>
				
				<div class="meta">
					<?php the_time('M j, Y ') ?>
					<?php comments_popup_link('0 <span class="lilArrow"></span>','1 <span class="lilArrow"></span>','% <span class="lilArrow"></span>'); ?>
				</div>
			</li>
			
		
		<?php endwhile; endif;?>
		<?php wp_reset_query(); ?>
	</ul>

</div>

	