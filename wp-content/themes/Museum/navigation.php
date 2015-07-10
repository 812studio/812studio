<div id="more">
<h6>More?</h6>

	<div id="prev">
		<h5>&laquo; Previous Post</h5>
		<?php previous_post_link('%link') ?>
	</div>

	<div id="relatedPosts">
		<h5>Similar Posts</h5>
		<?php related_posts();?>
	</div>
		
	<div id="relatedTopics">
		<h5>Similar Topics</h5>
		<ul>
			<li>
			<?php if (in_category('Graphic Design')) : ?> <a href="/category/graphic-design/">Graphic Design</a> <?php endif; ?>
			<?php if (in_category('Photography')) : ?> <a href="/category/photography/">Photography</a> <?php endif; ?>
			<?php if (in_category('Print')) : ?> <a href="/category/print/">Print</a> <?php endif; ?>
			<?php if (in_category('Redesign')) : ?> <a href="/category/redesign/">Redesign</a> <?php endif; ?>
			<?php if (in_category('Web')) : ?> <a href="/category/web/">Web</a> <?php endif; ?> 
			<?php if (in_category('Writing')) : ?> <a href="/category/writing/">Writing</a> <?php endif; ?>
			
			<?php if (!in_category(array( 3,4,5,6,30,41 ))) : ?> <?php single_cat_title(); ?> <?php endif; ?> 
			</li>
			
			<?php the_tags( '<li>', '', '</li>'); ?> 
			<?php echo get_the_term_list($post->ID, 'client', '<li>', '', '</li>'); ?>
		</ul>
	</div>
	
	<div id="next">
		<h5>Next Post     &raquo; </h5>
		<?php next_post_link('%link') ?>
	</div>		
	
</div>

